<?php $page="gallery";?>
<!DOCTYPE HTML>

<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <!--   <link href="./resources/css/bootstrap-responsive.css" rel="stylesheet"> -->
  <link href="./resources/css/bootstrap.css" rel="stylesheet">
  <link href="./resources/css/home.css" rel="stylesheet">
  <link href="./resources/css/gallery.css" rel="stylesheet">
  <link href="./resources/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="./resources/hovereffects/secondeffect.css" rel="stylesheet">
      <link href="./resources/Fonts/stylesheet.css" rel="stylesheet">
  <link href="./resources/css/simpletextrotator.css" rel="stylesheet">
  <link rel="stylesheet" href="./resources/hovereffects/style.css" type="text/css" media="screen"/>
  <link rel="stylesheet" href="./resources/hovereffects/common.css" type="text/css" media="screen"/>
  <title>Your Website</title>
</head>

<body>
<?php include "navigation.php";?>
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
                 <div class="view second-effect">
                  <img src="resources/img/Gallery/a.jpg"/>
                  <div class="mask">
                   <a href="resources/img/Gallery/b.jpg" class="fancybox" title="Sample title">Read More</a>
                 </div>
               </div>
             </div>

             <div class="span3">
              <img class="gallery-imageDiv" src="resources/img/Gallery/c.jpg">
            </div>
            <div class="span3">
             <img class="gallery-imageDiv" src="resources/img/Gallery/c.jpg">
           </div>
           <div class="span3">
             <img class="gallery-imageDiv" src="resources/img/Gallery/d.jpg">
           </div>
         </div>

         <!--  Image Second Row -->

         <div class="row paddingTop20px">
          <div class="span3">
           <img class="gallery-imageDiv" src="./resources/img/Gallery/a.jpg">
         </div>
         <div class="span3">
           <img class="gallery-imageDiv" src="./resources/img/Gallery/b.jpg">
         </div>
         <div class="span3">
           <img class="gallery-imageDiv" src="./resources/img/Gallery/c.jpg">
         </div>
         <div class="span3">
          <img class="gallery-imageDiv" src="./resources/img/Gallery/d.jpg">
        </div>
      </div>

      <!--  Image Third Row -->

      <div class="row paddingTop20px">
        <div class="span3">
         <img class="gallery-imageDiv" src="./resources/img/Gallery/a.jpg">
       </div>
       <div class="span3">
         <img class="gallery-imageDiv" src="./resources/img/Gallery/b.jpg">
       </div>
       <div class="span3">
         <img class="gallery-imageDiv"src="./resources/img/Gallery/c.jpg">
       </div>
       <div class="span3">
        <img class="gallery-imageDiv" src="./resources/img/Gallery/d.jpg">
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



<?php include "footer.php";?>


</body>

</html>