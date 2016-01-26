<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;

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

    public function getMailTypes($id)
    {
        $mail_types = DB::table('mailtypes')->where('category_id', $id)->get();
        return response()->json($mail_types);
    }


}
