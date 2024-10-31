<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly.
$background = DWPB_IMAGE . '/services-bg1.jpg'; 
$consulting = DWPB_IMAGE . '/consulting.png'; 
$finance = DWPB_IMAGE . '/finance.png'; 
$healthy = DWPB_IMAGE . '/healthy.png'; 
$real_estate = DWPB_IMAGE . '/real-estate.png'; 
$retirement = DWPB_IMAGE . '/retirement.png'; 
$save_money = DWPB_IMAGE . '/save-money.png'; 

$service_split_layout = '

<!-- wp:cover {"url":"' . esc_url($background) . '","dimRatio":80,"overlayColor":"custom-overlay","isUserOverlayColor":true,"isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-cover alignfull is-light" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><span aria-hidden="true" class="wp-block-cover__background has-custom-overlay-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="' . esc_url($background) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":{"left":"var:preset|spacing|50"}}}} -->
        <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:column {"width":"40%"} -->
        <div class="wp-block-column" style="flex-basis:40%"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|luminous-vivid-orange"}}}},"textColor":"luminous-vivid-orange","fontSize":"medium"} -->
        <p class="has-luminous-vivid-orange-color has-text-color has-link-color has-medium-font-size" style="text-transform:uppercase"><strong>Our Services</strong></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"level":3,"fontSize":"x-large"} -->
        <h3 class="wp-block-heading has-x-large-font-size"><strong>Services we serve to<br>all over the world</strong></h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>From banking and insurance to wealth management and on securities distribution, we dedicated financial services them the teams serve all major sectors. of the industry.</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph -->
        <p>From banking and insurance to wealth management and on securities distribution, we dedicated financial services them the teams serve all major sectors. of the industry.</p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons -->
        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"custom-sky","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-sky"}}},"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
        <div class="wp-block-button has-custom-font-size has-small-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-custom-sky-color has-white-background-color has-text-color has-background has-link-color wp-element-button"><strong>Learn More</strong></a></div>
        <!-- /wp:button -->

        <!-- wp:button {"backgroundColor":"custom-sky","textColor":"base","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
        <div class="wp-block-button has-custom-font-size has-small-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-base-color has-custom-sky-background-color has-text-color has-background has-link-color wp-element-button"><strong>Learn More</strong></a></div>
        <!-- /wp:button --></div>
        <!-- /wp:buttons --></div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"60%"} -->
        <div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"layout":{"type":"grid"}} -->
        <div class="wp-block-group"><!-- wp:group {"className":"service-item","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
        <div class="wp-block-group service-item has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"width":"70px","height":"70px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"service-item-img"} -->
        <figure class="wp-block-image size-full is-resized service-item-img"><img src="' . esc_url($save_money) . '" alt="Save Money" style="object-fit:cover;width:70px;height:70px"/></figure>
        <!-- /wp:image -->

        <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
        <p class="has-text-align-center has-medium-font-size"><strong>Money Making Tricks</strong></p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"service-item","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
        <div class="wp-block-group service-item has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"width":"70px","height":"70px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"service-item-img"} -->
        <figure class="wp-block-image size-full is-resized service-item-img"><img src="' . esc_url($healthy) . '" alt="Healthy" style="object-fit:cover;width:70px;height:70px"/></figure>
        <!-- /wp:image -->

        <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
        <p class="has-text-align-center has-medium-font-size"><strong>Lead Healthy Life</strong></p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"service-item","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
        <div class="wp-block-group service-item has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"width":"70px","height":"70px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"service-item-img"} -->
        <figure class="wp-block-image size-full is-resized service-item-img"><img src="' . esc_url($finance) . '" alt="Finance" style="object-fit:cover;width:70px;height:70px"/></figure>
        <!-- /wp:image -->

        <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
        <p class="has-text-align-center has-medium-font-size"><strong>Proper Money Management</strong></p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"service-item","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
        <div class="wp-block-group service-item has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"width":"70px","height":"70px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"service-item-img"} -->
        <figure class="wp-block-image size-full is-resized service-item-img"><img src="' . esc_url($retirement) . '" alt="Retirement" style="object-fit:cover;width:70px;height:70px"/></figure>
        <!-- /wp:image -->

        <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
        <p class="has-text-align-center has-medium-font-size"><strong>Ensure Safe Retirement</strong></p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"service-item","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
        <div class="wp-block-group service-item has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"width":"70px","height":"70px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"service-item-img"} -->
        <figure class="wp-block-image size-full is-resized service-item-img"><img src="' . esc_url($real_estate) . '" alt="Real Estate" style="object-fit:cover;width:70px;height:70px"/></figure>
        <!-- /wp:image -->

        <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
        <p class="has-text-align-center has-medium-font-size"><strong>Real Estate Investment</strong></p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"service-item","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
        <div class="wp-block-group service-item has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"width":"70px","height":"70px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"service-item-img"} -->
        <figure class="wp-block-image size-full is-resized service-item-img"><img src="' . esc_url($consulting) . '" alt="Consulting" style="object-fit:cover;width:70px;height:70px"/></figure>
        <!-- /wp:image -->

        <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
        <p class="has-text-align-center has-medium-font-size"><strong>Proper Career Consultation</strong></p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div></div>
    <!-- /wp:cover -->
';

if (function_exists('register_block_pattern')) {
    register_block_pattern(
        'custom-service-pattern/service-split-layout',
        array(
            'title'       => __('Service Split Layout', 'pattern-box'),
            'description' => __('Service split layout with item grid.', 'pattern-box'),
            'categories'  => array('dwpb-service'),
            'content'     => $service_split_layout,
        )
    );
}