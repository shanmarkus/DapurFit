  <link href=<?php echo RESOURCES."css/workout.css";?> rel="stylesheet">
  <link href="<?php echo RESOURCES?>fancybox/jquery.fancybox.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo RESOURCES?>hovereffects/style.css" type="text/css" media="screen"/>
  <link rel="stylesheet" href="<?php echo RESOURCES?>overeffects/common.css" type="text/css" media="screen"/>
  <link href="<?php echo RESOURCES?>hovereffects/secondeffect.css" rel="stylesheet">

  <div class="container">
    <div class="workout">

      <div class="row">
        <div class="span12">
         <?php for($i=1;$i<10;$i++){?>
         <div class="image-container ">

          <div class="image-caption">
            <div class="workout-title"><?php echo "SQUAT THAT ASS".$i?></div></br>
            <div class="workout-category">WORKOUT</div>
          </div>
          <a class="fancybox " data-fancybox-group="gallery" title="Image<?php echo $i?> "href="<?php echo USERFILES ?>Images/image<?php echo $i?>.jpg">
            <img class="grayscale" src="<?php echo USERFILES ?>images_thumb/image<?php echo $i?>_thumb.jpg">
          </a>
        </div>
        <?php };?>
      </div>

    </div>



  </div>
  <div class="row">
    <div class="span12">
      <div class="pagination pagination-centered">
        <ul>
          <li><a href="#">Prev</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">Next</a></li>
        </ul>
      </div>
    </div>

  </div>
</div><!-- /.Gallery -->
</div>

<script src="<?php echo RESOURCES?>fancybox/jquery.fancybox.js"></script>
<script type="text/javascript">

$(document).ready(function() {
      /*
       *  Simple image gallery. Uses default settings
       */

       $('.fancybox').fancybox();



      /*
       *  Button helper. Disable animations, hide close button, change title type and content
       */

       $('.fancybox-buttons').fancybox({
        openEffect  : 'none',
        closeEffect : 'none',

        prevEffect : 'none',
        nextEffect : 'none',

        closeBtn  : false,

        helpers : {
          title : {
            type : 'inside'
          },
          buttons : {}
        },

        afterLoad : function() {
          this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
        }
      });


      /*
       *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
       */

       $('.fancybox-thumbs').fancybox({
        prevEffect : 'none',
        nextEffect : 'none',

        closeBtn  : false,
        arrows    : false,
        nextClick : true,

        helpers : {
          thumbs : {
            width  : 50,
            height : 50
          }
        }
      });




     });
  
  </script>