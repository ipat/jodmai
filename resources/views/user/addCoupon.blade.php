@extends('layouts.master')

@section('title', 'ยินดีต้อนรับสู่จดหมาย')

@section('content')
  <div class="col-sm-4">
    @include('layouts.sidebar')
  </div>

  <div class="col-sm-8">


    <!-- =================== Announcement Cards =================== -->
    <div class="card row hoverable">
      <div class="card-content">
        <h5>ใส่รหัสคูปอง</h5>
        <h6>ใส่รหัสเพื่อรับ Point พิเศษ</h6>
        <hr>
        {!! Form::open(array('method'=>'POST', 'id'=>'add-coupon')) !!}
          <div class="input-field">
            <label for="code">รหัสพิเศษ</label>
            <input type="text" name="code" id="code" value="">
          </div>
          <button class="waves-effect waves-light btn blue lighten-2 modal-trigger" id="next-page" type="submit">ยืนยันรหัสคูปอง <i class="material-icons left">fast_forward</i></button>
        {!! Form::close() !!}
      </div>
    </div>
      <a class="waves-effect waves-light btn red row" id="next-page" href="javascript:history.back()"><i class="material-icons left">fast_rewind</i> กลับ</a>

  </div>
@endsection
