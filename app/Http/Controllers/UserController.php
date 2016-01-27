<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Auth;
use Input;
use Request;
use App\Address;

class UserController extends Controller {

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function mainpage()
    {
        return view('user.mainpage');
    }


    public function getUserAddresses()
    {
        // $addresses = DB::table('addresses')->where('user_id', Auth::user()->id)->get();
        $addresses = Address::all();
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

}
