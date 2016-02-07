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
        <h5>{{$mail_type->name}} -
            <u>
            @if ($mail->status == 0)
              รอการดำเนินการ
            @elseif ($mail->status == 1)
              ทำการจัดส่งแล้ว
            @endif
          </u>
        </h5>
          <div class="row">
            <div class="col m6">
              ที่อยู่ผู้รับ <b>{{$mail->receiver_name}}</b> <br>
              {{$mail->receiver_address_line_1}} <br>
              {{$mail->receiver_address_line_2}} <br>
              {{$mail->receiver_address_line_3}} <br>
              {{$mail->receiver_postcode}} <br>
            </div>
            <div class="col m6">
              ที่อยู่ผู้ส่ง <b>{{$mail->sender_name}}</b> <br>
              {{$mail->sender_address_line_1}} <br>
              {{$mail->sender_address_line_2}} <br>
              {{$mail->sender_address_line_3}} <br>
              {{$mail->sender_postcode}} <br>
            </div>
          </div>
          <hr>
          <div class="">
            <big><b>ข้อมูลในจดหมาย</b></big>
            <p class="panel">
              {!!html_entity_decode($mail->content)!!}
            </p>
          </div>
      </div>
    </div>

    <a class="waves-effect waves-light btn red lighten-2" id="next-page" href="javascript:history.back()"><i class="material-icons left">fast_rewind</i> กลับ</a>



  </div>
@endsection
