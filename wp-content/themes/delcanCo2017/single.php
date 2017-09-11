<?php

get_header(); ?>

	<!-- site-content -->

	<!-- <h1>SINGLE PAGE</h1> -->

	<div class="site-content clearfix" id="singleProjectPage">
		
		<div class="main-column">
			<?php
				if (have_posts()) :

					while (have_posts()) : the_post();

						if(get_post_format() == false) {
							get_template_part('content', 'single');
						} else {
							get_template_part('content', get_post_format());
						}

						/*CUSTOM FIELD*/
						/*************************************/
						if(get_field('description_field')) {
							echo '<h2 class="description"> ' . get_field('description_field') . '</h2>';
						}

						?>

						<div class="credentialsFields">

						<?php
						if( have_rows('credentials_fields') ):
							while( have_rows('credentials_fields') ): the_row();
								echo '<p class="credentials">' . get_sub_field('label') . ': ' . get_sub_field('credential_name') . '</p>';
							endwhile;
						endif; 	
						/*************************************/
						/*END OF CUSTOM FIELD*/
						?>

						</div> <!-- .credentialsFields -->

						<?php
					endwhile;

					else :
						echo '<p>No content found</p>';
				endif;
			?>



			<div class="prevNextPosts row">
				<div class="col-lg-6 col-md-6 col-sm-6 prevPost">
		 			<p>
						<?php
							echo previous_post_link('%link', '<img class="arrows" src="http://i.imgur.com/b3bZZQz.png"> %title',  true );
							//echo previous_post_link('&laquo; &laquo; %', '', 'yes'); ?> <!-- | --> <?php //next_post_link('% &raquo; &raquo; ', '', 'yes');
						?>
					</p>
				</div> <!-- .prevPost -->

				<div class="col-lg-6 col-md-6 col-sm-6 nextPost">
					<p>
						<?php 
							echo next_post_link('%link','%title <img class="arrows" src="http://i.imgur.com/b3bZZQz.png">', true );
						?>
					</p>
				</div><!-- .nextPost -->
			</div><!-- END .prevNextPosts .row-->

		</div><!-- main-column -->

<?php get_footer(); ?>