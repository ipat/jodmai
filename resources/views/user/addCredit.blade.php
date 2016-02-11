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
        <h5>เติมผ่าน Paypal</h5>
        <div class="center">
 <!-- PayPal Logo --><table border="0" cellpadding="10" cellspacing="0" align="center"><tr><td align="center"><a href="https://www.paypal.com/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img src="https://www.paypalobjects.com/webstatic/mktg/logo/pp_cc_mark_37x23.jpg" border="0" alt="PayPal Logo"></a></td></tr></table><!-- PayPal Logo -->
        </div>
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
      </div>
    </div>

    <div class="card row hoverable">
      <!-- <div class="card-image">
        <img src="images/slider/1.jpg">
        <span class="card-title">ประชาสัมพันธ์</span>
      </div> -->
      <div class="card-content">
        <h5>เติมผ่าน TrueMoney</h5>
        <div class="row">
          <div class="col s4">
   <!-- PayPal Logo --><table border="0" cellpadding="10" cellspacing="0" align="center"><tr><td align="center"><img src="http://www2.truecorp.co.th/stocks/media/1374_090904140927.png" alt="" /></td></tr></table><!-- PayPal Logo -->
          </div>
          <div class="col s8">
            {!! Form::open(array('url'=>'truemoney','method'=>'POST', 'id'=>'new-sender-address-form')) !!}
              <p><b>กรอกรหัส TrueMoney</b></p>
              <div class="input-field col s12">
                <input placeholder="รหัส TrueMoney" id="true_code" name="true_code" type="text" class="validate">
              </div>
              <p>
                <u>หมายเหตุ</u> ทางระบบจำเป็นต้องใช้เวลาประมาณ 1-5 นาทีในการยืนยัน หากยืนยันถูกต้องระบบจะทำการเติม Point ให้คุณอัตโนมัติ
              </p>
              <button type="submit" class="waves-effect waves-light btn" name="button">เติมเครดิต</button>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>


  </div>
@endsection
