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

  <div class="col-sm-8">


    <!-- =================== Announcement Cards =================== -->
    <h5>สิทธิ์การใช้งาน</h5>
    <div class="card row hoverable">
      <div class="card-content">
        1. www.jod-mai.com จะไม่รับผิดชอบในกรณีใดๆก็ตามที่เกิดขึ้นจากเนื้อหาของข้อความของผู้ส่ง ถึง ผู้รับ <br>
        2. www.jod-mai.com มีสิทธิ์ในการอ่านข้อความในจดหมาย ในกรณีที่จำเป็น <br>
        3. www.jod-mai.com มีสิทธิ์ ในการให้ข้อมูลผู้ส่งแก่ผู้รับย้อนหลัง ในกรณีที่มีการเรียกร้องจากผู้รับ <br>
        4. www.jod-mai.com มีสิทธิ์ในการเปลี่ยนแปลงสิทธิ์การใช้งาน และราคาโดยไม่ต้องแจ้งให้ท่านทราบ
      </div>
    </div>
      <a class="waves-effect waves-light btn red row" id="next-page" href="javascript:history.back()"><i class="material-icons left">fast_rewind</i> กลับ</a>

  </div>
@endsection
