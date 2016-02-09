@extends('layouts.master')

@section('title', 'จดหมาย (Jodmai)')

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
    <div class="card-panel main-manage row center-align nopad">
      <a class="col s3 hoverable" href="{{url('admin/mails')}}">
        <i class="glyphicon glyphicon-envelope icon"></i> <br>
        ทุกสถานะ
      </a>
      <a class="col s3 hoverable" href="{{url('admin/mails/0')}}">
        <i class="glyphicon glyphicon-transfer icon"></i> <br>
        รอการดำเนินการ
      </a>
      <a class="col s3 hoverable" href="{{url('admin/mails/1')}}">
        <i class="glyphicon glyphicon-time icon"></i> <br>
        รอการจัดส่ง
      </a>
      </a>
      <a class="col s3 hoverable" href="{{url('admin/mails/2')}}">
        <i class="glyphicon glyphicon-send icon"></i> <br>
        ทำการจัดส่งแล้ว
      </a>
    </div>

    <h5>จดหมาย -
      @if (!isset($status))
        ทุกสถานะ
      @elseif ($status == 0)
        รอการดำเนินการ
      @elseif ($status == 1)
        รอการจัดส่ง
      @elseif ($status == 2)
        ทำการจัดส่งแล้ว
      @endif
    </h5>
    @foreach ($mails as $mail)
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
                  @else
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
          <a href="{{url('admin/mails/edit')}}/{{$mail->id}}">ดูรายละเอียด</a>
        </div>
      </div>
    @endforeach


  </div>
@endsection
