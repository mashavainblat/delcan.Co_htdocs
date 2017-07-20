<!-- HOMEPAGE -->

<?php

get_header();

### Loop code

?>

<h1>HOME</h1>

<!-- LOOP THROUGH THUMBNAILS FROM CATEGORY "LANDING" -->
<a href="<?php the_permalink();?>"><?php the_post_thumbnail("small-thumbnail"); ?></a>

<?php # if we have posts, do something:
if(have_posts()) :
	#while we have posts, do something with each post
	while(have_posts()) : the_post();

	get_template_part('content', get_post_format());

	endwhile;

	else :
		echo '<p>No content found</p>';
	endif;

get_footer();
?>