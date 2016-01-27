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

    <!-- ======== Select Address ======== -->
    <div class="card row hoverable addresses-card" style="display:none;">
      <div class="card-content">
        <h5 class="no-margin-top">เลือกที่อยู่ที่ต้องการจัดส่ง</h5>
        <p>เลือกที่อยู่ปลายทางของจดหมาย</p>
        <div class="all-addresses">

        </div>
        <div class="clear"></div>
        <p>
          <a class="waves-effect waves-light btn blue lighten-2" id="add-new-address"><i class="material-icons left">add</i> เพิ่มที่อยู่ใหม่</a>
        </p>
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
      <div class="center-loader">
        <div class="spinner">
        </div>
        <p>กำลังดำเนินการ</p>
      </div>
    </div>

  </div>

  <!-- Modal Structure -->
  <div id="new-address-modal" class="modal">
      <div class="modal-content">
        <h5>เพิ่มที่อยู่ใหม่</h5>
        {!! Form::open(array('url'=>'user/address/create','method'=>'POST', 'id'=>'new-address-form')) !!}
        <form class="new-address-form" method="post">
          <div class="row">
            <div class="input-field col s8">
              <input placeholder="ใส่ชื่อผู้รับ" id="name" name="name" type="text" class="validate">
              <label for="name">ชื่อผู้รับ</label>
            </div>
            <div class="input-field col s12">
              <input placeholder="ที่อยู่บรรทัดที่ 1" id="address_line_1" name="address_line_1" type="text" class="validate">
              <label for="name">ที่อยู่บรรทัดที่ 1</label>
            </div>
            <div class="input-field col s12">
              <input placeholder="ที่อยู่บรรทัดที่ 2" id="address_line_2" name="address_line_2" type="text" class="validate">
              <label for="name">ที่อยู่บรรทัดที่ 2</label>
            </div>
            <div class="input-field col s12">
              <input placeholder="ที่อยู่บรรทัดที่ 3" id="address_line_3" name="address_line_3" type="text" class="validate">
              <label for="name">ที่อยู่บรรทัดที่ 3</label>
            </div>
            <div class="input-field col s6">
              <input placeholder="รหัสไปรษณีย์" id="postcode" name="postcode" type="text" class="validate">
              <label for="name">รหัสไปรษณีย์</label>
            </div>
          </div>
          <a href="#!" class=" modal-action modal-close waves-effect waves-green btn" id="submit-new-address">เพิ่มที่อยู่ใหม่</a>
        {!! Form::close() !!}
      </div>
  </div>


@endsection
