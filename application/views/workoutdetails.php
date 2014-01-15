       <link href=<?php echo RESOURCES."css/workoutdetail.css";?> rel="stylesheet">
 
      <div class="workoutdetail">
        <div class="container">
          <div class="row">
            <div class="span12">
              <?php echo $workout_embedded_video;?>
              
            </div>
            
          </div>
          <div class="row">
            <div class="span12">
              <div class="descriptionVideo margin-bottom-20">
                <div class="description-title">
                  <div class="font-normal-b ft-sz-25"> <?php echo $workout_title; ?> </div><div class="font-normal-mi ft-sz-25"><?php if(isset($workout_subtitle))echo " - ".$workout_subtitle; ?></div>
                </div>
              </br>
              <div class="discription-content">
                <p class="font-normal-m ft-sz-18">
                  <?php echo $workout_description;?>
              </div>
                </div>
              </div>
            </div>
          </div><!-- /.Workout detail -->