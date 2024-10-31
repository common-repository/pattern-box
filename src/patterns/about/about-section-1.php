<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly.
$image_url = DWPB_IMAGE . '/green-1920-1880.png'; 

$about_section_1 = '
    <!-- wp:cover {"url":"' . esc_url($image_url) . '","dimRatio":50,"overlayColor":"dark-gray"} -->
    <div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-dark-gray-background-color has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="' . esc_url($image_url) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center"} -->
    <h2 class="wp-block-heading has-text-align-center">About Us</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">We are a company committed to excellence. Our mission is to provide the best services to our customers.</p>
    <!-- /wp:paragraph -->

    <!-- wp:button {"className":"is-style-outline aligncenter"} -->
    <div class="wp-block-button is-style-outline aligncenter"><a class="wp-block-button__link wp-element-button">Learn More</a></div>
    <!-- /wp:button --></div></div>
    <!-- /wp:cover -->
';

if (function_exists('register_block_pattern')) {
    register_block_pattern(
        'custom-hero-pattern/about-section-1',
        array(
            'title'       => __('About Section 1', 'pattern-box'),
            'description' => __('An about section with a background image.', 'pattern-box'),
            'categories'  => array('dwpb-about'),
            'content'     => $about_section_1,
        )
    );
}
