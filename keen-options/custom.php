<?php

add_action('admin_enqueue_scripts', 'keen_upload_myscript');
function keen_upload_myscript()
{
    if (is_admin()) {
        wp_enqueue_media();

        wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery'), null, false);
        wp_enqueue_style('bootstrap.min');

        wp_register_style('bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css');
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

        wp_register_style('style', get_template_directory_uri() . '/style.css');
        wp_enqueue_style('style');
    }
}


add_action('admin_menu', 'custom_theme_keenetnoa');
function custom_theme_keenetnoa()
{
    add_submenu_page('themes.php', 'More settings', 'Keen&Noa Thème', 'edit_posts', $page_slug, 'keen_manage_theme');
}


function keen_manage_theme()
{
    if (isset($_POST['panel_update'])) {
        foreach ($_POST['options'] as $name => $value) {
            update_option($name, $value);
        }
    }
?>

    <form action="" method="POST">

        <div class="row ">

            <div class="card col-12" ">
                <div class=" card-header">
                <h3 class="card-title">Options Thème Keenetnoa</h3>

            </div>
            <div class="card-body adminkeen d-flex justify-content-around">

                <label class="">Logo du site</label>
                <input class="" type="hidden" id="logo" name="options[logo]" value="<?php get_option('logo', ''); ?>" size="75">
                <a href="#" class="button keencustom adminkeen-button ">Choisir une image</a>
                <img id="logo" src="<?= get_option('logo', ''); ?>" width="250" class="keencustom   ">
            </div>
            <div class="card-footer">
                <input type="submit" name="panel_update" class="button-primary autowidth" value="Sauvegarder">
            </div>
        </div>

        <!--             <label>Bannière du site</label>

            <input type="hidden" id="banniere" name="options[banniere]" value="<?php get_option('banniere', ''); ?>" size="75">
            <a href="#" class="button keencustomban">Choisir une image</a>
            <img id="Keenban" src="<?= get_option('banniere', ''); ?>" width="250" class="keencustomban">
 -->
    </form>




<?php
}
