<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly.
$image_url = DWPB_IMAGE . '/green-1920-1880.png'; 

$hero_center_aligned = '
    <!-- wp:cover {"url":"' . esc_url($image_url) . '","dimRatio":50,"overlayColor":"dark-gray","focalPoint":{"x":0.5,"y":0.5},"align":"wide","layout":{"type":"default"}} -->
    <div class="wp-block-cover alignwide"><span aria-hidden="true" class="wp-block-cover__background has-dark-gray-background-color has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="' . esc_url($image_url) . '" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1} -->
    <h1 class="wp-block-heading has-text-align-center">Your Hero Heading</h1>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">Your hero section description goes here. Make it catchy and informative.</p>
    <!-- /wp:paragraph -->

    <!-- wp:button {"className":"is-style-outline aligncenter"} -->
    <div class="wp-block-button is-style-outline aligncenter"><a class="wp-block-button__link wp-element-button">Call to Action</a></div>
    <!-- /wp:button --></div></div>
    <!-- /wp:cover -->
';

if (function_exists('register_block_pattern')) {
    register_block_pattern(
        'custom-hero-pattern/hero-center-aligned',
        array(
            'title'       => __('Hero Center Aligned', 'pattern-box'),
            'description' => __('A hero section with center aligned content.', 'pattern-box'),
            'categories'  => array('dwpb-hero'),
            'content'     => $hero_center_aligned,
        )
    );
}
