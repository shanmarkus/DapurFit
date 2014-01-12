 <div id="footer">
  <div class="container">
    

    <div class="row">
      <div class="span5">
        <div class="row">

          <img class="footerImage" src="<?php echo RESOURCES ?>img/footer.png"/>
          <p class="footerText"><span class="rotate">30% Gym</span> <span class="spin">70% Diet</span>, ABS <span class="flipUp">made in</span>  kitchen</p>

        </div>
        <div class="row">
          <p class="copyright"> Copyright © 2013 DapurFit. All rights reserved.</p>
        </div>
      </div> <!-- close span5 -->
      <div class="span7">

        <div class="row text-right">

          <div class="footerSosMed">
            <b>For daily motivations, inspirations and tips  &nbsp;&nbsp;  :&nbsp;&nbsp;&nbsp;</b>
            <img src="<?php echo RESOURCES ?>img/twitter.png"> &nbsp;&nbsp;&nbsp;&nbsp;
            <img src="<?php echo RESOURCES ?>img/instagram.png"> &nbsp;&nbsp;&nbsp;&nbsp;
            <img src="<?php echo RESOURCES ?>img/facebook.png"> &nbsp;&nbsp;&nbsp;&nbsp;
            <img src="<?php echo RESOURCES ?>img/v.png">
          </div>

        </div>
        <div class="row">
          <div class="text-right">
            <p><div class="footer-link"><div class="footer-powered"><b>Powered by : Giola</b></div><a href="#">Site Map</a> | <a href="#">Contact Us</a> | <a href="#"> Term of Use</a> | <a href="#">Privacy Policy</a> | &nbsp;</div></p>
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
            speed: 1750
          });
          $(".footerText .spin").textrotator({
            animation: "spin",
            speed: 1500
          });
        });

</script>
</body>

</html>
