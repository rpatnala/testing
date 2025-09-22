<?php

 /**
  * Title: Blog Section
  * Slug: fse-fashion-store/blog-section
  */

?>

<!-- wp:group {"align":"full","className":"wp-block-section blog-sec","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group alignfull wp-block-section blog-sec" style="padding-top:var(--wp--preset--spacing--60);padding-right:0;padding-bottom:var(--wp--preset--spacing--60);padding-left:0"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"30px","lineHeight":"1.2"},"spacing":{"margin":{"bottom":"0"}}},"fontFamily":"bebas-neue"} -->
<h2 class="wp-block-heading has-text-align-center has-bebas-neue-font-family" style="margin-bottom:0;font-size:30px;font-style:normal;font-weight:400;line-height:1.2"><?php esc_html_e('Blogs','fse-fashion-store'); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":4,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:cover {"useFeaturedImage":true,"isUserOverlayColor":true,"minHeight":450,"customGradient":"linear-gradient(180deg,rgba(0,0,0,0) 0%,rgb(0,0,0) 100%)","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);min-height:450px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient" style="background:linear-gradient(180deg,rgba(0,0,0,0) 0%,rgb(0,0,0) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"homebog-meta","style":{"typography":{"fontSize":"16px"},"spacing":{"blockGap":"20px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group homebog-meta" style="font-size:16px"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-title {"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} /-->

<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}}},"textColor":"white"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-author-name {"style":{"typography":{"fontSize":"18px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} /-->

<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"14px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0"}}},"textColor":"white"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->