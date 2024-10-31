<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly.
$image_url = DWPB_IMAGE . '/green-1920-1880.png'; 

$about_section_2 = '
    <!-- wp:media-text {"mediaPosition":"left","mediaType":"image","mediaUrl":"' . esc_url($image_url) . '","mediaId":1} -->
    <div class="wp-block-media-text alignwide is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="' . esc_url($image_url) . '" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:heading -->
    <h2>Our Story</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>Since our founding, we have been dedicated to providing top-notch services. Learn more about our journey and what drives us.</p>
    <!-- /wp:paragraph -->

    <!-- wp:button {"className":"is-style-outline"} -->
    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link">Read More</a></div>
    <!-- /wp:button --></div></div>
    <!-- /wp:media-text -->
';

if (function_exists('register_block_pattern')) {
    register_block_pattern(
        'custom-hero-pattern/about-section-2',
        array(
            'title'       => __('About Section 2', 'pattern-box'),
            'description' => __('An about section with an image on the left.', 'pattern-box'),
            'categories'  => array('dwpb-about'),
            'content'     => $about_section_2,
        )
    );
}
