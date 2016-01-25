@extends('layouts.master')

@section('title', 'สร้างจดหมายใหม่')

@section('content')
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

    <!-- ======== Select Mail Category ======== -->
    <div class="card row hoverable">
      <div class="card-content">
        <h5 class="no-margin-top">รูปแบบจดหมาย</h5>
        <p>ทำการเลือกรูปแบบของจดหมายที่ต้องการส่ง</p>
        @foreach ($mail_categories as $category)
            <div class="choice mail-category-choice hoverable" data-cat-id="{{$category->id}}">
              <div class="choice-img">
                <img src="{{$category->picture_url}}" alt="" />
              </div>
              <div class="choice-header">
                {{$category->name}}
              </div>
              <div class="choice-description">
                {{$category->description}}
              </div>

            </div>
        @endforeach
      </div>
    </div>

    <!-- ======== Select Mail Type ======== -->
    <div class="card row hoverable mail-types-card" style="display:none;">
      <div class="card-content">
        <h5 class="no-margin-top">เลือกประเภทจดหมาย</h5>
        <p>ทำการเลือกประเภทของจดหมายที่ต้องการส่ง</p>
        <div class="all-mail-types">

        </div>
      </div>
    </div>

    <!-- =================== Notification Cards =================== -->
    <!-- <h5>แจ้งเตือนของคุณ</h5>

    <div class="card row hoverable">
      <div class="card-content">
        <div class="row nomargin">
          <div class="col-md-2 center-align">
            <i class="glyphicon glyphicon-send card-icon"></i>
          </div>
          <div class="col-md-10">
            <p class="card-topic">กำลังจัดส่ง</p>
            I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.
          </div>
        </div>

      </div>
      <div class="card-action ">
        <a href="#">ดูรายละเอียด</a>
      </div>
    </div> -->

    <!-- Loader -->
    <div class="loader" style="display:none;">
      <div class="spinner">
      </div>
    </div>

  </div>


@endsection
