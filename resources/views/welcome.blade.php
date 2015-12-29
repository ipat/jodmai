<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Jodmai</title>
  <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('css/animate.min.css')}}" rel="stylesheet">
  <link href="{{url('css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{url('css/lightbox.css')}}" rel="stylesheet">
  <link href="{{url('css/main.css')}}" rel="stylesheet">
  <link href="{{url('css/app.css')}}" rel="stylesheet">
  <link id="css-preset" href="{{url('css/presets/preset1.css')}}" rel="stylesheet">
  <link href="{{url('css/responsive.css')}}" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="{{url('js/html5shiv.js')}}"></script>
    <script src="{{url('js/respond.min.js')}}></script>
  <![endif]-->

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon.ico">
</head><!--/head-->

<body>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url('{{url('images/slider/1.jpg')}}')">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Welcome to <span>Jodmai</span></h1>
            <p class="animated fadeInRightBig">Where your Mail matters most!</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
          </div>
        </div>
        <div class="item" style="background-image: url('{{url('images/slider/2.jpg')}}')">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">ยินดีต้อนรับสู่ <span>จดหมาย</span></h1>
            <p class="animated fadeInRightBig">ที่ซึ่งจดหมายคุณสำคัญที่สุด</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">เริ่มต้น</a>
          </div>
        </div>
        <!-- <div class="item" style="background-image: url('{{url('images/slider/3.jpg')}}')">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">We are <span>Creative</span></h1>
            <p class="animated fadeInRightBig">Bootstrap - Responsive Design - Retina Ready - Parallax</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
          </div>
        </div> -->
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
            <h1><img class="img-responsive" src="{{url('images/logo.png')}}" alt="logo"></h1>
          </a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="scroll active"><a href="#home">หน้าหลัก</a></li>
            <li class="scroll"><a href="#services">บริการ</a></li>
            <!-- <li class="scroll"><a href="#about-us">เกี่ยวกับเรา</a></li> -->
            <li class="scroll"><a href="#portfolio">พอร์ทโฟลิโอ</a></li>
            <!-- <li class="scroll"><a href="#team">Team</a></li> -->
            <li class="scroll"><a href="#login">เข้าสู่ระบบ</a></li>
            <li class="scroll"><a href="#contact">ติดต่อเรา</a></li>
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->

  <section id="services">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2>บริการของเรา</h2>
            <p>เราได้มีการบริการเกี่ยวกับการส่งจดหมายครบวงจร</p>
            <p>ทำไมเราถึงควรสงจดหมาย? นั่นก็เพราะมันมีคุณค่าทางจิตใจต่อผู้รับมากกว่าเสียงโนติฟิเคชั่นใน instant message และยังมีอีกหลายคนที่เข้าถึงได้ด้วยจดหมายเท่านั้น =]</p>
            <p>ปัจจุบันคนเรามักสนใจโทรศัพท์มือถือเป็นส่วนมาก ทำให้เราตัดขาดจากโลกแห่งความเป็นจริง สิ่งสำคัญ ความรู้สึกต่างๆ ที่หาไม่ได้ในโลกดิจิตอล เด็กสมัยใหม่คงไม่เคยสัมพัสความรู้สึกตอนได้รับจดหมายเป็นแน่ เราจึงอยากนำจดหมายกลับมาอีกครั้งหนึ่ง ในรูปแบบที่ใช้งานง่ายกว่าเดิม โดยมีเราเป็นตัวเชื่อมระหว่างจดหมายกับโลกดิจิตอล =]</p>
          </div>
        </div>
      </div>
      <div class="text-center our-services">
        <div class="row">
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="service-icon">
              <i class="fa fa-envelope"></i>
            </div>
            <div class="service-info">
              <h3>ส่งจดหมายทั่วประเทศ</h3>
              <p>บริการหลักของจดหมายคือ บริการส่งจดหมายที่รวดเร็ว มีคุณภาพ และ ง่ายดายเพียงแค่ปลายนิ้วของท่าน =]</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div class="service-icon">
              <i class="fa fa-umbrella"></i>
            </div>
            <div class="service-info">
              <h3>แนวคิดของเรา</h3>
              <p>ไอเดียของจดหมาย เป็นทรัพย์สินทางปัญญาของ CEO และ CIO ของจดหมาย และ 89degree studio><"</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
            <div class="service-icon">
              <i class="fa fa-cloud"></i>
            </div>
            <div class="service-info">
              <h3>ระบบอยู่บนคลาวน์</h3>
              <p>ข้อมูลทั้งหมดของผู้ใช้จะได้รับการบันทึกไว้ เพื่อความสะดวกของผู้ใช้งาน และแน่นอนว่าไม่รวมข้อมูลสำคัญของผู้ใช้งาน =]</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
            <div class="service-icon">
              <i class="fa fa-coffee"></i>
            </div>
            <div class="service-info">
              <h3>การออกแบบที่สวยงาม</h3>
              <p>การออกแบบของจดหมายนั้นสวยงาม แต่ยังคงไว้ซึ่งความเรียบง่ายเพื่อให้ผู้ใช้งานใช้งานได้อย่างมีประสิทธิภาพ</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="750ms">
            <div class="service-icon">
              <i class="fa fa-bitbucket"></i>
            </div>
            <div class="service-info">
              <h3>การพัฒนาแอพลิเคชั่น</h3>
              <p>ในอนาคตเราจะมีแอพลิเคชั่นสำหรับ Smart Phone และ taplet อดใจรอหน่อยเนอะ มาเป็นกำลังใจให้พวกเราด้วยนะครับ</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="850ms">
            <div class="service-icon">
              <i class="fa fa-gift"></i>
            </div>
            <div class="service-info">
              <h3>บริการในอนาคต</h3>
              <p>ในอนาคตจดหมายจะมีบริการส่งของขวัญให้คนที่สำคัญของคุณ และบริการอื่นๆอีกมากมาย มันต้องตื่นเต้นมากแน่ๆเลย :3</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#services-->

  <section id="features" class="parallax">
    <div class="container">
      <div class="row count">
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
          <i class="fa fa-user"></i>
          <h3 class="timer">4000</h3>
          <p>Happy Clients</p>
        </div>
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
          <i class="fa fa-desktop"></i>
          <h3 class="timer">200</h3>
          <p>Modern Websites</p>
        </div>
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="700ms">
          <i class="fa fa-trophy"></i>
          <h3 class="timer">10</h3>
          <p>WINNING AWARDS</p>
        </div>
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="900ms">
          <i class="fa fa-comment-o"></i>
          <h3>24/7</h3>
          <p>Fast Support</p>
        </div>
      </div>
    </div>
  </section><!--/#features-->

  <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2>Our Portfolio</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="folio-image">
              <img class="img-responsive" src="{{url('images/portfolio/1.jpg')}}" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="folio-image">
              <img class="img-responsive" src="{{url('images/portfolio/2.jpg')}}" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
            <div class="folio-image">
              <img class="img-responsive" src="{{url('images/portfolio/3.jpg')}}" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="folio-image">
              <img class="img-responsive" src="{{url('images/portfolio/4.jpg')}}" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="700ms">
            <div class="folio-image">
              <img class="img-responsive" src="{{url('images/portfolio/5.jpg')}}" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="800ms">
            <div class="folio-image">
              <img class="img-responsive" src="{{url('images/portfolio/6.jpg')}}" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="900ms">
            <div class="folio-image">
              <img class="img-responsive" src="{{url('images/portfolio/7.jpg')}}" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="1000ms">
            <div class="folio-image">
              <img class="img-responsive" src="{{url('images/portfolio/8.jpg')}}" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="portfolio-single-wrap">
      <div id="portfolio-single">
      </div>
    </div><!-- /#portfolio-single-wrap -->
  </section><!--/#portfolio-->

  <section id="pricing">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>โปรโมชั่นของเรา</h2>
          <p>ท่านสามารถเลือกชำระเงินแบบรายครั้ง หรือ  แบบเหมาจ่ายได้ นอกจากนี้ยัง การชำระเงินโดยรหัสของขวัญอีกด้วย =]</p>
        </div>
      </div>
      <div class="pricing-table">
        <div class="row">
          <div class="col-sm-3">
            <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <h3>รายครั้ง</h3>
              <div class="price">
                10<span>บาท</span>
              </div>
              <ul>
                <li>แสตมป์ 1 ดวง</li>
                <li>ซองจดหมาย 1 ซอง</li>
                <li>500 character 1 page</li>
                <li></li>
              </ul>
              <a href="#" class="btn btn-lg btn-primary">Sign up</a>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
              <h3>เหมาจ่าย 100</h3>
              <div class="price">
                <span>บาท</span>
              </div>
              <ul>
                <li>แสตมป์ 11 ดวง</li>
                <li>แลกการ์ดได้ 3 ดวงต่อ 1 ใบ</li>
                <li>ซองจดหมาย 11 ซอง</li>
                <li>500 character 10 page</li>
              </ul>
              <a href="#" class="btn btn-lg btn-primary">Sign up</a>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-table featured wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
              <h3>Speacial Code</h3>
              <div class="price">
                30<span>บาท</span>
              </div>
              <ul>
                <li>การ์ดวันวาเลนไทน์ 1 ใบ</li>
                <li>ซองจดหมาย 1 ซอง</li>
                <li>แสตมป์ 1 ดวง</li>
                <li>500 character</li>
              </ul>
              <a href="#" class="btn btn-lg btn-primary">Sign up</a>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
              <h3>Professional</h3>
              <div class="price">
                300<span>บาท</span>
              </div>
              <ul>
                <li>การ์ดวันวาเลนไทน์ 1 ใบ</li>
                <li>ซองจดหมาย 33 ซอง</li>
                <li>แสตมป์ 33 ดวง</li>
                <li>500 character</li>
              </ul>
              <a href="#" class="btn btn-lg btn-primary">Sign up</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#pricing-->

  <section id="login" class="parallax">
    <div>
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 text-center">
            <a href="auth/facebook"><p class="facebook-button">เข้าสู่ระบบผ่าน Facebook</p></a>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#twitter-->

  <section id="twitter" class="">
    <div>
      <a class="twitter-left-control" href="#twitter-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="twitter-right-control" href="#twitter-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="twitter-icon text-center">
              <i class="fa fa-twitter"></i>
              <h4>Themeum</h4>
            </div>
            <div id="twitter-carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <p>Introducing Shortcode generator for Helix V2 based templates <a href="#"><span>#helixframework #joomla</span> http://bit.ly/1qlgwav</a></p>
                </div>
                <div class="item">
                  <p>Introducing Shortcode generator for Helix V2 based templates <a href="#"><span>#helixframework #joomla</span> http://bit.ly/1qlgwav</a></p>
                </div>
                <div class="item">
                  <p>Introducing Shortcode generator for Helix V2 based templates <a href="#"><span>#helixframework #joomla</span> http://bit.ly/1qlgwav</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#twitter-->

  <section id="contact">
    <div id="contact-us" class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>ติดต่อเรา</h2>
            <p>ทุกปัญหาที่ประสบเราจะรีบช่วยเหลือและแก้ไขโดยเร็ว ทุกคำติชมของท่านเราจะนำไปปรับปรุงผลงานของเราให้ดียิ่งขึ้น ขอขอบคุณทุกกำลังใจที่มีให้นะครับ =]</p>
          </div>
        </div>
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">
            <div class="col-sm-6">
              <form id="main-contact-form" name="contact-form" method="post" action="#">
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Email Address" required="required">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" name="subject" class="form-control" placeholder="Subject" required="required">
                </div>
                <div class="form-group">
                  <textarea name="message" id="message" class="form-control" rows="4" placeholder="Enter your message" required="required"></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn-submit">Send Now</button>
                </div>
              </form>
            </div>
            <div class="col-sm-6">
              <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <p>เราเป็นนิสิตที่อยากทำสิ่งใหม่ๆ เริ่มเดินในเส้นทางใหม่ๆ ที่เป็นของตัวเอง เราไม่อาจทราบได้ว่าอนาคตจะเป็นเช่นไร แต่เราก็จะทำมันให้เต็มที่ ช่วยเป็นกำลังใจให้พวกเราด้วยนะครับ =]</p>
                <ul class="address">
                  <li><i class="fa fa-map-marker"></i> <span> Address:</span> 60/257 wangmai phatumwan bangkok praram1 road 10330 </li>
                  <li><i class="fa fa-phone"></i> <span> Phone:</span> +6696 857 4515  </li>
                  <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:someone@yoursite.com"> eighty9degree@hotmil.com</a></li>
                  <li><i class="fa fa-globe"></i> <span> Website:</span> <a href="#">www.jodmai.com</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#contact-->
  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="index.html"><img class="img-responsive" src="{{url('images/logo.png')}}" alt=""></a>
        </div>
        <div class="social-icons">
          <ul>
            <!-- <li><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li> -->
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <!-- <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li> -->
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <!-- <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li> -->
            <!-- <li><a class="tumblr" href="#"><i class="fa fa-tumblr-square"></i></a></li> -->
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>&copy; 2015 Jodmai.</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">Theme designed by <a href="http://www.themeum.com/">Themeum</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="{{url('js/jquery.js')}}"></script>
  <script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{url('http://maps.google.com/maps/api/js?sensor=true')}}"></script>
  <script type="text/javascript" src="{{url('js/jquery.inview.min.js')}}"></script>
  <script type="text/javascript" src="{{url('js/wow.min.js')}}"></script>
  <script type="text/javascript" src="{{url('js/mousescroll.js')}}"></script>
  <script type="text/javascript" src="{{url('js/smoothscroll.js')}}"></script>
  <script type="text/javascript" src="{{url('js/jquery.countTo.js')}}"></script>
  <script type="text/javascript" src="{{url('js/lightbox.min.js')}}"></script>
  <script type="text/javascript" src="{{url('js/main.js')}}"></script>

</body>
</html>
