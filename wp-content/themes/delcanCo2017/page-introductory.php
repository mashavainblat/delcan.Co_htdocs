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


<?php get_footer();?>