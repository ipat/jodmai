<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title')</title>
    <!-- <link href="css/pe-icon-7-stroke.css" rel="stylesheet" /> -->
    <!-- <link href="css/ct-navbar.css" rel="stylesheet" /> -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/materialize.min.css" rel="stylesheet" />
    <link href="css/app.css" rel="stylesheet" />
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="js/jquery-1.10.2.js"></script>
    <!-- <script src="js/ct-navbar.js"></script> -->
    <script src="js/bootstrap.js"></script>
    <script src="js/materialize.min.js"></script>
  </head>
  <body class="main-body">
    @section('navbar')
      <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!"><img src="{{Auth::user()->avatar}}" alt="" class="circle responsive-img avatar-icon"> {{Auth::user()->name}}</a></li>
        <li class="divider"></li>
        <!-- <li><a href="#!">two</a></li> -->
        <!-- <li class="divider"></li> -->
        <li><a href="#!">ออกจากระบบ</a></li>
      </ul>
      <nav class="blue lighten-2">
        <div class="nav-wrapper container">
          <a href="#!" class="brand-logo">จดหมาย</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="sass.html">จดหมายใหม่</a></li>
            <!-- <li><a href="badges.html">Components</a></li> -->
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">คุณ {{Auth::user()->name}}<i class="material-icons right">arrow_drop_down</i></a></li>
          </ul>
        </div>
      </nav>

    @show

    <div class="container main-container">
      @yield('content')
    </div>

  </body>
</html>
