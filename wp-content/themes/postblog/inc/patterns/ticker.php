<?php

/**
 * Ticker.
 */
return array(
	'title'      => __( 'Ticker', 'postblog' ),
	'categories' => array( 'postblog-basic' ),
	'content'    => '<!-- wp:group {"metadata":{"categories":["postblog-basic"],"patternName":"postblog/ticker","name":"Ticker"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"bottom":"30px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:30px;padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"25px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:25px"><!-- wp:column {"verticalAlignment":"center","width":"12%","style":{"border":{"radius":"5px"}},"backgroundColor":"postblog-primary"} -->
<div class="wp-block-column is-vertically-aligned-center has-postblog-primary-background-color has-background" style="border-radius:5px;flex-basis:12%"><!-- wp:heading {"style":{"spacing":{"padding":{"top":"18px","bottom":"18px","left":"15px","right":"15px"}},"elements":{"link":{"color":{"text":"var:preset|color|postblog-white-primary"}}},"border":{"radius":"5px"},"typography":{"fontSize":"18px"}},"backgroundColor":"postblog-primary","textColor":"postblog-white-primary","fontFamily":"primary"} -->
<h2 class="wp-block-heading has-postblog-white-primary-color has-postblog-primary-background-color has-text-color has-background has-link-color has-primary-font-family" style="border-radius:5px;padding-top:18px;padding-right:15px;padding-bottom:18px;padding-left:15px;font-size:18px">Top Stories</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"88%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:88%"><!-- wp:query {"queryId":25,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"parents":[],"format":[]},"metadata":{"categories":["posts"],"patternName":"core/query-medium-posts","name":"Image at left"},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
<!-- wp:group {"className":"is-style-fseboxshadow","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":"5px"}},"backgroundColor":"postblog-white-primary","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","orientation":"horizontal"}} -->
<div class="wp-block-group is-style-fseboxshadow has-postblog-white-primary-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","width":"40px","height":"40px","style":{"border":{"radius":"3px"},"layout":{"selfStretch":"fit","flexSize":null}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|postblog-secondary"}}}},"textColor":"postblog-secondary","fontFamily":"primary"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
);