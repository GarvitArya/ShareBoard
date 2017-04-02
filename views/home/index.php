<div class="text-center">
	<section class="section-padding">
		<div class="container home">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-12">

							<!-------------------------->
							<!--FONT AWESOME ICONS ---->
							<!------------------------>
							
							<div class="wrap-item text-center">
								<div class="item-img">
									<i class="fa fa-commenting" aria-hidden="true"></i>
								</div>
								<h3 class="description">Be Heard!</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="wrap-item text-center">
								<div class="item-img">
									<i class="fa fa-user-circle" aria-hidden="true"></i>
								</div>
								<h3 class="description">Growing Community</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="wrap-item text-center">
								<div class="item-img">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<h3 class="description">News Everyday</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="wrap-item text-center">
								<div class="item-img">
									<i class="fa fa-university" aria-hidden="true"></i>
								</div>
								<h3 class="description">Full of New Knowledge</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
</div>

<!-------------------------->
<!--NEW MEMBERS SECTION---->
<!------------------------>

<section>
	<div class="row new-memebers">

	<?php foreach($viewmodel as $item) : ?>
		<div class="col-lg-3 col-md-6 col-xs-12 white-panel "  align="center">
		<div id="avatar" style="background-image:url('<?php echo ROOT_PATH; echo $item['image'];?>')"></div>
			<div class="bio">
				<h3><?php echo $item['name']; ?></h3>
			</div>

		</div>
	<?php endforeach; ?>
	</div>
</section>
