<?php

get_header();

/* ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ */
/* ^^^^^^^ ENDS HEADER // NAVIGATION ^^^^^^^ */
/* ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ */

### Loop code
?>

<!-- <h1>PAGE FEATURED PROJECTS</h1> -->

<div class="site-content row projectsThumbnailsContainer noMargin" id="featuredProjectsContainer">

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

	//category posts loop begins here
	//returns opbject containing posts from given category
	//then temporarily save that object to access it within out loop
	$featuredProjectsPosts = new WP_Query('cat=4&order=ASC');

	//running have_posts method on our object
	if ($featuredProjectsPosts->have_posts()) :
		while ($featuredProjectsPosts->have_posts()) : $featuredProjectsPosts->the_post();
			//content
		?>
		
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 noPadding noMargin projectThumbnails">
			<a href="<?php the_permalink();?>"><?php the_post_thumbnail("large-thumbnail"); ?></a>
			
			<div class="projectTitleHoverContainer">
				<a href="<?php the_permalink();?>"><h2 class="noMargin"><?php the_title(); ?></h2></a>
			</div>
		</div>
		<?php endwhile;

		else :

	endif;
	//	prevents custom query loops from disrupting main URL based loops produced by WP
	// usually after custom loops
	wp_reset_postdata();

	?>

</div><!-- END .ROW .projectsThumbnailContainer #featuredProjectsContainer -->






<?php

get_footer();
?>