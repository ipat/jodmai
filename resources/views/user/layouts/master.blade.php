<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link href="css/ct-navbar.css" rel="stylesheet" />
    <link href="css/app.css" rel="stylesheet" />

    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/ct-navbar.js"></script>
  </head>
  <body>
    @section('navbar')
    <div id="navbar-full">
       <div id="navbar">
          <!--
           navbar-default can be changed with navbar-ct-blue navbar-ct-azzure navbar-ct-red navbar-ct-green navbar-ct-orange
           -->
           <nav class="navbar navbar-ct-blue navbar-fixed-top" role="navigation">

             <div class="container">
               <!-- Brand and toggle get grouped for better mobile display -->
               <div class="navbar-header">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                 </button>
                 <a class="navbar-brand navbar-brand-logo" href="http://www.creative-tim.com">
                       <div class="logo">
                       <img id="avatar" src="{{Auth::user()->avatar}}">
                       </div>
                       <div class="brand"> <span>จดหมาย</span> <br> ของ {{Auth::user()->name}} </div>
                 </a>
               </div>
               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                 <ul class="nav navbar-nav navbar-right">
                       <!-- <li>
                           <a href="javascript:void(0);" data-toggle="search" class="hidden-xs">
                               <i class="pe-7s-search"></i>
                               <p>Search</p>
                           </a>
                       </li> -->
                       <li>
                           <a href="#">
                               <i class="pe-7s-mail">
                                   <span class="label">+</span>
                               </i>
                               <p>สร้างจดหมายใหม่</p>
                           </a>
                       </li>
                       <li class="dropdown">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                   <i class="pe-7s-user"></i>
                                   <p>บัญชีผู้ใช้</p>
                               </a>
                             <ul class="dropdown-menu">
                               <li><a href="#">Action</a></li>
                               <li><a href="#">Another action</a></li>
                               <li><a href="#">Something</a></li>
                               <li><a href="#">Another action</a></li>
                               <li><a href="#">Something</a></li>
                               <li class="divider"></li>
                               <li><a href="#">Separated link</a></li>
                             </ul>
                       </li>
                  </ul>
                  <form class="navbar-form navbar-right navbar-search-form" role="search">
                    <div class="form-group">
                         <input type="text" value="" class="form-control" placeholder="Search...">
                    </div>
                 </form>

               </div><!-- /.navbar-collapse -->
             </div><!-- /.container-fluid -->
           </nav>
          <!-- <div class="blurred-container">
               <div class="img-src" style="background-image: url('images/bg.jpg')"></div>
           </div> -->
       </div><!--  end navbar -->

   </div> <!-- end menu-dropdown -->

    @show

    <div class="container">
      @yield('content')
    </div>

  </body>
</html>
