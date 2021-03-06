@extends('layouts.master')

@section('title', 'สร้างจดหมายใหม่')

@section('content')
  <script type="text/javascript" src="{{url('js/tinymce/tinymce.min.js')}}"></script>
  <script>
    tinymce.init({
      selector: '#mailing',
      plugins : 'advlist autolink link lists charmap preview placeholder',
      toolbar: "undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | link | fontselect fontsizeselect | forecolor backcolor",
      indentation : '20pt',
      // autoresize_min_height: {{$mailType->height}},
      // autoresize_max_height: {{$mailType->width}},
    });
  </script>
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

  <script type="text/javascript" src="{{url('js/mail.js')}}"></script>

  <div class="col-md-12">

    <h5>สร้างจดหมายใหม่</h5>

    <div class="card row hoverable">
      <div class="card-content">
        <h5 class="no-margin-top">ข้อมูลจดหมาย</h5>
        <h6>ประเภทจดหมาย <b>{{$mailType->name}}</b></h6>
        <hr>
        <div class="row">
          <div class="col m2">
            ที่อยู่ผู้รับ
          </div>
          <div class="col m4">
            <b>{{$receiver_address->name}}</b> <br>
            {{$receiver_address->address_line_1}} <br>
            {{$receiver_address->address_line_2}} <br>
            {{$receiver_address->address_line_3}} <br>
            {{$receiver_address->postcode}} <br>
          </div>

          <div class="col m2">
            ที่อยู่ผู้ส่ง
          </div>
          <div class="col m4">
            @if ($sender_address != null)
              <b>{{$sender_address->name}}</b> <br>
              {{$sender_address->address_line_1}} <br>
              {{$sender_address->address_line_2}} <br>
              {{$sender_address->address_line_3}} <br>
              {{$sender_address->postcode}} <br>
            @else
              <big>ไม่ระบุที่อยู่ผู้ส่ง</big>
            @endif
          </div>
        </div>
        <a href="{{url('mail/create')}}" class=" modal-action modal-close waves-effect waves-white btn red lighten2" id="submit-new-address"><< กลับไปแก้ไข</a>

      </div>
    </div>

    <!-- ======== Select Mail Category ======== -->
    <div class="card row hoverable">
      <div class="card-content">
        <h5 class="no-margin-top">เขียนจดหมาย</h5>
        <p>ทำการเขียนจดหมายของคุณ</p>
        {!! Form::open(array('method'=>'POST', 'id'=>'mail-form')) !!}
          <input type="hidden" name="mail_type_id" value="{{$mailType->id}}">
          <input type="hidden" name="receiver_address_id" value="{{$receiver_address->id}}">
          <input type="hidden" name="sender_address_id" value="{{($sender_address)? $sender_address->id: 0}}">
          <textarea id="mailing" name="content" placeholder="เขียนจดหมายของท่านที่นี่"></textarea>
          <br>
          <label><u>คำแนะนำ</u> ไม่ควรเขียนเกิน 30 คำต่อหนึ่งแผ่น</label>
          <label><u>หมายเหตุ</u> ทาง Jodmai ขอสงวนสิทธิ์ในการปรับแต่งรูปแบบข้อความให้มีความเหมาะสมกับจดหมายที่ทำการส่ง</label>
          <br>
          <button class="waves-effect waves-light btn blue lighten-2 modal-trigger" id="next-page" type="button" data-target="confirmModal"><i class="material-icons left">add</i> ดำเนินการต่อ >></button>

        {!! Form::close() !!}
      </div>
    </div>

    <!-- Modal Structure -->
    <div id="confirmModal" class="modal">
      <div class="modal-content">
        <h4>ยืนยันการบันทึก</h4>
        <p>หากทำการยืนยันแล้วจะ <b>ไม่สามารถ</b> แก้ไขได้อีก ท่านต้องการยืนยันเลยหรือไม่</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn confirm-save">บันทึก</a>
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn red lighten2">กลับไปแก้ไข</a>
      </div>
    </div>



@endsection
