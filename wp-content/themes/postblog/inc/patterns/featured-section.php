<?php

/**
 * Featured Section.
 */
return array(
	'title'      => __( 'featured-section', 'postblog' ),
	'categories' => array( 'postblog-basic' ),
	'content'    => '<!-- wp:group {"metadata":{"categories":["postblog-basic"],"patternName":"postblog/featured-section","name":"Featured Section"},"style":{"spacing":{"padding":{"bottom":"50px","right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"25px"},"margin":{"top":"0px"}}},"backgroundColor":"postblog-dark-primary","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group has-postblog-dark-primary-background-color has-background" style="margin-top:0px;padding-top:25px;padding-right:var(--wp--preset--spacing--40);padding-bottom:50px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"className":"is-style-fseboxshadow","style":{"border":{"radius":"10px"},"shadow":"none"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-fseboxshadow" style="border-radius:10px;box-shadow:none"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"30px"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"100%"} -->
<div class="wp-block-column" style="flex-basis:100%"><!-- wp:query {"queryId":21,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"overlayColor":"black","isUserOverlayColor":true,"minHeight":450,"minHeightUnit":"px","contentPosition":"bottom left","className":"postblog-cover","style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"},"blockGap":"var:preset|spacing|30","margin":{"bottom":"0px"}},"border":{"radius":"8px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left postblog-cover" style="border-radius:8px;margin-bottom:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px;min-height:450px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","wideSize":"","contentSize":"","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"postblog-category","style":{"spacing":{"margin":{"bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"","justifyContent":"left"}} -->
<div class="wp-block-group postblog-category" style="margin-bottom:0px"><!-- wp:post-terms {"term":"category","textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|postblog-dark-primary"}}},"border":{"radius":"5px"},"spacing":{"margin":{"bottom":"0px"}},"typography":{"textDecoration":"none"}},"textColor":"white","fontFamily":"primary"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"className":"postblog-posts-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"lineHeight":"1.2","fontSize":"3.25rem","letterSpacing":"-0.02em"},"spacing":{"margin":{"bottom":"10px"}}},"fontFamily":"primary"} /-->

<!-- wp:post-excerpt {"excerptLength":20,"style":{"typography":{"fontSize":"16px"},"spacing":{"margin":{"top":"0px","bottom":"15px"}}},"fontFamily":"Inter"} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-author {"byline":"","isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|postblog-white-primary"},":hover":{"color":{"text":"var:preset|color|postblog-primary"}}}}},"textColor":"postblog-white-primary","fontFamily":"Inter"} /-->

<!-- wp:post-date {"isLink":false,"style":{"spacing":{"margin":{"top":"0px"}},"typography":{"fontSize":"14px"},"elements":{"link":{"color":{"text":"var:preset|color|postblog-white-primary"}}}},"textColor":"postblog-white-primary","fontFamily":"primary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);