<?php
/**
 * Keenetnoa functions and definitions
 *
 * @link keenetnoa.fr
 *
 * @package WordPress
 * @subpackage Keenetnoa
 * @since 1.0
 */

/* file d'attente des scripts et des styles*/
wp_enqueue_style( 'style', get_stylesheet_uri() );

wp_enqueue_script( 'script', get_template_directory_uri(), true);