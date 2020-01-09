<?php

/* file d'attente des scripts et des styles*/
add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );
	function startwordpress_scripts() {
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.4.1');
		wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );

		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.4.1', true );
}

/* Ajout des polices googles */
	function startwordpress_google_fonts() {
		wp_register_style('OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
		wp_enqueue_style( 'OpenSans');
	}
	
	add_action('wp_print_styles', 'startwordpress_google_fonts');


/* Ajout des titles par page */

add_theme_support('title-tag');

