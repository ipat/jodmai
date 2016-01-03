<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MailController extends Controller {

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function create()
    {
        return view('mail.createMail');
    }

}
