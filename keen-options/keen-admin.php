<?php
function misha_include_myuploadscript()
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

add_action('admin_enqueue_scripts', 'misha_include_myuploadscript');


/*
 * @param string $name Name of option or name of post custom field.
 * @param string $value Optional Attachment ID
 * @return string HTML of the Upload Button
 */
function misha_image_uploader_field($name, $value = '')
{
    $image = ' button">Upload image';
    $image_size = 'full'; // it would be better to use thumbnail size here (150x150 or so)
    $display = 'none'; // display state ot the "Remove image" button


    if ($image_attributes = wp_get_attachment_image_src($value, $image_size)) {

        // $image_attributes[0] - image URL
        // $image_attributes[1] - image width
        // $image_attributes[2] - image height

        $image = '"><img src="' . $image_attributes[0] . '" style="max-width:95%;display:block;" />';
        $display = 'inline-block';
    }
    $image_attributes = wp_get_attachment_image_src( $attachment_id = 8 );
    if ( $image_attributes ) : ?>
        <img src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>" />
    <?php endif; ?>
    <?php
    return '
	<div>
        <a href="#" class="misha_upload_image_button' . $image . '</a>
		<input type="hidden" name="' . $name . '" id="' . $name . '" value="' . esc_attr($value) . '" />
        <a href="#" class="misha_remove_image_button" style="display:inline-block;display:' . $display . '">Remove image</a>
        

    </div>';
    

}

add_action('admin_menu', 'misha_add_options_page');

function misha_add_options_page()
{
    $page_slug = 'uplsettings';
    $option_name = 'header_img';

    if (isset($_GET['page']) && $_GET['page'] == $page_slug) {
        if (isset($_REQUEST['action']) && 'save' == $_REQUEST['action']) {
            update_option($option_name, sanitize_text_field($_REQUEST[$option_name]));
            header('Location: ' . site_url() . '/wp-admin/options-general.php?page=' . $page_slug . '&saved=true');
            die;
        }
    }
    add_submenu_page('options-general.php', 'More settings', 'More settings (title)', 'edit_posts', $page_slug, 'misha_print_options_page');
}

function misha_print_options_page()
{

    $option_name = 'header_img';

    if (isset($_REQUEST['saved'])) {
        echo '<div class="updated"><p>Saved.</p></div>';
    }
    echo '<div class="wrap"><form method="post">'
        . misha_image_uploader_field($option_name, get_option($option_name))
        . '<p class="submit">
		<input name="save" type="submit" class="button-primary" value="Save changes" />
		<input type="hidden" name="action" value="save" />
        </p></form></div>';

}