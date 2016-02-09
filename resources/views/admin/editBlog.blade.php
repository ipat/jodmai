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
    <h5>แก้ไขบล็อก</h5>
    <div class="card row hoverable">
      <div class="card-content">
        {!! Form::open(array('method'=>'POST', 'id'=>'mail-form')) !!}
          <input type="hidden" name="name" value="{{$blog->created_at}}">
          <div class="row">
            <input type="text" name="subject" value="{{$blog->subject}}" placeholder="หัวข้อ">
            <input type="text" name="cover_img" value="{{$blog->cover_img}}" placeholder="ที่อยู่ภาพ">
          </div>
          <div class="row">
            <textarea name="short_details" rows="8" cols="40" placeholder="ใส่ข้อความย่อ" class="materialize-textarea">{{$blog->short_details}}</textarea>
          </div>
          <div class="row">
            <textarea id="mailing" name="details" placeholder="ใส่ข้อความเต็ม">{{$blog->details}}</textarea>
          </div>
          <input type="checkbox" id="show_on_timeline" name="show_on_timeline"/>
          <label for="show_on_timeline">แสดงบน Timeline</label>
          <label><u>หมายเหตุ</u> ทาง Jodmai ขอสงวนสิทธิในการปรับแต่งรูปแบบข้อความให้มีความเหมาะสมกับจดหมายที่ทำการส่ง</label>
          <button class="waves-effect waves-light btn blue lighten-2 modal-trigger" id="next-page" type="submit"><i class="material-icons left">add</i> บันทึก >></button>

        {!! Form::close() !!}
      </div>
    </div>
    {!! Form::open(array('method'=>'POST', 'id'=>'mail-form', 'url'=>'admin/blog/delete/' . $blog->id)) !!}
      <button class="waves-effect waves-light btn red modal-trigger" id="next-page" type="submit">ลบบล็อกนี้ทิ้ง</button>
    {!! Form::close() !!}





  </div>
@endsection
