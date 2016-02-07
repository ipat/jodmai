<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Auth;
use Input;
use App\Mail;
use Request;
use App\Address;
use Carbon\Carbon;

class UserController extends Controller {

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function mainpage()
    {
        $recent_mails = Mail::where('user_id', Auth::user()->id)->where('updated_at', '>=', Carbon::now()->subWeek())->orderBy('updated_at', 'DESC')->get();
        return view('user.mainpage')->with('recent_mails', $recent_mails);
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

}
