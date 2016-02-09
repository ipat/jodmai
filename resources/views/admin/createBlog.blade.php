@extends('layouts.master')

@section('title', 'จดหมาย (Jodmai)')

@section('content')
  <script type="text/javascript" src="{{url('js/tinymce/tinymce.min.js')}}"></script>
  <script>
    tinymce.init({
      selector: '#mailing',
      plugins : 'advlist autolink link lists charmap preview placeholder',
      toolbar: "undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | link | fontselect fontsizeselect | forecolor backcolor",
      indentation : '20pt',
    });
  </script>
  <div class="col-sm-4">
    @include('layouts.sidebar')
  </div>

  <div class="col-sm-8">

    <!-- =================== Announcement Cards =================== -->
    <h5>สร้างบล็อกใหม่</h5>

    <div class="card row hoverable">
      <div class="card-content">
        {!! Form::open(array('method'=>'POST', 'id'=>'mail-form')) !!}
          <div class="row">
            <input type="text" name="subject" value="" placeholder="หัวข้อ">
            <input type="text" name="cover_img" value="" placeholder="ที่อยู่ภาพ">
          </div>
          <div class="row">
            <textarea name="short_details" rows="8" cols="40" placeholder="ใส่ข้อความย่อ" class="materialize-textarea"></textarea>
          </div>
          <div class="row">
            <textarea id="mailing" name="details" placeholder="ใส่ข้อความเต็ม"></textarea>
          </div>
          <input type="checkbox" id="show_on_timeline" name="show_on_timeline"/>
          <label for="show_on_timeline">แสดงบน Timeline</label>
          <label><u>หมายเหตุ</u> ทาง Jodmai ขอสงวนสิทธิในการปรับแต่งรูปแบบข้อความให้มีความเหมาะสมกับจดหมายที่ทำการส่ง</label>
          <button class="waves-effect waves-light btn blue lighten-2 modal-trigger" id="next-page" type="submit"><i class="material-icons left">add</i> บันทึก >></button>

        {!! Form::close() !!}
      </div>
    </div>





  </div>
@endsection
