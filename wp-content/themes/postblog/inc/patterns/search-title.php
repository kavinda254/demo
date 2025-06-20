<?php

/**
 * Search Title.
 */
return array(
	'title'      => __( 'Search Title', 'postblog' ),
	'categories' => array( 'postblog-basic' ),
	'content'    => '<!-- wp:group {"metadata":{"categories":["postblog-basic"],"patternName":"postblog/search-title","name":"search title"},"style":{"spacing":{"padding":{"left":"15px","right":"15px","top":"20px","bottom":"20px"}}},"backgroundColor":"postblog-secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-postblog-secondary-background-color has-background" style="padding-top:20px;padding-right:15px;padding-bottom:20px;padding-left:15px"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:query-title {"type":"search","style":{"elements":{"link":{"color":{"text":"var:preset|color|postblog-white-primary"}}}},"textColor":"postblog-white-primary","fontSize":"normal","fontFamily":"primary"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:buttons {"style":{"spacing":{"blockGap":{"left":"0"}}}} -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"postblog-white-primary","style":{"border":{"radius":"0px"},"spacing":{"padding":{"left":"0px","right":"0px","top":"0rem","bottom":"0rem"}},"color":{"background":"#ffffff00"},"elements":{"link":{"color":{"text":"var:preset|color|postblog-white-primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontFamily":"Inter"} -->
<div class="wp-block-button has-inter-font-family" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-postblog-white-primary-color has-text-color has-background has-link-color wp-element-button" href="http://wp-nexsxo.local/" style="border-radius:0px;background-color:#ffffff00;padding-top:0rem;padding-right:0px;padding-bottom:0rem;padding-left:0px">Home <kbd><sub><sup><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-postblog-white-primary-color">>></mark></sup></sub></kbd></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:query-title {"type":"search","style":{"elements":{"link":{"color":{"text":"var:preset|color|postblog-white-primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"postblog-white-primary","fontSize":"tiny","fontFamily":"primary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
);