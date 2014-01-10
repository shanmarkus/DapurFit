<!DOCTYPE HTML>

<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <!--   <link href="./resources/css/bootstrap-responsive.css" rel="stylesheet"> -->
  <link href="./resources/css/bootstrap.css" rel="stylesheet">
  <link href="./resources/css/home.css" rel="stylesheet">
  <link href="./resources/css/simpletextrotator.css" rel="stylesheet">
  <title>Your Website</title>
</head>

<body>
  <div class="navbar navbar-static-top home-header" role="navigation">
    <div class="container">
      <div class="row">
        <div class="header-logo"></div>
      </div>
      <div class="row">
        <div class="span12 home-navbar">
          <div class="tabbable"> <!-- Only required for left/right tabs -->
            <ul class="nav nav-tabs">
              <li><a href="#tab1" data-toggle="tab">HOME</a></li>
              <li><a href="#tab2" data-toggle="tab">ABOUT</a></li>
              <li><a href="#tab2" data-toggle="tab">GALLERY</a></li>
              <li><a href="#tab2" data-toggle="tab">WORKOUT</a></li>
              <li><a href="#tab2" data-toggle="tab">PACKAGE INFO</a></li>
              <li  class="active"><a href="#tab2" data-toggle="tab">CONTACT</a></li>
            </ul>

          </div>
        </div>
        
      </div>
    </div>
  </div>
  <!--  Header Division -->

  <!-- Body Division -->
      <!-- Carousel
      ================================================== -->
      <div id="myCarousel" class="carousel slide">
        <div class="carousel-inner">
          <div class="item active">
            <img src="./img/a.jpg" alt="">
            <div class="container">
            </div>
          </div>
          <div class="item">
            <img src="./img/b.jpg" alt="">
            <div class="container">
            </div>
          </div>
          <div class="item">
            <img src="./img/c.jpg" alt="">
            <div class="container">
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
      </div><!-- /.carousel -->

      <div id="footer">
        <div class="container">
          <div class="row">
            <div class="">
              <div class="row">
                <div class="span5">
                  <div class="row">
                    <div class="footerImage span1"><img src="./img/footer.png"></div>
                    <p class="footerText">30% Gym 70% Diet, ABS made in kitchen</p>
                    <p class="demo1">Super <span class="rotate">Simple, Customizable, Light Weight, Easy</span> Text Rotator with Style</p>
                  </div>
                  <div class="row">
                    <p> copyright by bla bla bla bla </p>
                  </div>
                </div>
                <div class="offset2 span5">
                  <div class="row footerSosMed">
                    <div class="span2">
                      <img src="./img/twitter.png"> &nbsp;
                      <img src="./img/instagram.png"> &nbsp;
                      <img src="./img/facebook.png"> &nbsp;
                      <img src="./img/v.png">
                    </div>
                    <p> site map  | contact us </p>
                  </div>
                  <div class="row">
                    <div class="offset1">
                      <p> Fast Response: Julius xxxxxxxx </p>
                    </div> 
                  </div>
                </div>
              </div>
            </div><!-- /.navbar -->
          </div>
        </div>
      </div>


      <!--     Script -->
      <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
      <script src="./resources/js/bootstrap.min.js"></script>
      <script src="./resources/js/jquery.simple-text-rotator.js"></script>
      <script>
      $(document).ready(function(){
        $(".demo1 .rotate").textrotator({
          animation: "fade",
          speed: 1000
        });
        $(".demo2 .rotate").textrotator({
          animation: "flip",
          speed: 1250
        });
        $(".demo3 .rotate").textrotator({
          animation: "flipCube",
          speed: 1500
        });
        $(".demo4 .rotate").textrotator({
          animation: "flipUp",
          speed: 1750
        });
        $(".demo5 .rotate").textrotator({
          animation: "spin",
          speed: 2000
        });
      });

      </script>


    </body>

    </html>
