<?php
/**
 * Sidebar.
 */
$image_url = get_template_directory_uri() . '/assets/images/authorblog.png';

return array(
	'title'      => __( 'Sidebar', 'postblog' ),
	'categories' => array( 'postblog-basic' ),
	'content'    => '<!-- wp:group {"metadata":{"categories":["postblog-basic"],"patternName":"postblog/sidebar","name":"Post Display section with right sidebar"},"className":"postblog-sidebar postblog-sticky-sidebar","style":{"spacing":{"padding":{"left":"0px","right":"0px"}}},"backgroundColor":"postblog-dark-primary","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group postblog-sidebar postblog-sticky-sidebar has-postblog-dark-primary-background-color has-background" style="padding-right:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Author"},"className":"is-style-fseboxshadowhover","style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}},"border":{"radius":"10px"}},"backgroundColor":"postblog-white-primary","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group is-style-fseboxshadowhover has-postblog-white-primary-background-color has-background" style="border-radius:10px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:group {"className":"is-style-default","style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default" style="margin-top:0px"><!-- wp:image {"id":297,"width":"135px","height":"135px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"50%","width":"0px","style":"none"}}} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="' . esc_url( $image_url ) . '" alt="" class="wp-image-297" style="border-style:none;border-width:0px;border-radius:50%;object-fit:cover;width:135px;height:135px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|postblog-dark-background-two"}}}},"textColor":"postblog-dark-background-two","fontSize":"big","fontFamily":"primary"} -->
<h4 class="wp-block-heading has-text-align-center has-postblog-dark-background-two-color has-text-color has-link-color has-primary-font-family has-big-font-size">Jean Moreau</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"},"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"#666666"}}},"color":{"text":"#666666"}},"fontFamily":"Inter"} -->
<p class="has-text-align-center has-text-color has-link-color has-inter-font-family" style="color:#666666;margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);line-height:1.5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"search"},"className":"is-style-fseboxshadowhover","style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"},"margin":{"top":"30px"}},"border":{"radius":"10px"}},"backgroundColor":"postblog-white-primary","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group is-style-fseboxshadowhover has-postblog-white-primary-background-color has-background" style="border-radius:10px;margin-top:30px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:group {"className":"postblog-section-heading","style":{"border":{"bottom":{"color":"#eeeeee","width":"1px"},"top":[],"right":[],"left":[]},"spacing":{"margin":{"bottom":"0px"},"padding":{"bottom":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group postblog-section-heading" style="border-bottom-color:#eeeeee;border-bottom-width:1px;margin-bottom:0px;padding-bottom:0px"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"textTransform":"capitalize","fontSize":"22px"},"elements":{"link":{"color":{"text":"var:preset|color|postblog-secondary"}}},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"postblog-secondary","fontFamily":"primary"} -->
<h5 class="wp-block-heading has-text-align-center has-postblog-secondary-color has-text-color has-link-color has-primary-font-family" style="margin-bottom:10px;font-size:22px;text-transform:capitalize">Search</h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-default has-inter-font-family","style":{"spacing":{"padding":{"top":"30px"},"blockGap":"var:preset|spacing|50","margin":{"top":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default has-inter-font-family" style="margin-top:0px;padding-top:30px"><!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","style":{"border":{"radius":"50px"},"elements":{"link":{"color":{"text":"var:preset|color|postblog-white-primary"}}}},"backgroundColor":"postblog-primary","textColor":"postblog-white-primary","fontFamily":"Inter"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"categories"},"className":"is-style-fseboxshadowhover","style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"},"margin":{"top":"30px"}},"border":{"radius":"10px"}},"backgroundColor":"postblog-white-primary","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group is-style-fseboxshadowhover has-postblog-white-primary-background-color has-background" style="border-radius:10px;margin-top:30px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:group {"className":"postblog-section-heading","style":{"border":{"bottom":{"color":"#eeeeee","width":"1px"},"top":[],"right":[],"left":[]},"spacing":{"margin":{"bottom":"0px"},"padding":{"bottom":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group postblog-section-heading" style="border-bottom-color:#eeeeee;border-bottom-width:1px;margin-bottom:0px;padding-bottom:0px"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"textTransform":"capitalize","fontSize":"22px"},"elements":{"link":{"color":{"text":"var:preset|color|postblog-secondary"}}},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"postblog-secondary","fontFamily":"primary"} -->
<h5 class="wp-block-heading has-text-align-center has-postblog-secondary-color has-text-color has-link-color has-primary-font-family" style="margin-bottom:10px;font-size:22px;text-transform:capitalize">Categories</h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"top":"30px"},"blockGap":"var:preset|spacing|50","margin":{"top":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default" style="margin-top:0px;padding-top:30px"><!-- wp:categories {"showPostCounts":true,"style":{"spacing":{"padding":{"right":"0px","left":"0px"}}},"fontFamily":"Inter"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"tags"},"className":"is-style-fseboxshadowhover","style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"},"margin":{"top":"30px"}},"border":{"radius":"10px"}},"backgroundColor":"postblog-white-primary","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group is-style-fseboxshadowhover has-postblog-white-primary-background-color has-background" style="border-radius:10px;margin-top:30px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:group {"className":"postblog-section-heading","style":{"border":{"bottom":{"color":"#eeeeee","width":"1px"},"top":[],"right":[],"left":[]},"spacing":{"margin":{"bottom":"0px"},"padding":{"bottom":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group postblog-section-heading" style="border-bottom-color:#eeeeee;border-bottom-width:1px;margin-bottom:0px;padding-bottom:0px"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"textTransform":"capitalize","fontSize":"22px"},"elements":{"link":{"color":{"text":"var:preset|color|postblog-secondary"}}},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"postblog-secondary","fontFamily":"primary"} -->
<h5 class="wp-block-heading has-text-align-center has-postblog-secondary-color has-text-color has-link-color has-primary-font-family" style="margin-bottom:10px;font-size:22px;text-transform:capitalize">Tags</h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"top":"30px"},"blockGap":"var:preset|spacing|50","margin":{"top":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default" style="margin-top:0px;padding-top:30px"><!-- wp:tag-cloud {"numberOfTags":15,"className":"is-style-outline","fontFamily":"Inter"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"social"},"className":"is-style-fseboxshadowhover","style":{"spacing":{"margin":{"top":"30px"},"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}},"border":{"radius":"10px"}},"backgroundColor":"postblog-white-primary","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group is-style-fseboxshadowhover has-postblog-white-primary-background-color has-background" style="border-radius:10px;margin-top:30px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:group {"className":"postblog-section-heading","style":{"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"color":"#eeeeee","width":"1px"},"left":{"width":"0px","style":"none"}},"spacing":{"margin":{"bottom":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group postblog-section-heading" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:#eeeeee;border-bottom-width:1px;border-left-style:none;border-left-width:0px;margin-bottom:0px"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"textTransform":"capitalize","fontSize":"22px"},"elements":{"link":{"color":{"text":"var:preset|color|postblog-secondary"}}},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"postblog-secondary","fontFamily":"primary"} -->
<h5 class="wp-block-heading has-text-align-center has-postblog-secondary-color has-text-color has-link-color has-primary-font-family" style="margin-bottom:10px;font-size:22px;text-transform:capitalize">Social</h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","left":"0px","right":"0px"},"blockGap":"var:preset|spacing|40","margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:30px;padding-right:0px;padding-left:0px"><!-- wp:social-links {"showLabels":true,"className":"is-style-default","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|20"},"margin":{"top":"0","left":"0","right":"0","bottom":"0px"}}},"layout":{"type":"flex","flexWrap":"wrap","orientation":"horizontal","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-visible-labels is-style-default" style="margin-top:0;margin-right:0;margin-bottom:0px;margin-left:0"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"pinterest"} /-->

<!-- wp:social-link {"url":"#","service":"dribbble"} /-->

<!-- wp:social-link {"url":"#","service":"skype"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"latest posts"},"className":"is-style-fseboxshadowhover","style":{"spacing":{"margin":{"top":"30px"},"padding":{"left":"30px","right":"30px","top":"30px","bottom":"30px"}},"border":{"radius":"10px"}},"backgroundColor":"postblog-white-primary","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group is-style-fseboxshadowhover has-postblog-white-primary-background-color has-background" style="border-radius:10px;margin-top:30px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:group {"className":"postblog-section-heading","style":{"spacing":{"margin":{"bottom":"26px"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"color":"#eeeeee","width":"1px"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group postblog-section-heading" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:#eeeeee;border-bottom-width:1px;border-left-style:none;border-left-width:0px;margin-bottom:26px"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"textTransform":"capitalize","fontSize":"22px"},"elements":{"link":{"color":{"text":"var:preset|color|postblog-secondary"}}},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"postblog-secondary","fontFamily":"primary"} -->
<h5 class="wp-block-heading has-text-align-center has-postblog-secondary-color has-text-color has-link-color has-primary-font-family" style="margin-bottom:10px;font-size:22px;text-transform:capitalize">Editors Pick</h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":33,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"15px"}}} -->
<!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"left":"15px"},"padding":{"bottom":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"color":"#cccccc","width":"1px"},"top":[],"right":[],"left":[]}}} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile" style="border-bottom-color:#cccccc;border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:column {"verticalAlignment":"center","width":"100px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100px"><!-- wp:post-featured-image {"isLink":true,"height":"70px","style":{"border":{"radius":"5px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"65%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:65%"><!-- wp:post-title {"isLink":true,"className":"postblog-posts-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"lineHeight":"1.3","fontSize":"18px"}},"textColor":"postblog-secondary","fontSize":"medium","fontFamily":"primary"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"ads"},"className":"is-style-fseboxshadow","style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"},"margin":{"top":"30px"}},"border":{"radius":"10px"}},"backgroundColor":"postblog-white-primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-fseboxshadow has-postblog-white-primary-background-color has-background" style="border-radius:10px;margin-top:30px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:query {"queryId":21,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default","columnCount":3}} -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"overlayColor":"black","isUserOverlayColor":true,"minHeight":410,"contentPosition":"bottom left","className":"postblog-cover","style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"},"blockGap":"var:preset|spacing|40"},"border":{"radius":"10px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left postblog-cover" style="border-radius:10px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px;min-height:410px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"postblog-category","style":{"spacing":{"margin":{"bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"","justifyContent":"left"}} -->
<div class="wp-block-group postblog-category" style="margin-bottom:0px"><!-- wp:post-terms {"term":"category","textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|postblog-dark-primary"}}},"border":{"radius":"5px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"bottom":"0px"}},"typography":{"textDecoration":"none"}},"textColor":"white","fontFamily":"primary"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"className":"postblog-posts-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"lineHeight":"1.2","fontSize":"26px","letterSpacing":"-0.02em"},"spacing":{"margin":{"bottom":"15px"}}},"textColor":"postblog-dark-primary","fontFamily":"primary"} /-->

<!-- wp:post-date {"isLink":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|postblog-dark-primary"}}}},"textColor":"postblog-dark-primary","fontSize":"x-small","fontFamily":"primary"} /--></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

</div>'
);