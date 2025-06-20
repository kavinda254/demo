<?php

/**
 * List Layout With Sidebar.
 */
return array(
	'title'      => __( 'List Layout With Sidebar', 'postblog' ),
	'categories' => array( 'postblog-basic' ),
	'content'    => '<!-- wp:group {"metadata":{"categories":["postblog-basic"],"patternName":"postblog/list-layout-with-sidebar","name":"Post Display section with right sidebar"},"style":{"spacing":{"padding":{"top":"10px","bottom":"80px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"postblog-dark-primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-postblog-dark-primary-background-color has-background" style="padding-right:var(--wp--preset--spacing--40);padding-bottom:80px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"30px","left":"30px"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:group {"metadata":{"categories":["postblog-basic"],"patternName":"postblog/list-layout","name":"List Layout"},"style":{"border":{"top":{"width":"0px","style":"none"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained","contentSize":"","wideSize":""}} -->
<div class="wp-block-group" style="border-top-style:none;border-top-width:0px"><!-- wp:query {"queryId":33,"query":{"perPage":10,"pages":"","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query postblog-list-post"><!-- wp:post-template {"style":{"spacing":{"blockGap":"30px"}},"layout":{"type":"default","columnCount":3}} -->
<!-- wp:group {"className":"is-style-fseboxshadowhover postblog-post-item","style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}},"border":{"radius":"10px"}},"backgroundColor":"postblog-white-primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-fseboxshadowhover postblog-post-item has-postblog-white-primary-background-color has-background" style="border-radius:10px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"30px"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"width":"0px","style":"none"},"radius":"0px","top":[],"right":[],"left":[]}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="border-radius:0px;border-bottom-style:none;border-bottom-width:0px;margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:post-featured-image {"aspectRatio":"1","style":{"border":{"radius":"10px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:group {"className":"postblog-category","style":{"spacing":{"margin":{"bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"","justifyContent":"left"}} -->
<div class="wp-block-group postblog-category" style="margin-bottom:0px"><!-- wp:post-terms {"term":"category","textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|postblog-dark-primary"}}},"border":{"radius":"5px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"bottom":"0px"}},"typography":{"textDecoration":"none"}},"textColor":"white","fontFamily":"Inter"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"className":"postblog-posts-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"lineHeight":"1.2","fontSize":"26px","letterSpacing":"-0.02em"},"spacing":{"margin":{"top":"10px"}}},"textColor":"postblog-secondary","fontFamily":"primary"} /-->

<!-- wp:post-excerpt {"excerptLength":20,"style":{"elements":{"link":{"color":{"text":"var:preset|color|postblog-text"}}},"typography":{"fontSize":"18px","lineHeight":"1.7"},"spacing":{"margin":{"top":"10px"}}},"textColor":"postblog-text","fontFamily":"Inter"} /-->

<!-- wp:group {"metadata":{"name":"Meta"},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-author {"textAlign":"left","showBio":false,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|postblog-secondary"},":hover":{"color":{"text":"var:preset|color|postblog-primary"}}}},"spacing":{"margin":{"right":"0px","left":"0px"}},"typography":{"textDecoration":"none"}},"textColor":"postblog-primary","fontFamily":"Inter"} /-->

<!-- wp:post-date {"isLink":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|postblog-primary"}}}},"textColor":"postblog-secondary","fontSize":"x-small","fontFamily":"Inter"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"chevron","fontFamily":"Inter","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->


<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:pattern {"slug":"postblog/sidebar"} /-->
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
);