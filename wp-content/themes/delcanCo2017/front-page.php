<?php

get_header();

### Loop code
?>

<div class="row" id="testing">
	<div class="col-lg-6">
		<div class="col-lg-6"><img src="http://i.imgur.com/10456o2.jpg"></div>
		<div class="col-lg-6"><img src="http://i.imgur.com/KYBH8LU.jpg"></div>
		<div class="col-lg-6"><img src="http://i.imgur.com/zRkgsxb.jpg"></div>
		<div class="col-lg-12"><img src="http://i.imgur.com/10456o2.jpg"></div>
		<div class="col-lg-6"><img src="http://i.imgur.com/KYBH8LU.jpg"></div>
		<div class="col-lg-6"><img src="http://i.imgur.com/zRkgsxb.jpg"></div>
	</div>

	<div class="col-lg-6">
		<div class="col-lg-6"><img src="http://i.imgur.com/10456o2.jpg"></div>
		<div class="col-lg-6"><img src="http://i.imgur.com/KYBH8LU.jpg"></div>
		<div class="col-lg-6"><img src="http://i.imgur.com/zRkgsxb.jpg"></div>
		<div class="col-lg-6"><img src="http://i.imgur.com/10456o2.jpg"></div>
		<div class="col-lg-6"><img src="http://i.imgur.com/KYBH8LU.jpg"></div>
		<div class="col-lg-6"><img src="http://i.imgur.com/zRkgsxb.jpg"></div>
	</div>
</div>


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

?> <section id="featuredProjects"><?php 


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
?>
</section>
<!-- END OF section#featuredProjects -->
<?php
	else:
		// no content message here

endif;





	//	prevents custom query loops from disrupting main URL based loops produced by WP
	// usually after custom loops
	wp_reset_postdata();

	?>

	

<?php get_footer();
?>