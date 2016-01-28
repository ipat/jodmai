<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\Address;

class MailController extends Controller {

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function create()
    {
        $mail_categories = DB::table('categories')->get();
        return view('mail.createMail')->with('mail_categories', $mail_categories);
    }

    public function createMailType($mailTypeId, $addressId)
    {
        $address = Address::where('id', $addressId)->first();
        $mail_type = DB::table('mailtypes')->where('id', $mailTypeId)->first();
        if(!$address || $address->user_id != Auth::user()->id || !$mail_type)
          return redirect('home')->with("Error", "มีบางอย่างผิดพลาด");
        $data = array (
          'address' => $address,
          'mailType' => $mail_type
        );
        return view('mail.createMailType')->with($data);
    }

    public function getMailTypes($id)
    {
        $mail_types = DB::table('mailtypes')->where('category_id', $id)->get();
        return response()->json($mail_types);
    }


}
