<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title')</title>
    <!-- <link href="css/pe-icon-7-stroke.css" rel="stylesheet" /> -->
    <!-- <link href="css/ct-navbar.css" rel="stylesheet" /> -->
    <link href="{{url('css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{url('css/materialize.min.css')}}" rel="stylesheet" />
    <link href="{{url('css/app.css')}}" rel="stylesheet" />
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="{{url('js/jquery-1.10.2.js')}}"></script>
    <script src="{{url('js/script.js')}}"></script>
    <!-- <script src="js/ct-navbar.js"></script> -->
    <script src="{{url('js/bootstrap.js')}}"></script>
    <script src="{{url('js/materialize.min.js')}}"></script>
  </head>
  <body class="main-body">
    @section('navbar')
      <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!"><img src="{{Auth::user()->avatar}}" alt="" class="circle responsive-img avatar-icon"> {{Auth::user()->name}}</a></li>
        <li class="divider"></li>
        <!-- <li><a href="#!">two</a></li> -->
        <!-- <li class="divider"></li> -->
        <li><a href="{{url('logout')}}">ออกจากระบบ</a></li>
      </ul>
      <nav class="blue lighten-2 navbar-fixed">
        <div class="nav-wrapper container">
          <a href="{{url('home')}}" class="brand-logo">จดหมาย</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="{{url('mail/create')}}">จดหมายใหม่</a></li>
            <!-- <li><a href="badges.html">Components</a></li> -->
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">คุณ {{Auth::user()->name}}<i class="material-icons right">arrow_drop_down</i></a></li>
          </ul>
        </div>
      </nav>

    @show

    <div class="container main-container">
      <?php
        $true_messages = DB::table('true_messages')->where('user_id', Auth::user()->id)->get();
      ?>
      <?php foreach ($true_messages as $msg): ?>
        @if( $msg->type == "error" )
          <div class="card-panel red lighten2 msg-box">
            {{$msg->content}}
            <div class="right">
              X
            </div>
          </div>
        @endif

        @if( $msg->type == "msg" )
          <div class="card-panel green msg-box">
            {{$msg->content}}
            <div class="right">
              X
            </div>
          </div>
        @endif
      <?php endforeach; ?>
      <?php
        $true_messages = DB::table('true_messages')->where('user_id', Auth::user()->id)->delete();
      ?>

      @if( session('error') )
        <div class="card-panel red lighten2 msg-box">
          {{session('error')}}
          <div class="right">
            X
          </div>
        </div>
      @endif

      @if( session('msg') )
        <div class="card-panel green msg-box">
          {{session('msg')}}
          <div class="right">
            X
          </div>
        </div>
      @endif

      @yield('content')
    </div>
    <div class="messages">

    </div>
    <footer class="page-footer blue lighten-1">
      <div class="footer-copy left">
        <div class="container">
        © 2016 Copyright Jod-mai.com
        </div>
      </div>
      <div class="footer-copy text-right right">
        <div class="container">
        <a href="{{url('rightOfUse')}}" style="color:white; text-decoration:none;">สิทธิ์การใช้งาน</a>
        </div>
      </div>
    </footer>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-21666274-5', 'auto');
    ga('send', 'pageview');

  </script>
  </body>

</html>
