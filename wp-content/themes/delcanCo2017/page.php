<?php

get_header();

### Loop code
?>

<h1>TESTING STYLES PAGE PAGE</h1>

<!-- ORIGINAL TEMPLATE "PAGE" FOR THEME -->

<?php
# if we have posts, do something:
if(have_posts()) :
	#while we have posts, do something with each post
	while(have_posts()) : the_post(); ?>
	
	<article class="post page">
		<?php the_content(); ?>
		<h1><?php the_title(); ?></h1>
	</article>
	<?php endwhile;

	else :
		echo '<p>No content found</p>';
	endif;

get_footer();
?>