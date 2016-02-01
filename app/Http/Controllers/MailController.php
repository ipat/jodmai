<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Auth;
use Request;
use App\Address;
use App\Mail;

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
          return redirect('home')->with("error", "มีบางอย่างผิดพลาด");
        $data = array (
          'address' => $address,
          'mailType' => $mail_type
        );
        return view('mail.createMailType')->with($data);
    }

    public function handleCreateMailType()
    {
        // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!1
        // Reduce Credit before approve email
        // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        $address = Address::where('id', Request::get('address_id'))->first();
        $mail_Type = DB::table('mailtypes')->where('id', Request::get('mail_type_id'))->first();

        $mail = new Mail;
        $mail->user_id = Auth::user()->id;
        $mail->mail_type_id = Request::get('mail_type_id');
        $mail->content = Request::get('content');
        $mail->name = $address->name;
        $mail->address_line_1 = $address->address_line_1;
        $mail->address_line_2 = $address->address_line_2;
        $mail->address_line_3 = $address->address_line_3;
        $mail->postcode = $address->postcode;
        $mail->status = 0;

        $mail->save();
        return redirect('home')->with("msg", "บันทึกจดหมายของเท่านแล้ว");

    }

    public function getMailTypes($id)
    {
        $mail_types = DB::table('mailtypes')->where('category_id', $id)->get();
        return response()->json($mail_types);
    }


}
