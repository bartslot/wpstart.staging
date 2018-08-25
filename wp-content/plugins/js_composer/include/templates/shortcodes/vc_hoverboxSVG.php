<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
/**
 * @var $this \WPBakeryShortCode_VC_HoverboxSVG
 * @var $atts array
 * @var $content string
 */
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );

if ( ! empty( $atts['image'] ) ) {
	$image = intval( $atts['image'] );
	$image_data = wp_get_attachment_image_src( $image, 'large' );
	$image_src = $image_data[0];
} else {
	$image_src = vc_asset_url( 'vc/no_image.png' );
}
$image_src = esc_url( $image_src );

$align = 'vc-hoverboxSVG-align--' . esc_attr( $atts['align'] );
$shape = 'vc-hoverboxSVG-shape--' . esc_attr( $atts['shape'] );
$width = 'vc-hoverboxSVG-width--' . esc_attr( $atts['el_width'] );
$reverse = 'vc-hoverboxSVG-direction--default';
if ( ! empty( $atts['reverse'] ) ) {
	$reverse = 'vc-hoverboxSVG-direction--reverse';
}
$id = '';
if ( ! empty( $atts['el_id'] ) ) {
	$id = 'id="' . esc_attr( $atts['el_id'] ) . '"';
}

$class_to_filter = vc_shortcode_custom_css_class( $atts['css'], ' ' ) . $this->getExtraClass( $atts['el_class'] ) . $this->getCSSAnimation( $atts['css_animation'] );
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $class_to_filter, $this->settings['base'], $atts );

// Hover Background color
if ( 'custom' !== $atts['hover_background_color'] ) {
	$hover_background_color = vc_convert_vc_color( $atts['hover_background_color'] );
} else {
	$hover_background_color = esc_attr( $atts['hover_custom_background'] );
}

$primary_title = $this->getHeading( 'primary_title', $atts, $atts['primary_align'] );
$hover_title = $this->getHeading( 'hover_title', $atts, $atts['hover_align'] );

$content = wpb_js_remove_wpautop( $content, true );
$button = '';
if ( $atts['hover_add_button'] ) {
	$button = $this->renderButton( $atts );
}
$template = <<<HTML
<div class="vc-hoverboxSVG-wrapper $css_class $shape $align $reverse $width" $id>
  <div class="vc-hoverboxSVG">
    <div class="vc-hoverboxSVG-inner">
      <div class="vc-hoverboxSVG-block vc-hoverboxSVG-front"><svg id=$id width="200" height="200"></svg>
        <div class="vc-hoverboxSVG-block-inner vc-hoverboxSVG-front-inner">
            $primary_title
        </div>
      </div>
      <div class="vc-hoverboxSVG-block vc-hoverboxSVG-back" style="background-color: $hover_background_color;">
        <div class="vc-hoverboxSVG-block-inner vc-hoverboxSVG-back-inner">
            $hover_title
            $content
            $button
        </div>
      </div>
    </div>
  </div>
</div>
HTML;

echo $template;

