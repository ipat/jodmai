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

    <div class="card-panel main-manage row center-align nopad">
      <a class="col s4 hoverable" href="{{url('mail/create')}}">
        <i class="glyphicon glyphicon-envelope icon"></i> <br>
        จดหมายใหม่
      </a>
      <a class="col s4 hoverable">
        <i class="glyphicon glyphicon-share-alt icon"></i> <br>
        ความคืบหน้า
      </a>
      <a class="col s4 hoverable">
        <i class="glyphicon glyphicon-credit-card icon"></i> <br>
        เติมเครดิต
      </a>
    </div>

    <!-- =================== Announcement Cards =================== -->
    <h5>ประชาสัมพันธ์</h5>

    <div class="card medium row hoverable">
      <div class="card-image">
        <img src="images/slider/1.jpg">
        <span class="card-title">ประชาสัมพันธ์</span>
      </div>
      <div class="card-content">
        <p>I am a very simple card. I am good at containing small bits of information.
        I am convenient because I require little markup to use effectively.</p>
      </div>
      <div class="card-action ">
        <a href="#">ดูรายละเอียด</a>
      </div>
    </div>

    <!-- =================== Notification Cards =================== -->
    <h5>แจ้งเตือนของคุณ</h5>

    <div class="card row hoverable">
      <div class="card-content">
        <div class="row nomargin">
          <div class="col-sm-2 center-align">
            <i class="glyphicon glyphicon-send card-icon"></i>
          </div>
          <div class="col-sm-10">
            <p class="card-topic">กำลังจัดส่ง</p>
            I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.
          </div>
        </div>

      </div>
      <div class="card-action ">
        <a href="#">ดูรายละเอียด</a>
      </div>
    </div>

  </div>
@endsection
