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

    <div class="card-panel main-manage row center-align nopad">
      <a class="col s4 hoverable" href="{{url('mail/create')}}">
        <i class="glyphicon glyphicon-plus icon"></i> <br>
        จดหมายใหม่
      </a>
      <a class="col s4 hoverable" href="{{url('yourMail')}}">
        <i class="glyphicon glyphicon-envelope icon"></i> <br>
        จดหมายของคุณ
      </a>
      <a class="col s4 hoverable" href="{{url('addCredit')}}">
        <i class="glyphicon glyphicon-credit-card icon"></i> <br>
        เติมเครดิต
      </a>
    </div>

    <!-- =================== Announcement Cards =================== -->
    @if(count($blogs) != 0)
      <h5>ประชาสัมพันธ์</h5>
    @endif

    @foreach ($blogs as $blog)
      <div class="card medium row hoverable">
        <div class="card-image">
          <img src="{{url($blog->cover_img)}}">
          <span class="card-title">{{$blog->subject}}</span>
        </div>
        <div class="card-content">
          <p>{{$blog->short_details}}</p>
        </div>
        <div class="card-action ">
          <a href="{{url('blog/')}}/{{$blog->id}}">ดูรายละเอียด</a>
        </div>
      </div>
    @endforeach

    <!-- =================== Notification Cards =================== -->
    @if(count($recent_mails) != 0)
      <h5>แจ้งเตือนของคุณ</h5>
    @endif

    @foreach ($recent_mails as $mail)
      <div class="card row hoverable">
        <div class="card-content">
          <div class="row nomargin">
            <div class="col-sm-2 center-align">
              <i class="glyphicon
                @if ($mail->status == 0)
                  glyphicon-transfer
                @elseif ($mail->status == 1)
                  glyphicon-time
                @elseif ($mail->status == 2)
                  glyphicon-send
                @endif
               card-icon"></i>
            </div>
            <div class="col-sm-10">
              <p class="card-topic">
                <big>
                  @if ($mail->status == 0)
                    รอการดำเนินการ
                  @elseif ($mail->status == 1)
                    รอการจัดส่ง
                  @elseif ($mail->status == 2)
                    ทำการจัดส่งแล้ว
                  @endif
                </big>
                <br>
                <small>
                  @if ($mail->status == 0)
                    บันทึกจดหมายเมื่อ {{$mail->created_at}}
                  @elseif ($mail->status == 1)
                    อัพเดตล่าสุดเมื่อ {{$mail->created_at}}
                  @endif
                </small>
              </p>
              <hr>
              จดหมายจัดส่งถึง <b>{{$mail->receiver_name}}</b> <br>
              {{$mail->receiver_address_line_1}} <br>
              {{$mail->receiver_address_line_2}} <br>
              {{$mail->receiver_address_line_3}} <br>
              {{$mail->receiver_postcode}} <br>
            </div>
          </div>

        </div>
        <div class="card-action ">
          <a href="{{url('mail/details')}}/{{$mail->id}}">ดูรายละเอียด</a>
        </div>
      </div>
    @endforeach

  </div>
@endsection
