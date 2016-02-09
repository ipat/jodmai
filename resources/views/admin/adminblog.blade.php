@extends('layouts.master')

@section('title', 'จดหมาย (Jodmai)')

@section('content')
  <div class="col-sm-4">
    @include('layouts.sidebar')
  </div>

  <div class="col-sm-8">

    <!-- =================== Announcement Cards =================== -->
    <h5>การประชาสัมพันธ์ต่างๆ</h5>
    <a class="waves-effect waves-light btn blue lighten-2" id="next-page" href="{{url('admin/createBlog')}}"><i class="material-icons left">add</i> เพิ่มบล็อกใหม่ >></a>

    @foreach ($blogs as $blog)
      <div class="card medium row hoverable {{($blog->show_on_timeline)? 'yellow':''}}">
        <div class="card-image">
          <img src="{{url($blog->cover_img)}}">
          <span class="card-title">{{$blog->subject}}</span>
        </div>
        <div class="card-content">
          <p>{{$blog->short_details}}</p>
        </div>
        <div class="card-action ">
          <a href="{{url('admin/blog/edit/')}}/{{$blog->id}}">ดูรายละเอียด</a>
        </div>
      </div>
    @endforeach





  </div>
@endsection
