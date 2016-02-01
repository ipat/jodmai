@extends('layouts.master')

@section('title', 'เติมเครดิต - จดหมาย (Jodmai)')

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
    <h5>เติมเครดิต</h5>

    <div class="card row hoverable">
      <!-- <div class="card-image">
        <img src="images/slider/1.jpg">
        <span class="card-title">ประชาสัมพันธ์</span>
      </div> -->
      <div class="card-content">
        <table class="highlight">
         <thead>
           <tr>
               <th data-field="amount">จำนวน Point</th>
               <th data-field="price">ราคา</th>
               <th data-field="add">เติมเครดิต</th>
           </tr>
         </thead>

         <tbody>
           <tr>
             <td>30 point</td>
             <td>30 บาท</td>
             <td><a href="#">เติมเครดิต</a></td>
           </tr>
           <tr>
             <td>50 point</td>
             <td>50 บาท</td>
             <td><a href="#">เติมเครดิต</a></td>
           </tr>
           <tr>
             <td>100 point</td>
             <td>95 บาท</td>
             <td><a href="#">เติมเครดิต</a></td>
           </tr>
           <tr>
             <td>200 point</td>
             <td>185 บาท</td>
             <td><a href="#">เติมเครดิต</a></td>
           </tr>
           <tr>
             <td>500 point</td>
             <td>450 บาท</td>
             <td><a href="#">เติมเครดิต</a></td>
           </tr>
         </tbody>
       </table>
      </div>
    </div>


  </div>
@endsection
