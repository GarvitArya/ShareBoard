
<div class="row space"></div>

<div class="row ">
		<?php $counter=0;?>
		<?php foreach($viewmodel as $item) : ?>

			<!--orders 4 shares in a line-->
			<?php if(($counter%4)== 0): ?>
				<div class="col-lg-12 col-md-12  col-xs-12 line-space"></div>
			<?php endif; ?>

		<div class="col-lg-3 col-md-6 col-xs-12 share">
			<div class="bubble">
				<p style="cursor:pointer;" onclick="window.open('<?php echo $item['link']; ?>')"><?php echo $item['body']; ?></p>
				<small><?php echo $item['create_date'] ." ,by ". $item['name'];?></small>
			</div>

			<div id="profile" style="background-image:url('<?php echo ROOT_PATH; echo $item['image'];?>')"></div>
		</div>

		<?php $counter++; ?>
		<?php endforeach; ?>

</div>
