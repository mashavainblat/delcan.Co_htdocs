<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts
 * @var $el_class
 * @var $width
 * @var $css
 * @var $offset
 * @var $content - shortcode content
 * Shortcode class
 * @var $this WPBakeryShortCode_VC_Column
 */
$el_class = $width = $css = $offset = $animation = $thb_color = '';
$output = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$width = wpb_translateColumnWidthToSpan( $width );
$width = vc_column_offset_class_merge( $offset, $width );

// Parallax
$parallax_class = $enable_parallax ? 'parallax_bg' : '';
$parallax_data = $enable_parallax ? 'data-stellar-background-ratio="0.2"' : '';
$css_classes = array(
	$this->getExtraClass( $el_class ),
	'wpb_column',
	'vc_column_container',
	$animation,
	$parallax_class,
	$width,
	$thb_color
);

if (vc_shortcode_custom_css_has_property( $css, array('border', 'background') )) {
	$css_classes[]='vc_col-has-fill';
}

$wrapper_attributes = array();

$css_class = preg_replace( '/\s+/', ' ', apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, implode( ' ', array_filter( $css_classes ) ), $this->settings['base'], $atts ) );
$wrapper_attributes[] = 'class="' . esc_attr( trim( $css_class ) ) . '"';
$wrapper_attributes[] = $skrollr ? 'data-top-bottom="transform: translateY(-'.$skrollr_speed.'px);" data-bottom-top="transform: translateY('.$skrollr_speed.'px);"' : '';
$wrapper_attributes[] = $parallax_data;

$output .= '<div ' . implode( ' ', $wrapper_attributes ) . '>';
$output .= '<div class="vc_column-inner ' . esc_attr($fixed) . ' ' . esc_attr( trim( vc_shortcode_custom_css_class( $css ) ) ) . '">';
$output .= '<div class="wpb_wrapper">';
$output .= wpb_js_remove_wpautop( $content );
$output .= '</div>';
$output .= '</div>';
$output .= '</div>';

echo $output;