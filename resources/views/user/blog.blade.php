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


    <!-- =================== Announcement Cards =================== -->
    <h5>ประชาสัมพันธ์</h5>

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

  </div>
@endsection
