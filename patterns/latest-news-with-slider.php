<?php
/**
 * Title: Latest News With Slider
 * Slug: netbook/latest-news-with-slider
 * Categories: netbook-patterns, latest-news-with-slider
 */
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"8.11rem","bottom":"8rem"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" id="latest-news" style="padding-top:8.11rem;padding-bottom:8rem"><!-- wp:group {"tagName":"header","layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical","justifyContent":"center"}} -->
<header id="s-header" class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained","contentSize":"441px"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"bottom":"-0.625rem"}}},"textColor":"primary","fontSize":"tiny-plus"} -->
<h5 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-tiny-plus-font-size" style="margin-bottom:-0.625rem;font-style:normal;font-weight:500">Get Our Aplication</h5>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"secondary","fontSize":"medium-plus"} -->
<h2 class="wp-block-heading has-text-align-center has-secondary-color has-text-color has-medium-plus-font-size" style="font-style:normal;font-weight:700">Latest News</h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></header>
<!-- /wp:group -->

<!-- wp:query {"queryId":11,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template -->
<!-- wp:post-featured-image /-->

<!-- wp:post-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.6"},"color":{"text":"#2f2c4a"}},"fontSize":"small"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->