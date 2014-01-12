      <div class="navbar navbar-static-top home-header" role="navigation">
        <div class="container">
          <div class="row">
            <div class="header-logo"></div>
          </div>
          <div class="row">
            <div class="span12 home-navbar">
              <div class="tabbable"> <!-- Only required for left/right tabs -->
                <ul class="nav nav-tabs">
                  <li <?php if($page=="home")echo "class='active'";?>><a href="home.php" >HOME</a></li>
                  <li <?php if($page=="about")echo "class='active'";?>><a href="aboutus.php" >ABOUT</a></li>
                  <li <?php if($page=="gallery")echo "class='active'";?>><a href="gallery.php" >GALLERY</a></li>
                  <li <?php if($page=="workout")echo "class='active'";?>><a href="workout.php" >WORKOUT</a></li>
                  <li <?php if($page=="package-info")echo "class='active'";?>><a href="howtoorder.php" >PACKAGE INFO</a></li>
                  <li <?php if($page=="contact")echo "class='active'";?>><a href="contactus.php" >CONTACT</a></li>
                </ul>

              </div>
            </div>

          </div>
        </div>
      </div>