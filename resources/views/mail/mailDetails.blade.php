@extends('layouts.master')

@section('title', 'ยินดีต้อนรับสู่จดหมาย')

@section('content')
  <!-- <div class="col-sm-4">
    <div class="card-panel collection">
      <div class="collection-item center-align">
        <img src="{{Auth::user()->avatar}}" class="circle responsive-img z-depth-1" alt="" />
        <br>
        คุณ {{Auth::user()->name}}
      </div>
      <div class="collection-item">
        <img src="{{Auth::user()->avatar}}" class="circle responsive-img center-align z-depth-1" alt="" />
      </div>
    </div>
  </div> -->
  <div class="col-sm-4">
    <div class="row main-user-info">
      <div class="col-md-4">
        <div style="background-image:url({{Auth::user()->avatar}})" class="circle responsive-img z-depth-1 user-avatar"> </div>
      </div>
      <div class="col-md-8 left-align nopad valign-wrapper">
        <p class="valign">
          <span class="username">คุณ {{Auth::user()->name}}</span>
          <br>
          คุณมีเครดิต {{Auth::user()->credits}} points
        </p>
      </div>
    </div>

    <div class="row side-menu">
        <a href="#main-manage"><i class="glyphicon glyphicon-th-list"></i>  <span> การจัดการหลัก</span></a>
    </div>

    <div class="row side-menu">
        <a href="#anounce"><i class="glyphicon glyphicon-bullhorn"></i>  <span> ประชาสัมพันธ์</span></a>
    </div>

    <div class="row side-menu">
        <a href="#anounce"><i class="glyphicon glyphicon glyphicon-bell"></i>  <span> แจ้งเตือนของคุณ</span></a>
    </div>

    <hr style="margin-right: 2.2em;">

    <div class="row side-menu">
        <a href="#announce"><i class="glyphicon glyphicon glyphicon-user"></i>  <span> จัดการบัญชี</span></a>
    </div>

    <div class="row side-menu">
        <a href="#anounce"><i class="glyphicon glyphicon-log-out"></i>  <span> ออกจากระบบ</span></a>
    </div>

  </div>

  <div class="col-sm-8">

    <!-- =================== Announcement Cards =================== -->
    <h5>ข้อมูลจดหมาย</h5>

    <div class="card row hoverable">
      <div class="card-content">
        <h5>จดหมาย {{$mail_type->name}}</h5>
          <div class="row">
            <div class="col m6">
              ที่อยู่ผู้รับ <b>{{$mail->receiver_name}}</b> <br>
              {{$mail->receiver_address_line_1}} <br>
              {{$mail->receiver_address_line_2}} <br>
              {{$mail->receiver_address_line_3}} <br>
              {{$mail->receiver_postcode}} <br>
            </div>
            <div class="col m6">
              ที่อยู่ผู้ส่ง <b>{{$mail->sender_name}}</b> <br>
              {{$mail->sender_address_line_1}} <br>
              {{$mail->sender_address_line_2}} <br>
              {{$mail->sender_address_line_3}} <br>
              {{$mail->sender_postcode}} <br>
            </div>
          </div>
          <hr>
          <div class="">
            <big><b>ข้อมูลในจดหมาย</b></big>
            <p class="panel">
              {!!html_entity_decode($mail->content)!!}
            </p>
          </div>
      </div>
    </div>

    <a class="waves-effect waves-light btn red lighten-2" id="next-page" href="javascript:history.back()"><i class="material-icons left">fast_rewind</i> กลับ</a>



  </div>
@endsection
