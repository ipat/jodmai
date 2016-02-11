<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Auth;
use Input;
use App\Mail;
use Request;
use App\Address;
use Carbon\Carbon;
use GuzzleHttp\Client;
use App\User;

class UserController extends Controller {

    public function __construct()
    {
       $this->middleware('auth');
    }

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function mainpage()
    {
        $recent_mails = Mail::where('user_id', Auth::user()->id)->where('updated_at', '>=', Carbon::now()->subWeek())->orderBy('updated_at', 'DESC')->get();
        $blogs = DB::table('blogs')->where('show_on_timeline', 1)->get();
        return view('user.mainpage')->with('blogs', $blogs)->with('recent_mails', $recent_mails);
    }

    public function blog()
    {
        $blogs = DB::table('blogs')->orderBy('created_at', 'DESC')->get();
        return view('user.blog')->with('blogs', $blogs);
    }

    public function blogDetails($id)
    {
        $blog = DB::table('blogs')->where('id', $id)->first();
        return view('user.blogDetails')->with('blog', $blog);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function addCoupon()
    {
        return view('user.addCoupon');
    }

    public function handleAddCoupon()
    {
        $code = Request::get('code');
        $coupon = DB::table('coupons')->where('code', $code)->first();
        if($coupon == null) {
          return redirect('home')->with('error', 'ไม่พบรหัสคูปอง');
        } else {
          if($coupon->amount <= $coupon->amount_used)
            return redirect('home')->with('error', 'รหัสคูปองนี้ได้ใช้เต็มไปแล้ว');

          $check_used = DB::table('used_coupon')->where('coupon_id', $coupon->id)->where('user_id', Auth::user()->id)->first();
          if($check_used !== null) {
            return redirect('home')->with('error', 'คุณได้ใช้รหัสผ่านนี้ไปแล้ว');
          }

          DB::table('coupons')->where('code', $code)->increment('amount_used', 1);
          DB::table('used_coupon')->insert(
            array(
              'coupon_id' => $coupon->id,
              'user_id' => Auth::user()->id,
              'created_at' => Carbon::now()
            )
          );

          $User = User::find(Auth::user()->id);

          $User->credits = Auth::user()->credits + $coupon->freepoint;
          $User->save();

          return redirect('home')->with('msg', 'ใช้คูปองสำเร็จ');

        }
    }


    public function getUserAddresses()
    {
        // $addresses = DB::table('addresses')->where('user_id', Auth::user()->id)->get();
        $addresses = Address::where("is_sender", false)->get();
        return response()->json($addresses);
    }

    public function getSenderAddresses()
    {
        // $addresses = DB::table('addresses')->where('user_id', Auth::user()->id)->get();
        $addresses = Address::where("is_sender", true)->get();
        return response()->json($addresses);
    }

    public function postCreateUserAddress()
    {
        $address = new Address;
        if(Request::ajax()) {
          $data = Input::all();
          $address->user_id = Auth::user()->id;
          $address->name = $data['name'];
          $address->address_line_1 = $data['address_line_1'];
          $address->address_line_2 = $data['address_line_2'];
          $address->address_line_3 = $data['address_line_3'];
          $address->postcode = $data['postcode'];
          $address->save();
        }
        return "OK";
    }

    public function postCreateSenderAddress()
    {
        $address = new Address;
        if(Request::ajax()) {
          $data = Input::all();
          $address->user_id = Auth::user()->id;
          $address->name = $data['name'];
          $address->address_line_1 = $data['address_line_1'];
          $address->address_line_2 = $data['address_line_2'];
          $address->address_line_3 = $data['address_line_3'];
          $address->postcode = $data['postcode'];
          $address->is_sender = true;
          $address->save();
        }
        return "OK";
    }

    public function addCredit()
    {
      return view('user.addCredit');
    }

    public function yourMail()
    {
        $mails = Mail::where('user_id', Auth::user()->id)->orderBy('updated_at', 'DESC')->get();
        return view('user.yourMail')->with('mails', $mails);
    }

    public function handleTruemoney()
    {
        $true_code = Request::get("true_code");
        $client = new Client();
        $res = $client->request('GET', 'https://www.tmpay.net/TPG/backend.php', [
            'query' => [
                'merchant_id' => 'ZY16021001',
                'password' => $true_code ,
                'resp_url' => "http://www.jod-mai.com/feedbackTruemoney"//url('feedbackTruemoney')
            ]
        ]);
        $result= $res->getBody()->getContents();
        $results = explode("|", $result);
        if($results[0] == "SUCCEED") {
          DB::table('truemoney')->insert(array(
            'user_id' => Auth::user()->id,
            'transaction_id' => $results[1],
            'created_at' => Carbon::now()
          ));
          return redirect('home')->with("msg", "รอการตรวจสอบ TrueMoney สักครู่หากใช้งานได้จะทำการเพิ่ม Point ในระบบให้อัตโนมัติ");
        } else {
          return var_dump($result);
          return redirect('home')->with("error", "เกิดข้อผิดพลาดไม่สามารถเติมบัตร TrueMoney ได้");
        }
    }

    public function feedbackTruemoney()
    {
        $transaction_id = Request::get('transaction_id');
        $password = Request::get('password');
        $real_amount = Request::get('real_amount');
        $status = Request::get('status');


    }

}
