<!--user controll panel to upload profile image-->
<div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12">
  <div class="contact-form">
    <form method="post" enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']; ?>">
      <div class="form-group">
          <?php $username = $_SESSION['user_data']['name']; ?>
          <?php $email = $_SESSION['user_data']['email']; ?>
    	    <input type="text" name="name" value="<?php echo $username; ?>" class="form-control"/>
      </div>
    	<div class="form-group">
    		<input type="text" autocomplete="off" name="email" value="<?php echo $email; ?>" placeholder="<?php echo $_SESSION['user_data']['email']; ?>" class="form-control" />
    	</div>
    	<div class="form-group">
    		<input type="password"  autocomplete="off" placeholder="old password" name="password" class="form-control" />
    	</div>
      <div class="form-group">
    		<input type="password" autocomplete="off" placeholder="new password" name="newpassword" class="form-control" />
    	</div>
      <div class="form-group">
    		<input type="password" autocomplete="off" placeholder="confirm new password" name="confirmpassword" class="form-control" />
    	</div>
      <div class="form-group">
        <input id="input-file" />
        <button type="submit" name="submit" value="Submit" class="btn btn-primary btn-submit pull-right">SAVE CHANGES</button>
      </div>

    </form>
  </div>
</div>
