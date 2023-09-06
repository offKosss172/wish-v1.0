<?php 

if ( ! function_exists( 'th_shop_mania_widget_footer_markup_lite' ) ){  
function th_shop_mania_widget_footer_markup_lite(){ 
$th_shop_mania_bottom_footer_widget_layout  = get_theme_mod( 'th_shop_mania_bottom_footer_widget_layout','ft-wgt-none');  
 //This is to check if any widget active then only add markup
 if( is_active_sidebar('footer-1' ) ){
  ?>  
  <div class="widget-footer">
      <div class="container">
            <div class="widget-footer-col3">
              <menu>
                <a href="/about-us/">Company Info</a>
                <a href="/contact/">Contact</a>
                <a href="/terms/">Terms of Use</a>
                <a href="/privacy-policy-2/">Privacy Policy</a>
                  <a href="/trust-safety/">Trust & Safety</a>
                  <a href="/regulator-portal/">Regulator Portal</a>
              </menu>
            </div> 
          </div>
      </div>
    </div>  
<?php } }
}
add_action('th_shop_mania_widget_footer_lite','th_shop_mania_widget_footer_markup_lite' );

if ( ! function_exists( 'th_shop_mania_below_footer_markup_lite' ) ){  
function th_shop_mania_below_footer_markup_lite(){ ?>   
<div class="below-footer lite">
            <p class="footer-copyright">©2023 SHOP MARKET. All Rights Reserved.</p>         
</div>
                  
<?php }
}
add_action( 'th_shop_mania_below_footer_lite', 'th_shop_mania_below_footer_markup_lite' );


/***********************************************************
*Footer Post Meta Hide and show Function for TH SHOP MANIA Theme
***************************************************************/
if( ! function_exists( 'th_shop_mania_footer_abv_post_meta' ) ){
function th_shop_mania_footer_abv_post_meta($page_post_meta_set=''){
    if($page_post_meta_set!=='on'){
             // top-footer 
          do_action( 'th_shop_mania_pro_top_footer' ); 
  }
 }
}
//Widget footer
if( ! function_exists( 'th_shop_mania_footer_widget_post_meta' ) ){
function th_shop_mania_footer_widget_post_meta($page_post_meta_set=''){
    if($page_post_meta_set!=='on'){
      //Widget footer
      if (function_exists( 'th_shop_mania_pro_load_plugin' ) ){  
          do_action( 'th_shop_mania_pro_widget_footer' );
        }
        else{
          do_action( 'th_shop_mania_widget_footer_lite' );
        }
         
  }
 }
}
//Footer bottom
if( ! function_exists( 'th_shop_mania_footer_bottom_post_meta' ) ){
function th_shop_mania_footer_bottom_post_meta($page_post_meta_set=''){
    if($page_post_meta_set!=='on'){   
            // below-footer
          if (function_exists( 'th_shop_mania_pro_load_plugin' ) ){  
          do_action( 'th_shop_mania_pro_below_footer' );
        }
        else{
          do_action( 'th_shop_mania_below_footer_lite' );  
        }
  }
 }
}