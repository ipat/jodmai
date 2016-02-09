<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Auth;
use Request;
use App\User;
use Redirect;
use App\Address;
use App\Mail;

class MailController extends Controller {

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
    public function create()
    {
        $mail_categories = DB::table('categories')->get();
        return view('mail.createMail')->with('mail_categories', $mail_categories);
    }

    public function createMailType($mailTypeId, $receiverAddressId, $senderAddressId)
    {
        $mail_type = DB::table('mailtypes')->where('id', $mailTypeId)->first();
        if($mail_type->price > Auth::user()->credits)
          return redirect('home')->with('error', 'เครดิตของคุณไม่เพียงพอ');
        $receiver_address = Address::where('id', $receiverAddressId)->first();
        if(!$receiver_address || $receiver_address->user_id != Auth::user()->id || !$mail_type)
          return redirect('home')->with("error", "มีบางอย่างผิดพลาด");
        if($senderAddressId != 0) {
          $sender_address = Address::where('id', $senderAddressId)->first();
          if(!$sender_address || $sender_address->user_id != Auth::user()->id || !$mail_type || $sender_address->is_sender == false)
            return redirect('home')->with("error", "มีบางอย่างผิดพลาด");
        } else {
          $sender_address = null;
        }
        $mail_type = DB::table('mailtypes')->where('id', $mailTypeId)->first();
        $data = array (
          'receiver_address' => $receiver_address,
          'sender_address' => $sender_address,
          'mailType' => $mail_type
        );
        return view('mail.createMailType')->with($data);
    }

    public function handleCreateMailType()
    {
        // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        // Reduce Credit before approve email
        // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        $receiver_address = Address::where('id', Request::get('receiver_address_id'))->first();
        if(!$receiver_address || $receiver_address->user_id != Auth::user()->id)
          return redirect('home')->with("error", "มีบางอย่างผิดพลาด");

        $mail_type = DB::table('mailtypes')->where('id', Request::get('mail_type_id'))->first();
        if($mail_type->price > Auth::user()->credits)
          return redirect('home')->with('error', 'เครดิตของคุณไม่เพียงพอ');

        $mail = new Mail;
        $mail->user_id = Auth::user()->id;
        $mail->mail_type_id = Request::get('mail_type_id');
        $mail->content = Request::get('content');
        $mail->receiver_name = $receiver_address->name;
        $mail->receiver_address_line_1 = $receiver_address->address_line_1;
        $mail->receiver_address_line_2 = $receiver_address->address_line_2;
        $mail->receiver_address_line_3 = $receiver_address->address_line_3;
        $mail->receiver_postcode = $receiver_address->postcode;
        $mail->status = 0;

        if(Request::get('sender_address_id') != 0) {
          $sender_address = Address::where('id', Request::get('sender_address_id'))->first();
          if(!$sender_address || $sender_address->user_id != Auth::user()->id || $sender_address->is_sender == false)
            return redirect('home')->with("error", "มีบางอย่างผิดพลาด Test");
          $mail->sender_name = $sender_address->name;
          $mail->sender_address_line_1 = $sender_address->address_line_1;
          $mail->sender_address_line_2 = $sender_address->address_line_2;
          $mail->sender_address_line_3 = $sender_address->address_line_3;
          $mail->sender_postcode = $sender_address->postcode;
        }

        $mail->save();
        $User = User::find(Auth::user()->id);
        $User->credits -= $mail_type->price;
        $User->save();


        return redirect('home')->with("msg", "บันทึกจดหมายของท่านแล้ว");

    }

    public function getMailTypes($id)
    {
        $mail_types = DB::table('mailtypes')->where('category_id', $id)->get();
        return response()->json($mail_types);
    }

    public function mailDetails($id)
    {
        $mail = Mail::find($id);
        if($mail->user_id != Auth::user()->id) {
          return redirect('home')->with("error", "เกิดข้อผิดพลาด");
        } else {
          $mail_type = DB::table('mailtypes')->where('id', $mail->mail_type_id)->first();
          return view('mail.mailDetails')->with('mail_type', $mail_type)->with('mail', $mail);
        }
    }


}
