<!--user controll panel to upload profile image-->
<div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12">
  <div class="contact-form">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
      <div class="form-group">
          <?php $username = $_SESSION['user_data']['name']; ?>
          <?php $email = $_SESSION['user_data']['email']; ?>
    	    <input type="text" name="name" value="<?php echo $username; ?>" class="form-control"/>
      </div>
    	<div class="form-group">
    		<input type="text" name="email" value="<?php echo $email; ?>" placeholder="<?php echo $_SESSION['user_data']['email']; ?>" class="form-control" />
    	</div>
      <!--
      change profile picture
      standard picture is set on registration
      -->
      <div class="form-group">
    		<input type="text" name="image" placeholder="will be enabled as soon as ok" class="form-control" />
    	</div>
    	<div class="form-group">
    		<input type="password"  placeholder="Old Password" name="password" class="form-control" />
    	</div>
      <div class="form-group">
    		<input type="password" placeholder="New Password" name="newpassword" class="form-control" />
    	</div>
      <div class="form-group">
    		<input type="password" placeholder="Confirm New Password" name="confirmpassword" class="form-control" />
    	</div>
    	<button type="submit" name="submit" value="Submit" class="btn btn-primary btn-submit">SAVE CHANGES</button>
    </form>
  </div>
</div>
