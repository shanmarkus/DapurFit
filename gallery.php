<!DOCTYPE HTML>

<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <!--   <link href="./resources/css/bootstrap-responsive.css" rel="stylesheet"> -->
  <link href="./resources/css/bootstrap.css" rel="stylesheet">
  <link href="./resources/css/home.css" rel="stylesheet">
  <link href="./resources/css/gallery.css" rel="stylesheet">
  <link href="./resources/fancybox/jquery.fancybox.css" rel="stylesheet">
  <title>Your Website</title>
</head>

<body>
  <!--  Header Division -->
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
  <!-- Body Division -->
      <!-- Gallery
      ================================================== -->
      <div class="container">
        <div class="gallery">
          <div class="row">
            <div class="ImageRowContainer">
              <!--             Image first Row  -->
              <div class="row paddingTop20px">
                <div class="span3">
                  <a href="./img/Gallery/b.jpg" class="fancybox" title="Sample title"><img src="./img/Gallery/a.jpg" /></a>
                </div>
                <div class="span3">
                 <img class="gallery-imageDiv" src="./img/Gallery/b.jpg">
               </div>
               <div class="span3">
                 <img class="gallery-imageDiv" src="./img/Gallery/c.jpg">
               </div>
               <div class="span3">
                 <img class="gallery-imageDiv" src="./img/Gallery/d.jpg">
               </div>
             </div>

             <!--  Image Second Row -->

             <div class="row paddingTop20px">
              <div class="span3">
               <img class="gallery-imageDiv" src="./img/Gallery/a.jpg">
             </div>
             <div class="span3">
               <img class="gallery-imageDiv" src="./img/Gallery/b.jpg">
             </div>
             <div class="span3">
               <img class="gallery-imageDiv" src="./img/Gallery/c.jpg">
             </div>
             <div class="span3">
              <img class="gallery-imageDiv" src="./img/Gallery/d.jpg">
            </div>
          </div>

          <!--  Image Third Row -->

          <div class="row paddingTop20px">
            <div class="span3">
             <img class="gallery-imageDiv" src="./img/Gallery/a.jpg">
           </div>
           <div class="span3">
             <img class="gallery-imageDiv" src="./img/Gallery/b.jpg">
           </div>
           <div class="span3">
             <img class="gallery-imageDiv"src="./img/Gallery/c.jpg">
           </div>
           <div class="span3">
            <img class="gallery-imageDiv" src="./img/Gallery/d.jpg">
          </div>
        </div>

        <div class="row paddingTop20px">
          <div class="offset5">
            <p>1 2 3 4 5 .... Last Next> </p>
          </div>
        </div>

      </div>
      <div class="offset2">

      </div>
    </div>
  </div><!-- /.Gallery -->
</div>



<!-- FOOTER -->
<div id="footer">
  <div class="container">
    <div class="row">
      <div class="">
        <div class="row">
          <div class="span5">
            <div class="row">
              <div class="footerImage span1"><img src="./img/footer.png"></div>
              <p class="footerText">30% Gym 70% Diet, ABS made in kitchen</p>
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
<script src="./resources/fancybox/jquery.fancybox.pack.js"></script>
<script>
$(document).ready(function() {
  $('.fancybox').fancybox({
    padding : 0,
    openEffect  : 'elastic'
  });
});
</script>


</body>

</html>
