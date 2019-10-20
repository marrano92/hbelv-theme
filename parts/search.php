<?php

/**
 * @var StdClass $hbelv;
 */

$rooms = $hbelv->items;
?>
<div class="container">
<div class="content-search l-row">
	<div class="card-deck">
		<?php foreach ($rooms as $room){ ?>
		<div class="card">
			<img class="card-img-top" src="<?php echo $room->get_image('full'); ?>" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title"><?php echo $room->title; ?></h5>
				<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			</div>
			<div class="card-footer">
				<small class="text-muted">Last updated 3 mins ago</small>
			</div>
		</div>
		<?php } ?>
	</div>
</div>
</div>
