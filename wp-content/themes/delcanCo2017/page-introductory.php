<?php get_header();?>

	<div class="site-content clearfix" id="introductoryPage">
		
		<div class="main-column">
			
			<?php
			### Loop code
			# if we have posts, do something:
			if(have_posts()) :
				#while we have posts, do something with each post
				while(have_posts()) : the_post(); ?>
				
				<article class="post page">
					<!-- <h1><?php #the_title(); ?></h1> -->
					<?php the_content(); ?>
				</article>
				<?php endwhile;

				else :
					echo '<p>No content found</p>';
				endif;
			?>

		</div>	<!-- .main-column -->
	</div> <!-- .site-content .clearfix -->
	
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

<?php get_footer();?>