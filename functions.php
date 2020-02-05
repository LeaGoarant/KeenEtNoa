<?php

add_action('after_setup_theme', 'customtheme_add_woocommerce_support');
function customtheme_add_woocommerce_support()
{
	add_theme_support('woocommerce');
}

/* require_once('keen-options/keen-options.php');*/
require_once('PageTemplater/pagetemplater.php');
require_once('wp-bootstrap-navwalker.php');
require_once('keen-options/custom.php');
require_once('js/truncatdesc.php');


/* file d'attente des scripts et des styles*/
add_action('wp_enqueue_scripts', 'keenetnoa_scripts');
function keenetnoa_scripts()
{
	wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
	wp_enqueue_script('jquery.bootstrap.min');

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


/* Ajout des polices googles */
add_action('wp_enqueue_scripts', 'wpb_add_google_fonts');
function wpb_add_google_fonts()
{
	wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans&display=swap', false);
}

/* Ajout des titles par page */
add_theme_support('title-tag');


/* navbar responsive */
add_filter('woocommerce_ajax_variation_threshold', 'ww_ajax_variation_threshold', 10, 2);
function keenetnoa_responsive_menu()
{

	register_nav_menu('primary-res-navigation', __('Responsive Navigation', 'keenetnoa'));
}
add_action('after_setup_theme', 'keenetnoa_responsive_menu');

// Woocommerce

function ww_ajax_variation_threshold($default, $product)
{
	return 2000; // increase this number if needed
}

// Page produits 

remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);

add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 25);


add_filter('wc_add_to_cart_message_html', 'add_continue_shopping_button', 10, 2);
function add_continue_shopping_button($message, $products)
{

	$message .= sprintf('<a href="%s" class="button wc-forward" style="">%s</a>', esc_url(wc_get_page_permalink('shop')), esc_html__('Continuer mon Shopping', 'woocommerce'));

	return $message;
}


/* Page de validation de commande  */
add_filter('woocommerce_checkout_fields', 'addBootstrapToCheckoutFields');
function addBootstrapToCheckoutFields($fields)
{
	foreach ($fields as &$fieldset) {
		foreach ($fieldset as &$field) {
			// if you want to add the form-group class around the label and the input
			$field['class'][] = 'form-group ';

			// add form-control to the actual input
			$field['input_class'][] = 'form-control inp';
		}
	}
	return $fields;
}


/* Nav Profil Page */
remove_action('woocommerce_account_navigation', 'woocommerce_account_navigation');


/* Add Widget section */
add_action('widgets_init', 'KeenWidget');
function Keenwidget()
{
	register_sidebar(array(
		'name' => 'Sidebar Shop',
		'id' => 'sideshop',
		'description' => 'Sidebar contenant généralement les filtres de produits',
		'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget_title th3">',
		'after_title' => '</div>',
	));
}

// Footer Widget

add_action('widgets_init', 'FooterWidget');
function Footerwidget() {

	register_sidebar(array(
		'name' => 'Footer links center',
		'id' => 'footer-links-center',
		'description' => 'Widget to add links to pages in the footer section',
		'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
	));

	register_sidebar(array(
		'name' => 'Footer links right',
		'id' => 'footer-links-right',
		'description' => 'Widget to add links to pages in the footer section',
		'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
	));
}