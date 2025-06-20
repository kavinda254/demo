<?php

/**
 * Top Stories Section.
 */
return array(
	'title'      => __( 'Recent Post', 'postblog' ),
	'categories' => array( 'postblog-basic' ),
	'content'    => '<!-- wp:group {"metadata":{"categories":["postblog-basic"],"patternName":"postblog/recent-post","name":"Recent Post"},"style":{"spacing":{"padding":{"bottom":"80px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"postblog-dark-primary","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-postblog-dark-primary-background-color has-background postblog-recent-post" style="padding-right:var(--wp--preset--spacing--40);padding-bottom:80px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"className":"postblog-section-heading","style":{"spacing":{"margin":{"bottom":"26px"}},"border":{"bottom":{"color":"#eeeeee","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group postblog-section-heading" style="border-bottom-color:#eeeeee;border-bottom-width:1px;margin-bottom:26px"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"textTransform":"capitalize","fontSize":"24px"},"elements":{"link":{"color":{"text":"var:preset|color|postblog-primary"}}},"spacing":{"padding":{"bottom":"10px"}}},"textColor":"postblog-primary","fontFamily":"primary"} -->
<h5 class="wp-block-heading has-text-align-center has-postblog-primary-color has-text-color has-link-color has-primary-font-family" style="padding-bottom:10px;font-size:24px;text-transform:capitalize">Recent Post</h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":19,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"0px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"35%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:35%"><!-- wp:post-featured-image {"width":"80px","height":"80px","style":{"border":{"radius":"10px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"65%","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:65%"><!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"typography":{"lineHeight":"1.5","fontSize":"20px","textDecoration":"none"}},"textColor":"postblog-dark-background-two","fontFamily":"primary"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->',
);