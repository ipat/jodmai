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
    @include('layouts.sidebar')
  </div>
  <h3 style="color:red">หน้านี้สำหรับผู้จัดการระบบเท่านั้น</h3>
  <div class="col-sm-8">

    <div class="card-panel main-manage row center-align nopad">
      <a class="col s4 hoverable" href="{{url('admin/blog')}}">
        <i class="glyphicon glyphicon-plus icon"></i> <br>
        จัดการบล็อก
      </a>
      <a class="col s4 hoverable" href="{{url('yourMail')}}">
        <i class="glyphicon glyphicon-envelope icon"></i> <br>
        จดหมายของคุณ
      </a>
      <a class="col s4 hoverable" href="{{url('addCredit')}}">
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

  </div>
@endsection
