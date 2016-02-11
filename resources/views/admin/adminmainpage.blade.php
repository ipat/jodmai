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
      <a class="col s6 hoverable" href="{{url('admin/blog')}}">
        <i class="glyphicon glyphicon-plus icon"></i> <br>
        จัดการบล็อก
      </a>
      <a class="col s6 hoverable" href="{{url('admin/mails')}}">
        <i class="glyphicon glyphicon-envelope icon"></i> <br>
        จัดการจดหมาย
      </a>
    </div>


  </div>
@endsection
