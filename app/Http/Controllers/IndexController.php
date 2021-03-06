<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use App\User;
use Auth;
use Config;
use Session;
use Redirect;
use URL;
use Input;
use Request;
use App\Address;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;

class IndexController extends Controller {
  private $_api_context;

  public function __construct()
  {
    $this->middleware('auth');
    $paypal_conf = Config::get('paypal');
    $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
    $this->_api_context->setConfig($paypal_conf['settings']);
  }

  public function postPayment()
  {

    $payer = new Payer();
    $payer->setPaymentMethod('paypal');

    $type = Request::get('type');
    $item_name = "";
    $item_price = 0;

    // if($type == '1') {
    //   $item_name = "30Points";
    //   $item_price = 30;
    // } else
    if($type == '2') {
      $item_name = "40Points";
      $item_price = 50;
    } else if($type == '3') {
      $item_name = "75Points";
      $item_price = 90;
    } else if($type == '4') {
      $item_name = "125Points";
      $item_price = 150;
    } else if($type == '5') {
      $item_name = "255Points";
      $item_price = 300;
    } else {
      return Redirect::route('home')
      ->with('error', 'เกิดปัญหาในการเติมเครดิตกรุณาลองใหม่อีกครั้ง');
    }


    $item_1 = new Item();
    $item_1->setName($item_name) // item name
    ->setCurrency('THB')
    ->setQuantity(1)
    ->setPrice($item_price); // unit price


    // add item to list
    $item_list = new ItemList();
    $item_list->setItems(array($item_1));

    $amount = new Amount();
    $amount->setCurrency('THB')
    ->setTotal($item_price);

    $transaction = new Transaction();
    $transaction->setAmount($amount)
    ->setItemList($item_list)
    ->setDescription('Your transaction description');

    $redirect_urls = new RedirectUrls();
    $redirect_urls->setReturnUrl(URL::route('payment.status'))
    ->setCancelUrl(URL::route('payment.status'));

    $payment = new Payment();
    $payment->setIntent('Sale')
    ->setPayer($payer)
    ->setRedirectUrls($redirect_urls)
    ->setTransactions(array($transaction));

    try {
      $payment->create($this->_api_context);
    } catch (\PayPal\Exception\PPConnectionException $ex) {
      if (\Config::get('app.debug')) {
        echo "Exception: " . $ex->getMessage() . PHP_EOL;
        $err_data = json_decode($ex->getData(), true);
        exit;
      } else {
        die('Some error occur, sorry for inconvenient');
      }
    }

    foreach($payment->getLinks() as $link) {
      if($link->getRel() == 'approval_url') {
        $redirect_url = $link->getHref();
        break;
      }
    }

    // add payment ID to session
    Session::put('paypal_payment_id', $payment->getId());

    if(isset($redirect_url)) {
      // redirect to paypal
      return Redirect::away($redirect_url);
    }

    return Redirect::route('home')
    ->with('error', 'เกิดปัญหาในการเติมเครดิตกรุณาลองใหม่อีกครั้ง');
  }

  public function getPaymentStatus()
  {
    // Get the payment ID before session clear
    $payment_id = Session::get('paypal_payment_id');

    // clear the session payment ID
    Session::forget('paypal_payment_id');

    if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
      return Redirect::route('home')
      ->with('error', 'เติมเครดิตไม่สำเร็จ');
    }

    $payment = Payment::get($payment_id, $this->_api_context);

    // PaymentExecution object includes information necessary
    // to execute a PayPal account payment.
    // The payer_id is added to the request query parameters
    // when the user is redirected from paypal back to your site
    $execution = new PaymentExecution();
    $execution->setPayerId(Input::get('PayerID'));

    //Execute the payment
    $result = $payment->execute($execution, $this->_api_context);

    // var_dump($result->getTransections()[0]->getItemList());
    // var_dump($result[transactions][0][item_list][0]);
    // exit;
    // echo '<pre>';print_r($result);echo '</pre>';exit; // DEBUG RESULT, remove it later

    if ($result->getState() == 'approved') { // payment made
      $item_purchase = $result->transactions[0]->item_list->items[0];
      $User = User::find(Auth::user()->id);
      // return var_dump($User);
      $current_point = Auth::user()->credits;
      // if($item_purchase->name == '30Points') {
      //   $User->credits = $current_point + 30;
      // }
      if($item_purchase->name == '40Points') {
        $User->credits = $current_point + 40;
      }
      if($item_purchase->name == '75Points') {
        $User->credits = $current_point + 75;
      }
      if($item_purchase->name == '125Points') {
        $User->credits = $current_point + 125;
      }
      if($item_purchase->name == '255Points') {
        $User->credits = $current_point + 255;
      }
      $User->save();
      DB::table('transactions')->insert([
        ['user_id' => Auth::user()->id, 'details' => $result->toJSON()]
      ]);
      return Redirect::route('home')
      ->with('msg', 'เติมเครดิตสำเร็จ');
    }
    return Redirect::route('home')
    ->with('error', 'เติมเครดิตไม่สำเร็จ');
  }


}
