<script src=<?php echo RESOURCES.'js/jquery-1.10.1.min.js' ?>></script>
<script src=<?php echo BOOTS.'js/bootstrap.min.js' ?>></script>
<script src=<?php echo RESOURCES.'js/jquery.simple-text-rotator.js' ?>></script>
<script>
$(document).ready(function(){
          //avaiable options
          // fade, flip, flipCube, flipUp ,spin
          $(".footerText .rotate").textrotator({
            animation: "flip", 
            speed: 1000
          });
          $(".footerText .flip").textrotator({
            animation: "flip",
            speed: 1250
          });
          $(".footerText .flipCube").textrotator({
            animation: "flipCube",
            speed: 2000
          });
          $(".footerText .flipUp").textrotator({
            animation: "flipUp",
            speed: 1750
          });
          $(".footerText .spin").textrotator({
            animation: "spin",
            speed: 1500
          });
        });

</script>