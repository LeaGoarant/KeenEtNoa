<?php
function keen_include_myuploadscript()
{
    /*
	 * I recommend to add additional conditions just to not to load the scipts on each page
	 * like:
	 * if ( !in_array('post-new.php','post.php') ) return;
	 */
    if (!did_action('wp_enqueue_media')) {
        wp_enqueue_media();
    }

    wp_enqueue_script('keen-upload', get_stylesheet_directory_uri() . '/js/keen-upload.js', array('jquery'), null, false);
}

add_action('admin_enqueue_scripts', 'keen_include_myuploadscript');



/*
 * Upload LOGO
 * @param string $name Name of option or name of post custom field.
 * @param string $value Optional Attachment ID
 * @return string HTML of the Upload Button
 */
function keen_image_uploader_field($name, $value = '')
{
    $image = ' button">Upload image';
    $image_size = 'full'; // it would be better to use thumbnail size here (150x150 or so)
    $display = 'none'; // display state ot the "Remove image" button

    if ($image_attributes = wp_get_attachment_image_src($value, $image_size)) {
        // $image_attributes[0] - image URL
        // $image_attributes[1] - image width
        // $image_attributes[2] - image height

        $image = '"><img id="' . $name . '" src="' . $image_attributes[0] . '" />';
        $display = 'inline';

        // adding image_ID to a post_meta
        if (!add_post_meta(7, '_logo', $value, true)) {
            update_post_meta(7, '_logo', $value);
        }
    }
    return '
    <div class="keen_logo_uploader">
    <h3> Bienvenue dans l\'administration du thème Keenetnoa </h3>
    <hr>
    <h4> Logo du site </h4>
        <a href="#" class="keen_upload_logo_button' . $image . ' </a>
        <input type="hidden" name="' . $name . '" id="' . $name . '" />

        <a href="#" class="keen_remove_logo_button" style="display:inline-block;display:' . $display . '">Remove image</a>
    </div>
    <hr>
    <div class="keen_logo_uploader">
    <h4> Header du site </h4>
        <a href="#" class="keen_upload_image_button' . $image . ' </a>
        <input type="hidden" name="' . $name . '" id="' . $name . '" />

        <a href="#" class="keen_remove_image_button" style="display:inline-block;display:' . $display . '">Remove image</a>
    </div>
    <hr>';
}


add_action('admin_menu', 'keen_add_options_page');

function keen_add_options_page()
{
    $page_slug = 'uplsettings';
    $option_name = 'header_img';

    if (isset($_GET['page']) && $_GET['page'] == $page_slug) {
        if (isset($_REQUEST['action']) && 'save' == $_REQUEST['action']) {
            update_option($option_name, sanitize_text_field($_REQUEST[$option_name]));
            header('Location: ' . site_url() . '/wp-admin/themes.php?page=' . $page_slug . '&saved=true');
            die;
        }
    }
    add_submenu_page('themes.php', 'More settings', 'Keen&Noa Thème', 'edit_posts', $page_slug, 'keen_print_options_page');
}

function keen_print_options_page()
{

    $option_name = 'header_img';

    if (isset($_REQUEST['saved'])) {
        echo '<div class="updated"><p>Changement sauvegardé</p></div>';
    }

    echo '<div class="wrap"><form method="post">'
        /* . keen_header_uploader_field($option_name, get_option($option_name)) */
        . keen_image_uploader_field($option_name, get_option($option_name))
        . '<p class="submit">
    <input name="save" type="submit" class="button-primary" value="Enregistrer" />
    <input type="hidden" name="action" value="save" />
    </p></form></div>';
}
