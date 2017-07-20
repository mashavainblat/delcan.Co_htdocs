<!-- if there is no search.php page, wordpress will default to index.php page for visual -->

<!-- HOMEPAGE -->

<?php

get_header();

### Loop code

?>

<h2>SEARCH RESULTS FOR: <?php the_search_query(); ?></h2>
<a href="<?php the_permalink();?>"><?php the_post_thumbnail("small-thumbnail"); ?></a>



<?php # if we have posts, do something:
if(have_posts()) : ?>

<!-- will output search results -->

<?php
	#while we have posts, do something with each post
	while(have_posts()) : the_post();
	
	get_template_part('content');

	endwhile;

	else :
		echo '<p>No content found</p>';
	endif;

get_footer();
?>