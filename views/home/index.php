<div class="text-center">
	<section class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="wrap-item text-center">
								<div class="item-img">
									<i class="fa fa-commenting" aria-hidden="true"></i>
								</div>
								<h3 class="pad-bt15">Be Heard!</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="wrap-item text-center">
								<div class="item-img">
									<i class="fa fa-user-circle" aria-hidden="true"></i>
								</div>
								<h3 class="pad-bt15">Friendly People</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="wrap-item text-center">
								<div class="item-img">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<h3 class="pad-bt15">News Everyday</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="wrap-item text-center">
								<div class="item-img">
									<i class="fa fa-university" aria-hidden="true"></i>
								</div>
								<h3 class="pad-bt15">Knowledgeable</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
</div>


<section>
	<?php if(isset($_SESSION['is_logged_in'])) : ?>
	<a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>shares/add">Share Something</a>
	<?php endif; ?>
<!--hier wurden die shares entfernt -->

</section>

<section>
	Hello
	<?php var_dump($viewmodel);?>
	<?php foreach($viewmodel as $item) : ?>
		<div class="col-md-2">
      <img src="https://secure.gravatar.com/avatar/de9b11d0f9c0569ba917393ed5e5b3ab?s=140&r=g&d=mm" class="img-circle">
    </div>
		<h6><?php echo $item['name']; ?></h6>
	<?php endforeach; ?>
</section>
