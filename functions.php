<?php

/* file d'attente des scripts et des styles*/
	function keenetnoa_scripts() {
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.4.1');
		wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );

		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.4.1', true );
		wp_register_script ( ' media-uploader ' ,  get_template_directory_uri() . '/js/bootstrap.min.js', array ( ' jquery ' ));

	}
	add_action( 'wp_enqueue_scripts', 'keenetnoa_scripts' );


/* Ajout des polices googles */
	function keenetnoa_google_fonts() {
		wp_register_style('OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
		wp_enqueue_style( 'OpenSans');
	}
	
	add_action('wp_print_styles', 'keenetnoa_google_fonts');


/* Ajout des titles par page */

add_theme_support('title-tag');

// Modifier le thème avec le panel admin 

	function custom_setting_add_menu() {
		add_menu_page("Custom Keenetnoa", "Custom Keenetnoa" , "manage_options", "theme-panel", "theme_settings_page", null, 99);
	}
	add_action("admin_menu", "custom_setting_add_menu");



	function theme_settings_page()
	{
		?>
			<div class="wrap">
			<h1>Theme Panel</h1>
			<form method="post" action="options.php">
				<?php
					settings_fields("section");
					do_settings_sections("theme-options");      
					submit_button(); 
				?>          
			</form>
			</div>
		<?php
	}

	add_action('admin_init','custom_settings_page_setup');

	function custom_settings_page_setup ( )
{
	add_settings_section('section', 'All setting', null , 'theme-options');
	add_settings_field('twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section');
	add_settings_field('logo', 'Logo du site', 'setting_logo', 'theme-options', 'section');


	register_setting('section', 'twitter');
	register_setting('section', 'logo', 'handle_file_upload');
}

function handle_file_upload($option)
{
    if(!empty($_FILES['logo']["tmp_name"]))
    {
        $urls = wp_handle_upload($_FILES['logo'], array('logo_form' => FALSE));
        $temp = $urls["url"];
        return $temp;   
    }

    return $option;
}

	// Logo form
	function setting_logo()
	{
	   ?>
			<input  name="async-upload"  type="file" name="logo-file" /> 
			<?php echo get_option('logo-file'); ?>
	   <?php
	}

	// Twitter form
	function setting_twitter() { ?>

		<input placeholder="<?php echo get_option('twitter'); ?>", type="text" name="twitter" id="twitter" value="<?php get_option('twitter');?>" />

	<?php }
