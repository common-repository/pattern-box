<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly.
$image_url = DWPB_IMAGE . '/green-1920-1880.png'; 

$about_section_3 = '
    <!-- wp:media-text {"mediaPosition":"right","mediaId":1,"mediaType":"image","className":"alignwide"} -->
    <div class="wp-block-media-text has-media-on-the-right is-stacked-on-mobile alignwide"><div class="wp-block-media-text__content"><!-- wp:heading -->
    <h2 class="wp-block-heading">Our Team</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>Meet the dedicated team behind our success. Each member brings unique skills and expertise to the table.</p>
    <!-- /wp:paragraph -->

    <!-- wp:button {"className":"is-style-outline"} -->
    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Meet the Team</a></div>
    <!-- /wp:button --></div><figure class="wp-block-media-text__media"><img src="' . esc_url($image_url) . '" alt="" class="wp-image-1 size-full"/></figure></div>
    <!-- /wp:media-text -->
';

if (function_exists('register_block_pattern')) {
    register_block_pattern(
        'custom-hero-pattern/about-section-3',
        array(
            'title'       => __('About Section 3', 'pattern-box'),
            'description' => __('An about section with an image on the right.', 'pattern-box'),
            'categories'  => array('dwpb-about'),
            'content'     => $about_section_3,
        )
    );
}