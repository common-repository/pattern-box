<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly.
$julia = DWPB_IMAGE . '/team/julia.jpg'; 
$david = DWPB_IMAGE . '/team/david.jpg'; 
$anna = DWPB_IMAGE . '/team/anna.jpg'; 
$john = DWPB_IMAGE . '/team/john.jpg'; 

$team_social_centered = '

<!-- wp:group {"align":"full","style":{"color":{"background":"#f4f7fa"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#f4f7fa;margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60);padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|pale-cyan-blue"}}}},"textColor":"pale-cyan-blue","fontSize":"medium"} -->
<p class="has-text-align-center has-pale-cyan-blue-color has-text-color has-link-color has-medium-font-size">Expert Team</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center"><strong>Meet our colleague</strong></h3>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide","className":"team-members-block","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide team-members-block" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"className":"team-member-item","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group team-member-item has-base-background-color has-background" style="padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"className":"team-member-image","layout":{"type":"constrained"}} -->
<div class="wp-block-group team-member-image"><!-- wp:cover {"url":"' . esc_url($julia) . '","dimRatio":0,"customOverlayColor":"#dddbdc","isUserOverlayColor":true,"minHeight":20,"minHeightUnit":"rem","contentPosition":"bottom center","isDark":false,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50);min-height:20rem"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#dddbdc"></span><img class="wp-block-cover__image-background" alt="Corporate Female" src="' . esc_url($julia) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:social-links {"className":"team-member-social-icons"} -->
<ul class="wp-block-social-links team-member-social-icons"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"pinterest"} /--></ul>
<!-- /wp:social-links --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","className":"team-member-title","fontSize":"medium"} -->
<p class="has-text-align-center team-member-title has-medium-font-size"><strong>Jullia Siger</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size">Web Designer</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"team-member-item","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group team-member-item has-base-background-color has-background" style="padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"className":"team-member-image","layout":{"type":"constrained"}} -->
<div class="wp-block-group team-member-image"><!-- wp:cover {"url":"' . esc_url($david) . '","dimRatio":0,"customOverlayColor":"#c1bdbe","isUserOverlayColor":true,"minHeight":20,"minHeightUnit":"rem","contentPosition":"bottom center","isDark":false,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50);min-height:20rem"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#c1bdbe"></span><img class="wp-block-cover__image-background" alt="Corporate Male" src="' . esc_url($david) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:social-links {"className":"team-member-social-icons"} -->
<ul class="wp-block-social-links team-member-social-icons"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"pinterest"} /--></ul>
<!-- /wp:social-links --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","className":"team-member-title","fontSize":"medium"} -->
<p class="has-text-align-center team-member-title has-medium-font-size"><strong>David Miller</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size">Graphic Designer</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"team-member-item","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group team-member-item has-base-background-color has-background" style="padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"className":"team-member-image","layout":{"type":"constrained"}} -->
<div class="wp-block-group team-member-image"><!-- wp:cover {"url":"' . esc_url($anna) . '","dimRatio":0,"customOverlayColor":"#b7b2b0","isUserOverlayColor":true,"minHeight":20,"minHeightUnit":"rem","contentPosition":"bottom center","isDark":false,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50);min-height:20rem"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#b7b2b0"></span><img class="wp-block-cover__image-background" alt="Corporate Male" src="' . esc_url($anna) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:social-links {"className":"team-member-social-icons"} -->
<ul class="wp-block-social-links team-member-social-icons"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"pinterest"} /--></ul>
<!-- /wp:social-links --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","className":"team-member-title","fontSize":"medium"} -->
<p class="has-text-align-center team-member-title has-medium-font-size"><strong>Anna Grace</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size">Video Editor</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"team-member-item","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group team-member-item has-base-background-color has-background" style="padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"className":"team-member-image","layout":{"type":"constrained"}} -->
<div class="wp-block-group team-member-image"><!-- wp:cover {"url":"' . esc_url($john) . '","dimRatio":0,"customOverlayColor":"#cbceda","isUserOverlayColor":true,"minHeight":20,"minHeightUnit":"rem","contentPosition":"bottom center","isDark":false,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50);min-height:20rem"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#cbceda"></span><img class="wp-block-cover__image-background" alt="Coroprate Women" src="' . esc_url($john) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:social-links {"className":"team-member-social-icons"} -->
<ul class="wp-block-social-links team-member-social-icons"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"pinterest"} /--></ul>
<!-- /wp:social-links --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","className":"team-member-title","fontSize":"medium"} -->
<p class="has-text-align-center team-member-title has-medium-font-size"><strong>John Sina</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size">Content Writer</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
';


if (function_exists('register_block_pattern')) {
    register_block_pattern(
        'custom-service-pattern/team-social-centered',
        array(
            'title'       => __('Team Social Centered', 'pattern-box'),
            'description' => __('Team members with social icons with hover effect.', 'pattern-box'),
            'categories'  => array('dwpb-team'),
            'content'     => $team_social_centered,
        )
    );
}