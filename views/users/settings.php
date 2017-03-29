<!--user controll panel to upload profile image-->
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Settings</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
      <div class="form-group">
    		  <label>User</label>
          <?php $username = $_SESSION['user_data']['name']; ?>
    	    <input type="text" name="name" value="<?php echo $username; ?>" class="form-control"/>
      </div>
    	<div class="form-group">
    		<label>Email</label>
    		<input type="text" name="email" placeholder="<?php echo $_SESSION['user_data']['email']; ?>" class="form-control" />
    	</div>
      <!--
      change profile picture
      standard picture is set on registration
      -->
      <div class="form-group">
    		<label>Profile Picture</label>
    		<input type="text" name="image" placeholder="will be enabled as soon as ok" class="form-control" />
    	</div>
    	<div class="form-group">
    		<label>Old Password</label>
    		<input type="password" name="password" class="form-control" />
    	</div>
      <div class="form-group">
    		<label>New Password</label>
    		<input type="password" name="newpassword" class="form-control" />
    	</div>
      <div class="form-group">
    		<label>Conform New Password</label>
    		<input type="password" name="confirmpassword" class="form-control" />
    	</div>
    	<input class="btn btn-primary" name="submit" type="submit" value="Submit" />
    </form>
  </div>
</div>
