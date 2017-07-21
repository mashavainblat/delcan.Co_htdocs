<?php

get_header();

/* ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ */
/* ^^^^^^^ ENDS HEADER // NAVIGATION ^^^^^^^ */
/* ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ */

### Loop code
?>

<!-- <h1>PAGE ARCHIVED PROJECTS</h1> -->

<div class="site-content row projectsThumbnailsContainer noMargin" id="archiveProjectsContainer">

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
	$archivePosts = new WP_Query('cat=5');

	//running have_posts method on our object
	if ($archivePosts->have_posts()) :
		while ($archivePosts->have_posts()) : $archivePosts->the_post();
			//content
		// print_r(get_post_custom());
		?>

		<div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 noPadding noMargin projectThumbnails">
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

<footer class="site-footer">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 noPadding" id="address">
			<p>147 W 35th St. Suite 202</p>
			<p>NY, New York, 10001</p>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 noPadding" id="copyright">
			<p>&copy; <?php echo date('Y');?> <?php bloginfo('name'); ?></p>
		</div>
	</div> <!-- row -->
</footer>




<?php

get_footer();
?>