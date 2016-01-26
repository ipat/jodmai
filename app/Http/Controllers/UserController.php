<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Auth;

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
        $addresses = DB::table('addresses')->where('user_id', Auth::user()->id)->get();
        return response()->json($addresses);
    }

}
