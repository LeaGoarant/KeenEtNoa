<?php

function customtheme_add_woocommerce_support()
 {
add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'customtheme_add_woocommerce_support' );

/* require_once('keen-options/keen-options.php');
 */

require_once('keen-options/keen-admin.php');
require_once('PageTemplater/pagetemplater.php');
require_once('wp-bootstrap-navwalker.php');
require_once('keen-options/keen-panel.php');

/* file d'attente des scripts et des styles*/

function wpt_register_js()
{
	wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
	wp_enqueue_script('jquery.bootstrap.min');
}
add_action('init', 'wpt_register_js');
function wpt_register_css()
{
	wp_enqueue_style('bootstrap.min');
}
add_action('wp_enqueue_scripts', 'wpt_register_css');


function keenetnoa_scripts()
{

	wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.js', 'jquery');
	wp_enqueue_script('jquery.bootstrap.min');

	wp_register_style('bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

	wp_register_style('style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('style');

	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '3.4.1', true);
	/* 	wp_enqueue_script( 'bpc_togglemenu', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20160909', true );
 */	/* 	wp_register_script(' media-uploader ',  get_template_directory_uri() . '/js/bootstrap.min.js', array(' jquery '));
 */
}
add_action('wp_enqueue_scripts', 'keenetnoa_scripts');


/* Ajout des polices googles */
function wpb_add_google_fonts()
{
	wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans&display=swap', false);
}

add_action('wp_enqueue_scripts', 'wpb_add_google_fonts');
/* Ajout des titles par page */
add_theme_support('title-tag');


/* navbar responsive */

function keenetnoa_responsive_menu()
{

	register_nav_menu('primary-res-navigation', __('Responsive Navigation', 'keenetnoa'));
}
add_action('after_setup_theme', 'keenetnoa_responsive_menu');

// Woocommerce

function ww_ajax_variation_threshold( $default, $product ) {
	return 2000; // increase this number if needed
}
add_filter( 'woocommerce_ajax_variation_threshold', 'ww_ajax_variation_threshold', 10, 2 );

// Page produits 

remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 25);

add_filter( 'wc_add_to_cart_message_html', 'add_continue_shopping_button', 10, 2);
function add_continue_shopping_button( $message, $products ){

		$message .= sprintf( '<a href="%s" class="button wc-forward" style="">%s</a>', esc_url( wc_get_page_permalink( 'shop' ) ), esc_html__( 'Continue Shopping', 'woocommerce' ) );

	return $message;
}