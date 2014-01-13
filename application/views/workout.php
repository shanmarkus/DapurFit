  <link href=<?php echo RESOURCES."css/workout.css";?> rel="stylesheet">
  <link href="<?php echo RESOURCES?>fancybox/jquery.fancybox.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo RESOURCES?>hovereffects/style.css" type="text/css" media="screen"/>
  <link rel="stylesheet" href="<?php echo RESOURCES?>overeffects/common.css" type="text/css" media="screen"/>
  <link href="<?php echo RESOURCES?>hovereffects/secondeffect.css" rel="stylesheet">

  <div class="container">
    <div class="workout">

      <div class="row">
        <div class="span12">

          <?php
          for($i=0;$i<count($images_url);$i++){

          ?>


          <div class="image-container ">

            <div class="image-caption">
              <div class="workout-title"><?php echo $titles[$i];?></div></br>
              <div class="workout-category">WORKOUT</div>
            </div>
            <a href="<?php echo PATH."workoutdetails/#".$i;?>">
              <img class="grayscale" src="<?php echo USERFILES ?>images_thumb/thumb_<?php echo $images_url[$i]?>">
            </a>
          </div>
          <?php };?>
        </div>

      </div>



    </div>
    <div class="row">
      <div class="span12">
       <div class="pagination pagination-centered">
        <?php echo $alink;?>
      </div>    </div>

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