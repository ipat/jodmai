<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Auth;
use Input;
use App\Mail;
use Request;
use App\Address;
use Carbon\Carbon;
use App\User;

class AdminController extends Controller {

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
   public function __construct()
   {
       $this->middleware('admin');
       $this->middleware('auth');
   }

    public function mainpage()
    {
        // $recent_mails = Mail::where('user_id', Auth::user()->id)->where('updated_at', '>=', Carbon::now()->subWeek())->orderBy('updated_at', 'DESC')->get();
        return view('admin.adminmainpage');
    }

    public function adminBlog()
    {
        $blogs = DB::table('blogs')->orderBy('created_at', 'DESC')->get();
        return view('admin.adminblog')->with('blogs', $blogs);
    }

    public function createBlog()
    {
        return view('admin.createBlog');
    }

    public function handleCreateBlog()
    {
        $user_id = Auth::user()->id;
        $subject = Request::get('subject');
        $short_details = Request::get('short_details');
        $details = Request::get('details');
        $cover_img = Request::get('cover_img');
        $show_on_timeline = (Request::get('show_on_timeline') == 'on')? 1: 0;

        DB::table('blogs')->insert([
          [
            'user_id' => $user_id,
            'subject' => $subject,
            'short_details' => $short_details,
            'details' => $details,
            'cover_img' => $cover_img,
            'show_on_timeline' => $show_on_timeline,
            'created_at' => Carbon::now()
          ]
        ]);

        return redirect('admin/blog')->with('msg', 'บันทึกบล็อกเรียบร้อย');
        return $show_on_timeline;
    }

    public function editBlog($id)
    {
      $blog = DB::table('blogs')->where('id', $id)->first();
      return view('admin.editBlog')->with('blog', $blog);
    }

    public function handleEditBlog($id)
    {
        DB::table('blogs')->where('id', $id)->delete();
        $user_id = Auth::user()->id;
        $subject = Request::get('subject');
        $short_details = Request::get('short_details');
        $details = Request::get('details');
        $cover_img = Request::get('cover_img');
        $show_on_timeline = (Request::get('show_on_timeline') == 'on')? 1: 0;
        $created_at = Request::get('created_at');

        DB::table('blogs')->insert([
          [
            'user_id' => $user_id,
            'subject' => $subject,
            'short_details' => $short_details,
            'details' => $details,
            'cover_img' => $cover_img,
            'show_on_timeline' => $show_on_timeline,
            'created_at' => $created_at
          ]
        ]);

        return redirect('admin/blog')->with('msg', 'บันทึกบล็อกเรียบร้อย');
    }

    public function deleteBlog($id)
    {
        DB::table('blogs')->where('id', $id)->delete();
        return redirect('admin/blog')->with('msg', 'ลบบล็อกแล้ว');
    }

    public function adminMails()
    {
        $mails = Mail::orderBy('updated_at', 'DESC')->get();
        return view('admin.adminMails')->with('mails', $mails);
    }

    public function adminMailsByStatus($status)
    {
        $mails = Mail::where('status', $status)->orderBy('updated_at', 'DESC')->get();
        return view('admin.adminMails')->with('mails', $mails)->with('status', $status);
    }

    public function adminEditMailStatus($id)
    {
        $mail = Mail::find($id);
        $mail_type = DB::table('mailtypes')->where('id', $mail->mail_type_id)->first();

        return view('admin.editMailStatus')->with('mail', $mail)->with('mail_type', $mail_type);
    }

    public function handleAdminEditMailStatus($id)
    {
        $mail = Mail::find($id);
        $status = Request::get('status');
        $mail->status = $status;
        $mail->save();

        return redirect('admin/mails')->with('msg', 'เปลี่ยนสถานะเรียบร้อย');
    }



}
