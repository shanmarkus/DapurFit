
<div id="myCarousel" class="carousel slide">
  <div class="carousel-inner">


    <?php
    for($i=0;$i<count($slideshow);$i++){?>
    <div class="item <?php if($i==0)echo "active" ;?>">
      <img src="<?php echo RESOURCES.$slideshow[$i];?>" alt="">
      <div class="container">
      </div>
    </div>
    <?php }?>

  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div><!-- /.carousel -->

<script type="text/javascript">
$('.carousel').carousel({
  interval: 2000
});

</script>

