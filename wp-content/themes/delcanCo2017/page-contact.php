<?php get_header();?>


	<div class="site-content clearfix" id="contactPage">
		
		<div class="main-column">

			<div class="col-lg-6" id="contactInfo">
				<div id="location">
					<p>info@delcan.co</p>
					<p>914-602-7260</p>
					<p>147 W35th St.</p>
					<p>NYC 10001</p>
				</div>
				
				<div id="agent">
					<p>Represented in</p>
					<p>North America</p>
					<p>by Levine/Leavitt</p>
					<p>NY 212-979-1200</p>
					<p>LA 310-392-2700</p>
					<p>agents@llreps.com</p>
				</div>

				<div id="social">
					<p><a href="https://twitter.com/pablodelcan" target="_blank">Twitter</a></p>
					<p><a href="http://instagram.com/pablodelcan" target="_blank">Instagram</a></p>
					<p><a href="https://vimeo.com/pablodelcan" target="_blank">Vimeo</a></p>
				</div>
			</div> <!-- END .contactInfo -->

			<div class="col-lg-6" id="newsletterForm">
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
			</div><!-- END .newsletterForm -->


		</div>	<!-- .main-column -->
	</div> <!-- .site-content .clearfix -->




<?php get_footer();?>