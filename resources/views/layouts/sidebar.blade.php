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
    <a href="{{url('home')}}"><i class="glyphicon glyphicon-th-list"></i>  <span> หน้าหลัก</span></a>
</div>

<div class="row side-menu">
    <a href="#anounce"><i class="glyphicon glyphicon-bullhorn"></i>  <span> ประชาสัมพันธ์</span></a>
</div>

<div class="row side-menu">
    <a href="{{url('yourMail')}}"><i class="glyphicon glyphicon glyphicon-envelope"></i>  <span> จดหมายของคุณ</span></a>
</div>

<hr style="margin-right: 2.2em;">

<div class="row side-menu">
    <a href="#announce"><i class="glyphicon glyphicon glyphicon-user"></i>  <span> จัดการบัญชี</span></a>
</div>

<div class="row side-menu">
    <a href="#anounce"><i class="glyphicon glyphicon-log-out"></i>  <span> ออกจากระบบ</span></a>
</div>
