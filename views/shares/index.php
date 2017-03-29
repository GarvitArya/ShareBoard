<div>
	<?php if(isset($_SESSION['is_logged_in'])) : ?>
	<a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>shares/add">Share Something</a>
	<?php endif; ?>

	<?php foreach($viewmodel as $item) : ?>
		<div class="row">
			<div class="col-md-2">
				<img src="https://secure.gravatar.com/avatar/de9b11d0f9c0569ba917393ed5e5b3ab?s=140&r=g&d=mm" class="img-circle">
			</div>
			<div class="col-md-10">
				<h3><?php echo $item['title']; ?></h3>
				<small><?php echo $item['create_date'] ." ,by ". $item['user_id'];?></small>
				<br />
				<p><?php echo $item['body']; ?></p>
				<br />
				<a class="btn btn-default" href="<?php echo $item['link']; ?>" target="_blank">Go To Website</a>
			</div>
		</div>
	<?php endforeach; ?>
</div>
