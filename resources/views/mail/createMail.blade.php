@extends('layouts.master')

@section('title', 'สร้างจดหมายใหม่')

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

  <div class="col-md-12">

    <h5>สร้างจดหมายใหม่</h5>

    <div class="card medium row hoverable">
      <!-- <div class="card-image">
        <img src="{{url('images/slider/1.jpg')}}">
        <span class="card-title">ประชาสัมพันธ์</span>
      </div> -->
      <div class="card-content">
        <h5>รูปแบบจดหมาย</h5>
        <p>ทำการเลือกรูปแบบของจดหมายที่ต้องการส่ง</p>

      </div>
      <!-- <div class="card-action ">
        <a href="#">ดูรายละเอียด</a>
      </div> -->
    </div>

    <!-- =================== Notification Cards =================== -->
    <h5>แจ้งเตือนของคุณ</h5>

    <div class="card row hoverable">
      <div class="card-content">
        <div class="row nomargin">
          <div class="col-md-2 center-align">
            <i class="glyphicon glyphicon-send card-icon"></i>
          </div>
          <div class="col-md-10">
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
