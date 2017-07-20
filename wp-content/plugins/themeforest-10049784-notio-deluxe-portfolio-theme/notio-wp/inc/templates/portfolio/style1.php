<?php
	$vars = $wp_query->query_vars;
	$thb_masonry = array_key_exists('thb_masonry', $vars) ? $vars['thb_masonry'] : false;
	$thb_size = array_key_exists('thb_size', $vars) ? $vars['thb_size'] : false;
	$thb_hover_style = array_key_exists('thb_hover_style', $vars) ? $vars['thb_hover_style'] : false;
	$thb_title_position = array_key_exists('thb_title_position', $vars) ? $vars['thb_title_position'] : false;
	$id = get_the_ID();
	$image_id = get_post_thumbnail_id();
	$image_url = wp_get_attachment_image_src($image_id,'full');
	$aspect_ratio = $image_id ? (($image_url[2] / $image_url[1]) * 100).'%' : '100%';
	$aspect_ratio = $thb_masonry ? $aspect_ratio : '';
	
	$portfolio_type = get_post_meta($id, 'portfolio_type', true);
	$main_color_title = get_post_meta($id, 'main_color_title', true);
	
	$categories = get_the_term_list( $id, 'project-category', '', ', ', '' ); 
	if ($categories !== '') {
		$categories = strip_tags($categories);
	}
	
	$meta = get_the_term_list( $id, 'project-category', '<span>', '</span>, <span>', '</span>' ); 
	$meta = strip_tags($meta, '<span>');
	
	$terms = get_the_terms( $id, 'project-category' );
	if (!empty($terms)) {
		foreach ($terms as $term) { $class[] = 'thb-cat-'.strtolower($term->slug); }
	}
	
	$class[] = $thb_size;
	$class[] = $thb_hover_style;
	$class[] = $thb_title_position;
	$class[] = $main_color_title;
	$class[] = 'type-portfolio';
	$class[] = 'columns';
	$class[] = 'portfolio-style1';
?>
<div <?php post_class($class); ?> id="portfolio-<?php the_ID(); ?>">
	<div class="portfolio-holder" style="<?php echo esc_attr('padding-bottom: '.$aspect_ratio.';'); ?>">
		<div class="thb-placeholder" style="background-image: url(<?php echo esc_url($image_url[0]); ?>);"></div>
		<a href="<?php the_permalink(); ?>" rel="bookmark" class="portfolio-link">
			<h2><span><?php the_title(); ?></span></h2>
			<aside class="thb-categories"><span><?php echo esc_html($categories); ?></span></aside>
		</a>
	</div>
</div>