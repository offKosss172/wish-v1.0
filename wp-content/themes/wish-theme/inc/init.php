<?php 
/**
 * all file includeed
 *
 * @param  
 * @return mixed|string
 */
get_template_part( 'inc/admin-function');
get_template_part( 'inc/header-function');
get_template_part( 'inc/footer-function');
get_template_part( 'inc/blog-function');
//breadcrumbs
get_template_part( 'lib/breadcrumbs/breadcrumbs');
//page-post-meta
get_template_part( 'lib/page-meta-box/page-meta-box');
//custom-style
get_template_part( 'inc/th-shop-mania-custom-style');
/******************************/
// woocommerce
/******************************/
get_template_part( 'inc/woocommerce/woo-core');
get_template_part( 'inc/woocommerce/woo-function');
 //theme-option
get_template_part( 'lib/th-option/th-option');
//CHILD THEME 
// get_template_part( 'lib/th-option/child-notify');
get_template_part( 'lib/welcome-bar/welcome-bar');
