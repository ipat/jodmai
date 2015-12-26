@extends('user.layouts.master')

@section('title', 'ยินดีต้อนรับสู่จดหมาย')

@section('content')
  <!-- <div class="col-md-4">
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
  <div class="col-md-4">
    <div class="row main-user-info">
      <div class="col-md-4">
        <img src="{{Auth::user()->avatar}}" class="circle responsive-img z-depth-1" alt="" />
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
        <a href="#anounce"><i class="glyphicon glyphicon glyphicon-user"></i>  <span> จัดการบัญชี</span></a>
    </div>

    <div class="row side-menu">
        <a href="#anounce"><i class="glyphicon glyphicon-log-out"></i>  <span> ออกจากระบบ</span></a>
    </div>

    <hr>

    <div class="row side-menu">
        <a href="#main-manage"><i class="glyphicon glyphicon-th-list"></i>  <span> การจัดการหลัก</span></a>
    </div>

    <div class="row side-menu">
        <a href="#anounce"><i class="glyphicon glyphicon-bullhorn"></i>  <span> ประชาสัมพันธ์</span></a>
    </div>

    <div class="row side-menu">
        <a href="#anounce"><i class="glyphicon glyphicon glyphicon-bell"></i>  <span> แจ้งเตือนของคุณ</span></a>
    </div>


  </div>

  <div class="col-md-8">
    <div class="card-panel">

    </div>
  </div>
@endsection
