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
    <div class="keenetnoa_admin">
        <h1>Options Thème Keenetnoa</h1>

        <table class="table table-bordered">
            <form action="" method="POST">
                <tr class="">
                    <th class="" scope="row">
                        <label>Logo du site</label>
                    </th>
                    <input type="hidden" id="logo" name="options[logo]" value="<?php get_option('logo', ''); ?>" size="75">
                    <td>
                        <a href="#" class="button keencustom">Choisir une image</a>
                    </td>
                    <td>
                        <img id="logo" src="<?= get_option('logo', ''); ?>" width="250" class="keencustom">
                    </td>
                </tr>
                <tr>
                    <th class="" scope="row">
                        <label>Bannière du site</label>
                    </th>
                    <input type="hidden" id="banniere" name="options[banniere]" value="<?php get_option('banniere', ''); ?>" size="75">
                    <td>
                        <a href="#" class="button keencustomban">Choisir une image</a>
                    </td>
                    <td>
                        <img id="Keenban" src="<?= get_option('banniere', ''); ?>" width="250" class="keencustomban">
                    </td>
                </tr>
            </form>
        </table>
        <input type="submit" name="panel_update" class="button-primary autowidth" value="Sauvegarder">

    </div>


<?php
}
