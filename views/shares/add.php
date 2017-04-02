<div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">

  <?php $username = $_SESSION['user_data']['name']; ?>
  <div class="contact-form">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
      <div class="col-md-12">
      	<div class="form-group">
      		<input autocomplete="off" value="<?php echo $username; ?>" name="name" class="form-control" />
      	</div>
      </div>
      <div class="col-md-12">
      	<div class="form-group">
      		<input autocomplete="off" placeholder="title" type="text" name="title" class="form-control" />
      	</div>
      </div>
      <div class="col-md-12">
      	<div class="form-group">
      		<textarea autocomplete="off" rows="7" placeholder="body" name="body" class="form-control"></textarea>
      	</div>
      </div>
      <div class="col-md-12">
      	<div class="form-group">
      		<input  autocomplete="off" placeholder="link" type="text" name="link" class="form-control" />
      	</div>
      </div>
      <div class="col-md-12">
      	<input class="btn-download" name="submit" type="submit" value="Submit" />
          <a class="btn btn-primary btn-submit" href="<?php echo ROOT_PATH; ?>shares">Cancel</a>
      </div>
    </form>
  </div>

</div>
