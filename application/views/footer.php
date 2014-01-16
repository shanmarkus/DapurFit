 <div id="footer">
  <div class="container">
    <div class="span12">

      <div class="row">
        <div class="" style="float:left">
          <div class="row">

            <img class="footerImage" src="<?php echo RESOURCES ?>img/footer.png"/>
            <div class="footerText rotating">


              <span class="flipUp">
                <?php 
                echo $quotes[0];
                for($i=1 ; $i < count($quotes) ; $i++){

                 echo "<&> ".$quotes[$i];

               }
               ?>

             </span> 
           </div>

         </div>
         <div class="row">
          <p class="copyright"> Copyright © 2013 DapurFit. All rights reserved.</p>
        </div>
      </div> <!-- close span5 -->
      <div class="" style="float:right">

        <div class="row text-right">

          <div class="footerSosMed">
            <b>For daily motivations, inspirations and tips  &nbsp;&nbsp;  :&nbsp;&nbsp;&nbsp;</b>
            <a href="#"><img src="<?php echo RESOURCES ?>img/twitter.png"></a> &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#"><img src="<?php echo RESOURCES ?>img/instagram.png"></a> &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#"><img src="<?php echo RESOURCES ?>img/facebook.png"></a> &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#"><img src="<?php echo RESOURCES ?>img/v.png"></a>
          </div>

        </div>
        <div class="row">
          <div class="text-right">
            <p><div class="footer-link"><div class="footer-powered"><b>Powered by : <a href="http://www.giolastudio.com" target="_blank">Giola</a></b></div><a href="#">Site Map</a> | <a href="#">Contact Us</a> | <a href="#"> Term of Use</a> | <a href="#">Privacy Policy</a> | &nbsp;</div></p>
          </div> 
        </div>


      </div>
    </div>
  </div>
</div>
</div>
</div>

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
            speed: 2000
          });
          $(".footerText .spin").textrotator({
            animation: "spin",
            speed: 1500
          });
        });

</script>
</body>

</html>
