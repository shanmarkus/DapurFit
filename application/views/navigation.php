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
                  <li <?php if($page_title=="Home")echo "class='active'";?>><a href=<?php echo PATH."home/"?> >HOME</a></li>
                  <li <?php if($page_title=="About Us")echo "class='active'";?>><a href=<?php echo PATH."about_us/"?>>ABOUT</a></li>
                  <li <?php if($page_title=="Gallery")echo "class='active'";?>><a href=<?php echo PATH."gallery/"?>>GALLERY</a></li>
                  <li <?php if($page_title=="Workout")echo "class='active'";?>><a href=<?php echo PATH."workout/"?> >WORKOUT</a></li>
                  <li <?php if($page_title=="Package-info")echo "class='active'";?>><a href=<?php echo PATH."howtoorder/"?> >PACKAGE INFO</a></li>
                  <li <?php if($page_title=="Contact Us")echo "class='active'";?>><a href=<?php echo PATH."contact_us/"?> >CONTACT</a></li>
                </ul>

              </div>
            </div>

          </div>
        </div>
      </div>