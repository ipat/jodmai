@extends('layouts.master')

@section('title', 'สร้างจดหมายใหม่')

@section('content')
  <script type="text/javascript" src="{{url('js/tinymce/tinymce.min.js')}}"></script>
  <script>
    tinymce.init({
      selector: '#mailing',
      plugins : 'advlist autolink link image lists charmap preview',
      toolbar: "undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | link image | fontselect fontsizeselect | forecolor backcolor",
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
            ที่อยู่ในการจัดส่ง
          </div>
          <div class="col m10">
            <b>{{$address->name}}</b> <br>
            {{$address->address_line_1}} <br>
            {{$address->address_line_2}} <br>
            {{$address->address_line_3}} <br>
            {{$address->postcode}} <br>
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
        {!! Form::open(array('method'=>'POST')) !!}
          <textarea id="mailing" name="content">เขียนจดหมายของท่านที่นี่</textarea>
          <br>
          <button class="waves-effect waves-light btn blue lighten-2" id="next-page" type="submit"><i class="material-icons left">add</i> ดำเนินการต่อ >></button>
        {!! Form::close() !!}
      </div>
    </div>




@endsection
