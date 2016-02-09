@extends('layouts.master')

@section('title', 'รายละเอียดจดหมาย - จดหมาย (Jodmai)')

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
    <h5>ข้อมูลจดหมาย</h5>

    <div class="card row hoverable">
      <div class="card-content">
        <h5><b>{{$mail->id}}</b> | {{$mail_type->name}} -
            <u>
              @if ($mail->status == 0)
                รอการดำเนินการ
              @elseif ($mail->status == 1)
                รอการจัดส่ง
              @elseif ($mail->status == 2)
                ทำการจัดส่งแล้ว
              @endif
          </u>
        </h5>
          <div class="row">
            <div class="col m6">
              ที่อยู่ผู้รับ <br>
              <b>{{$mail->receiver_name}}</b> <br>
              {{$mail->receiver_address_line_1}} <br>
              {{$mail->receiver_address_line_2}} <br>
              {{$mail->receiver_address_line_3}} <br>
              {{$mail->receiver_postcode}} <br>
            </div>
            <div class="col m6">
                ที่อยู่ผู้ส่ง <br>
              @if($mail->sender_name == null)
                <big>ไม่ระบุชื่อผู้ส่ง</big>
              @else
                <b>{{$mail->sender_name}}</b> <br>
                {{$mail->sender_address_line_1}} <br>
                {{$mail->sender_address_line_2}} <br>
                {{$mail->sender_address_line_3}} <br>
                {{$mail->sender_postcode}} <br>
              @endif
            </div>
          </div>
          <hr>
          <div class="">
            <big><b>ข้อมูลในจดหมาย</b></big>
            <p class="panel">
              {!!html_entity_decode($mail->content)!!}
            </p>
          </div>
          <div class="">
            {!! Form::open(array('method'=>'POST', 'id'=>'mail-form')) !!}
                <h5>เปลี่ยนสถานะ</h5>
                <p>
                  <input class="with-gap" name="status" type="radio" id="status0" value='0' {{($mail->status == 0)? 'checked':''}} />
                  <label for="status0">รอการดำเนินการ</label>
                </p>
                <p>
                  <input class="with-gap" name="status" type="radio" id="status1" value='1' {{($mail->status == 1)? 'checked':''}}/>
                  <label for="status1">รอการจัดส่ง</label>
                </p>
                <p>
                  <input class="with-gap" name="status" type="radio" id="status2" value="2" {{($mail->status == 2)? 'checked':''}}/>
                  <label for="status2">ทำการจัดส่งแล้ว</label>
                </p>
                <button class="waves-effect waves-light btn blue lighten-2 modal-trigger" id="next-page" type="submit">ยืนยันการเปลี่ยนสถานะ</button>
            {!! Form::close() !!}
          </div>
      </div>
    </div>

    <a class="waves-effect waves-light btn red row" id="next-page" href="javascript:history.back()"><i class="material-icons left">fast_rewind</i> กลับ</a>



  </div>
@endsection
