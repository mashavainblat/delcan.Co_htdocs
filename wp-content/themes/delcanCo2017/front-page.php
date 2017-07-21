<?php

get_header();

### Loop code
?>

<!-- <h1>FRONT-PAGE PAGE AKA LANDING</h1> -->

<!-- in loop check if in next 8 posts. -->
<!-- if big one, then make row with one big and 4 small -->
<!-- if no big then make 8 in row -->

<!-- <h1>front-page.php</h1> -->

<!-- MASONRY GRID w/ BOOTSTRAP -->
<!-- <h1>Boostrap grid in Masonry Grid </h1>
<div class="grid">
	<div class="grid-item">
		<img src="http://i.imgur.com/jXn8Kxt.jpg">
	</div>
	
	<div class="grid-item">
		<img src="http://i.imgur.com/S2jF10Y.jpg">
	</div>

	<div class="grid-item grid-item--width2">
		<img src="http://i.imgur.com/p44lcdp.jpg">
	</div>

	<div class="grid-item">
		<img src="http://i.imgur.com/42EoHEm.jpg">
	</div>

	<div class="grid-item">
		<img src="http://i.imgur.com/n4qW9ut.jpg">
	</div>

	<div class="grid-item">
		<img src="http://i.imgur.com/yGlGm2e.jpg">
	</div>

	<div class="grid-item">
		<img src="http://i.imgur.com/nJZr4zS.jpg">
	</div>
</div> -->


<?php
# if we have posts, do something:
if(have_posts()) :
	#while we have posts, do something with each post
	while(have_posts()) : the_post(); ?>
	
		<article class="post page">
			<?php the_content(); ?>
		</article>
	<?php endwhile;

	else :
		echo '<p>No content found</p>';
	endif; 


// category post loop begins here


//WP_Query is a class
	//parameters include category ID
	//will return object containing posts from landing category
	//temporarily save it to access it within the loop
	//$landingPosts variable= WP_Query object that gets passed through our loop
$landingPosts = new WP_Query('cat=6');

	

//running have_posts method on our object
if ($landingPosts->have_posts()) :



	while ($landingPosts->have_posts()) : $landingPosts->the_post();
	//output content

	$taxonomy = get_the_terms(get_post(),"thumbnail-size"); $hasLargeThumbnail = false; $hasSmallThumbnail = true;

	if($taxonomy){
		foreach($taxonomy as $term){
			if($term->slug == "large") {
				$hasLargeThumbnail = true;
				$hasSmallThumbnail = false;
			}

			if($term->slug == "small"){
				$hasSmallThumbnail = true;
				$hasLargeThumbnail = false;
			}
		}

		if($hasLargeThumbnail && $hasSmallThumbnail){
			$hasSmallThumbnail = true;
			$hasLargeThumbnail = false;
		}
	}
	if($hasLargeThumbnail){	?>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 noPadding noMargin projectThumbnails">
	<?php }

	elseif ($hasSmallThumbnail){	?>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 noPadding noMargin projectThumbnails">
	<?php }
	?>
	
		
			<a href="<?php the_permalink();?>"><?php the_post_thumbnail("large-thumbnail"); ?></a>
			
			<div class="projectTitleHoverContainer">
				<a href="<?php the_permalink();?>"><h2 class="noMargin"><?php the_title(); ?></h2></a>
			</div>
		</div>
	
	<?php 
	endwhile;

	else:
		// no content message here

endif;





	//	prevents custom query loops from disrupting main URL based loops produced by WP
	// usually after custom loops
	wp_reset_postdata();

	?>

	

<?php get_footer();
?>