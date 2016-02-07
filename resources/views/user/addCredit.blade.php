@extends('layouts.master')

@section('title', 'เติมเครดิต - จดหมาย (Jodmai)')

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
    <h5>เติมเครดิต</h5>

    <div class="card row hoverable">
      <!-- <div class="card-image">
        <img src="images/slider/1.jpg">
        <span class="card-title">ประชาสัมพันธ์</span>
      </div> -->
      <div class="card-content">
        <table class="highlight">
         <thead>
           <tr>
               <th data-field="amount">จำนวน Point</th>
               <th data-field="price">ราคา</th>
               <th data-field="add">เติมเครดิต</th>
           </tr>
         </thead>

         <tbody>
           <tr>
             <td>30 point</td>
             <td>30 บาท</td>
             <td>
                {!! Form::open(array('url'=>'payment','method'=>'POST', 'id'=>'new-sender-address-form')) !!}
                  <input type="hidden" name="type" value="1">
                  <button type="submit" class="waves-effect waves-light btn" name="button">เติมเครดิต</button>
                {!! Form::close() !!}
             </td>
           </tr>
           <tr>
             <td>50 point</td>
             <td>50 บาท</td>
             <td>
               {!! Form::open(array('url'=>'payment','method'=>'POST', 'id'=>'new-sender-address-form')) !!}
                 <input type="hidden" name="type" value="2">
                 <button type="submit" class="waves-effect waves-light btn" name="button">เติมเครดิต</button>
               {!! Form::close() !!}
             </td>
           </tr>
           <tr>
             <td>100 point</td>
             <td>95 บาท</td>
             <td>
               {!! Form::open(array('url'=>'payment','method'=>'POST', 'id'=>'new-sender-address-form')) !!}
                 <input type="hidden" name="type" value="3">
                 <button type="submit" class="waves-effect waves-light btn" name="button">เติมเครดิต</button>
               {!! Form::close() !!}
             </td>
           </tr>
           <tr>
             <td>200 point</td>
             <td>185 บาท</td>
             <td>
               {!! Form::open(array('url'=>'payment','method'=>'POST', 'id'=>'new-sender-address-form')) !!}
                 <input type="hidden" name="type" value="4">
                 <button type="submit" class="waves-effect waves-light btn" name="button">เติมเครดิต</button>
               {!! Form::close() !!}
             </td>
           </tr>
           <tr>
             <td>500 point</td>
             <td>450 บาท</td>
             <td>
               {!! Form::open(array('url'=>'payment','method'=>'POST', 'id'=>'new-sender-address-form')) !!}
                 <input type="hidden" name="type" value="5">
                 <button type="submit" class="waves-effect waves-light btn" name="button">เติมเครดิต</button>
               {!! Form::close() !!}
             </td>
           </tr>
         </tbody>
       </table>
       <div class="center">
<!-- PayPal Logo --><table border="0" cellpadding="10" cellspacing="0" align="center"><tr><td align="center">ใช้จ่ายผ่าน <a href="https://www.paypal.com/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img src="https://www.paypalobjects.com/webstatic/mktg/logo/pp_cc_mark_37x23.jpg" border="0" alt="PayPal Logo"></a></td></tr></table><!-- PayPal Logo -->
       </div>
      </div>
    </div>


  </div>
@endsection
