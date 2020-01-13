<?php

/* file d'attente des scripts et des styles*/

require_once('keen-options/keen-options.php');

function keenetnoa_scripts()
{
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.4.1');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');

	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '3.4.1', true);
	/* 	wp_register_script(' media-uploader ',  get_template_directory_uri() . '/js/bootstrap.min.js', array(' jquery '));
 */
}
add_action('wp_enqueue_scripts', 'keenetnoa_scripts');


/* Ajout des polices googles */
function keenetnoa_google_fonts()
{
	wp_register_style('OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
	wp_enqueue_style('OpenSans');
}

add_action('wp_print_styles', 'keenetnoa_google_fonts');


/* Ajout des titles par page */

add_theme_support('title-tag');
