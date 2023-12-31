<?php

if ( ! function_exists( 'th_shop_mania_setup' ) ) :
define( 'TH_SHOP_MANIA_THEME_VERSION','1.0.0');
define( 'TH_SHOP_MANIA_THEME_DIR', get_template_directory() . '/' );
define( 'TH_SHOP_MANIA_THEME_URI', get_template_directory_uri() . '/' );
define( 'TH_SHOP_MANIA_THEME_SETTINGS', 'th-shop-mania-settings' );

	function th_shop_mania_setup(){

		load_theme_textdomain( 'th-shop-mania', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		add_theme_support( 'woocommerce' );
	
		// Add support for Block Styles.
        add_theme_support( 'wp-block-styles' );

        // Add support for full and wide align images.
        add_theme_support( 'align-wide' );

        // Add support for editor styles.
        add_theme_support( 'editor-styles' );

        // Enqueue editor styles.
        add_editor_style( 'block-editor.css' );
        // Add support for responsive embedded content.
        add_theme_support( 'responsive-embeds' );

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
		// Add support for Custom Header.
		add_theme_support( 'custom-header', 

			apply_filters( 'th_shop_mania_custom_header_args', array(
				'default-image' => '',
				'flex-height'   => true,
				'header-text'   => false,
				'video'          => false,
		) 

		) );

         $args = array(
	    'default-color' => 'f1f1f1',
        );
        add_theme_support( 'custom-background',$args );
        
        $GLOBALS['content_width'] = apply_filters( 'th_shop_mania_content_width', 640 );
        add_theme_support( 'woocommerce', array(
                                                 'thumbnail_image_width' => 320,
                                             ) );

        add_theme_support( 'recommend-plugins', array(

        	 'hunk-companion' => array(
                'name' => esc_html__( 'Hunk Companion', 'th-shop-mania' ),
                 'img' => 'icon-128x128.png',
                 'pro_link' =>'',
                'active_filename' => 'hunk-companion/hunk-companion.php',
            ),
			'woocommerce' => array(
				'name' => esc_html__( 'Woocommerce', 'th-shop-mania' ),
				 'img' => 'icon-128x128.png',
				 'pro_link' => '',
				 'active_filename' => 'woocommerce/woocommerce.php',
			),
        	 'th-all-in-one-woo-cart' => array(
                'name' => esc_html__( 'Th All In One Woo Cart', 'th-shop-mania' ),
                'img' => 'icon-128x128.png',
                'pro_link' => esc_url('https://themehunk.com/th-all-in-one-woo-cart/'),
                'active_filename' => 'th-all-in-one-woo-cart/th-all-in-one-woo-cart.php',
                'pro-plugin' => array('slug'=>'th-all-in-one-woo-cart-pro',
                					'init'=>'th-all-in-one-woo-cart-pro/th-all-in-one-woo-cart-pro.php',
                					 'admin_link'=>'th-all-in-one-woo-cart-pro',
                					 'docs'=>esc_url('https://themehunk.com/docs/th-all-in-one-woo-cart/'),

            						)
            ),
        	'lead-form-builder' => array(
                'name' => esc_html__( 'Lead Form Builder', 'th-shop-mania' ),
                'img' => 'icon-128x128.png',
                'pro_link' => esc_url('https://themehunk.com/product/lead-form-builder-pro/'),
                'active_filename' => 'lead-form-builder/lead-form-builder.php',
                'pro-plugin' => array('slug'=>'lead-form-builder',
                					'init'=>'lead-form-builder/init.php',
                					  'admin_link'=>'wplf-plugin-menu',
                					  'docs'=>esc_url('https://themehunk.com/docs/lead-form-builder-pro/'),
            						)
            ),
            'wp-popup-builder' => array(
                'name' => esc_html__( 'WP Popup Builder – Popup Forms & Newsletter', 'th-shop-mania' ),
                'img' => 'icon-128x128.png',
                'pro_link' => esc_url('https://themehunk.com/wp-popup-builder-pro/'),
                'active_filename' => 'wp-popup-builder/wp-popup-builder.php',
                'pro-plugin' => array('slug'=>'wp-popup-builder',
                					'init'=>'wp-popup-builder-pro/wp-popup-builder.php',
                					'admin_link'=>'wppb',
                					'docs'=>esc_url('https://themehunk.com/docs/wp-popup-builder-pro/'),
            						)
            ),

            'th-advance-product-search' => array(
                'name' => esc_html__( 'Th Advance Product Search', 'th-shop-mania' ),
                'img' => 'icon-128x128.gif',
                'pro_link' => esc_url('https://themehunk.com/advance-product-search/'),
                'active_filename' => 'th-advance-product-search/th-advance-product-search.php',
                'pro-plugin' => array('slug'=>'th-advance-product-search-pro',
                					'init'=>'th-advance-product-search-pro/th-advance-product-search-pro.php',
                					 'admin_link'=>'th-advance-product-search-pro',
                					 'docs'=>esc_url('https://themehunk.com/docs/th-advance-product-search/'),

            						)
            ),
            'th-product-compare' => array(
                'name' => esc_html__( 'Th Product Compare', 'th-shop-mania' ),
                'img' => 'icon-128x128.png',
                'pro_link' => esc_url('https://themehunk.com/th-product-compare/'),
                'active_filename' => 'th-product-compare/th-product-compare.php',
                'pro-plugin' => array('slug'=>'th-product-compare-pro',
                					'init'=>'th-product-compare-pro/th-product-compare-pro.php',
                					 'admin_link'=>'th-product-compare-pro',
                					 'docs'=>esc_url('https://themehunk.com/docs/th-product-compare/'),

            						)
            ),
            'th-variation-swatches' => array(
                'name' => esc_html__( 'Th Variation Swatches', 'th-shop-mania' ),
                'img' => 'icon-128x128.gif',
                'pro_link' => esc_url('https://themehunk.com/th-variation-swatches/'),
                'active_filename' => 'th-variation-swatches/th-variation-swatches.php',
                'pro-plugin' => array('slug'=>'th-variation-swatches',
                					'init'=>'th-variation-swatches-pro/th-variation-swatches-pro.php',
                					 'admin_link'=>'th-variation-swatches',
                					 'docs'=>esc_url('https://themehunk.com/docs/th-variation-swatches-plugin/'),
            						)
            ), 
            'yith-woocommerce-wishlist' => array(
                 'name' => esc_html__( 'YITH WooCommerce Wishlist', 'th-shop-mania' ),
                  'img' => 'icon-128x128.jpg',
                  'pro_link' => '',
                 'active_filename' => 'yith-woocommerce-wishlist/init.php',
             )
            
        ) );

        add_theme_support( 'import-demo-content', array(
             'hunk-companion' => array(
                'name' => esc_html__( 'Hunk Companion', 'th-shop-mania' ),
                 'img' => 'icon-128x128.png',
                'active_filename' => 'hunk-companion/hunk-companion.php',
                'pro_link' => esc_url(''),
            ),    

        ));
        
	}
endif;
add_action( 'after_setup_theme', 'th_shop_mania_setup' );

function th_shop_mania_scripts(){
	require_once trailingslashit(TH_SHOP_MANIA_THEME_DIR).'third-party/fonts/wptt-webfont-loader.php';
	// enqueue css
	$dir_name    = defined( 'SCRIPT_DEBUG' ) && ( SCRIPT_DEBUG ) ? 'unminified' : 'minified';
	$prefix = defined( 'SCRIPT_DEBUG' ) && ( SCRIPT_DEBUG ) ? '' : '.min';
	wp_enqueue_style( 'th-icon', TH_SHOP_MANIA_THEME_URI . 'third-party/fonts/th-icon/style.css', '', TH_SHOP_MANIA_THEME_VERSION );
	wp_enqueue_style( 'th-shop-mania-menu', TH_SHOP_MANIA_THEME_URI . 'css/th-shop-mania-menu.css','',TH_SHOP_MANIA_THEME_VERSION);	

	wp_enqueue_style('th-shop-mania-style', get_template_directory_uri() . '/style.css', array(), TH_SHOP_MANIA_THEME_VERSION);
	wp_add_inline_style('th-shop-mania-style', th_shop_mania_custom_style());

	// Load the webfont.
	wp_enqueue_style('jost-fonts',wptt_get_webfont_url( 'https://fonts.googleapis.com/css2?family=Jost:wght@100;300;400;500;600;700&display=swap' ),
		array(),
		'1.0'
	);
	
    //enqueue js
    wp_enqueue_script('th-shop-mania-menu-js', TH_SHOP_MANIA_THEME_URI .'js/th-shop-mania-menu.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script('th-shop-mania-accordian-menu-js', TH_SHOP_MANIA_THEME_URI .'js/th-shop-mania-accordian-menu.js', array( 'jquery' ), TH_SHOP_MANIA_THEME_VERSION , true );

    wp_enqueue_script( 'th-shop-mania-custom-js', TH_SHOP_MANIA_THEME_URI .'js/th-shop-mania-custom.js', array( 'jquery' ), TH_SHOP_MANIA_THEME_VERSION , true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ){
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'th_shop_mania_scripts' );

add_action( 'enqueue_block_editor_assets', function() {
	require_once trailingslashit(TH_SHOP_MANIA_THEME_DIR).'third-party/fonts/wptt-webfont-loader.php';
	wp_enqueue_style('jost-fonts',wptt_get_webfont_url( 'https://fonts.googleapis.com/css2?family=Jost:wght@100;300;400;500;600;700&display=swap' ),
		array(),
		'1.0'
	);
    wp_enqueue_style('th-shop-mania-block-editor-style', get_template_directory_uri() . '/css/block-editor.css', array(), TH_SHOP_MANIA_THEME_VERSION);

    wp_add_inline_style('th-shop-mania-block-editor-style', th_shop_mania_block_editor_custom_style());
} );

/**
 * Load init.
 */
require_once trailingslashit(TH_SHOP_MANIA_THEME_DIR).'inc/init.php';

//custom function conditional check for blog page
function th_shop_mania_is_blog (){
    return ( is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) && 'post' == get_post_type();
}
if ( ! function_exists( 'wp_body_open' ) ) {
	/**
	 * Shim for wp_body_open, ensuring backward compatibility with versions of WordPress older than 5.2.
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}

// Add block patterns
require get_template_directory() . '/inc/block-pattern.php';


function custom_order_number_format($order_id) {
    return 'CX' . str_pad($order_id, 10, '044537', STR_PAD_LEFT);
}
add_filter('woocommerce_order_number', 'custom_order_number_format');

wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery'), null, true);



  