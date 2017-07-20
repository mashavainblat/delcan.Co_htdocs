	<article>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		
		<p class="post-info"><?php the_time('F jS, Y g:i a'); ?> | 
		by <a href="<?php get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | 
		Posted in 

		<?php
		/*will return an array with all categories assigned to post*/
		/*storing array's value in the variable $categories*/
		$categories = get_the_category();
		$separator = ", ";
		$output = '';

		if ($categories){

			/*each time we loop through array, add onto variable*/
			foreach ($categories as $category){
				/* " .=" " to add onto a variable*/
				$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
			}

			echo trim($output, $separator);

		}

		?>

		<?php the_content(); ?>
	</article>