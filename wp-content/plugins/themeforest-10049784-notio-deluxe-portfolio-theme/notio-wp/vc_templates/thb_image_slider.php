<?php function thb_image_slider( $atts, $content = null ) {
	$thb_margins = $thb_arrow_color = '';
	$thb_pagination = 'true';
  $atts = vc_map_get_attributes( 'thb_image_slider', $atts );
  extract( $atts );

  $element_id = 'thb-image-slider-' . mt_rand(10, 99);
  $el_class[] = 'thb-image-slider';
  $el_class[] = 'slick';
  $el_class[] = 'row';
  $el_class[] = $thb_columns > 1 ? 'offset-nav' : '';
 	$out ='';
	ob_start();
	$images = explode(',',$images);
	
	?>
	<div id="<?php echo esc_attr($element_id); ?>" class="<?php echo implode(' ', $el_class); ?>" data-pagination="<?php echo esc_attr($thb_pagination); ?>" data-navigation="<?php echo esc_attr($thb_navigation); ?>" data-center="<?php echo esc_attr($thb_center); ?>" data-columns="<?php echo esc_attr($thb_columns); ?>" data-infinite="true">
		<?php
			foreach ($images as $image) {
				$image_link = wp_get_attachment_image_src($image, 'full');
				?>
				<figure class="columns">
					<?php echo wp_get_attachment_image($image, 'full'); ?>
				</figure>
				<?php
			}
		?>
	</div>
	<?php
	$out = ob_get_contents();
	if (ob_get_contents()) ob_end_clean();
	return $out;
}
thb_add_short('thb_image_slider', 'thb_image_slider');