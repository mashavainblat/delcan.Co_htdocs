<main class="post post-gallery">

	<?php
		/*VIMEO VIDEO CUSTOM FIELD*/
		// the_title();
		/*if field has data then ... */
		if( get_field('vimeo_field')){

			/*setting return value of field to a video embed*/
			/*object will hold vime video OBJECT data*/
			$obj = get_field('vimeo_field');

			?>
			<div class="vimeoContainer">
				<iframe class="video" src="//player.vimeo.com/video/<?php echo $obj->id; ?>"  frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
			<?php
		}

	?>

	<?php the_content(); ?>

</main>