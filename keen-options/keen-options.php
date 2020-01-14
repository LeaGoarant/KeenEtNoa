<?php

// Lancement des scripts
function keen_options_enqueue_scripts()
{
    wp_register_script('keen-upload', get_template_directory_uri() . '/js/keen-upload.js', array('jquery', 'media-upload', 'thickbox'));

    if ('appearance_page_keen-settings' == get_current_screen()->id) {


    wp_enqueue_script('thickbox');
    wp_enqueue_style('thickbox');

    wp_enqueue_script('media-upload');
    wp_enqueue_script('keen-upload', get_template_directory_uri() . '/js/keen-upload.js', array('jquery', 'media-upload', 'thickbox'));
    } 
}
add_action('admin_enqueue_scripts', 'keen_options_enqueue_scripts');




function keen_get_default_options()
{
    $options = array(
        'logo' => ''
    );
    return $options;
}

// Créer l'option dans la BDD si elle n'existe pas.
function keen_options_init()
{
    $keen_options = get_option('theme_keen_options');

    // Nos options sont-elles sauvegardées dans la DB ?
    if (false === $keen_options) {
        // Sinon, nous allons sauvegarder nos options par défaut
        $keen_options = keen_get_default_options();
        add_option('theme_keen_options', $keen_options);
    }

    // Dans le cas contraire, nous n'avons pas besoin de mettre à jour la DB
}
//Initialiser les options du thème
add_action('after_setup_theme', 'keen_options_init');




// Ajouter le lien "Options Thème" au menu "Apparence
function keen_menu_options()
{
    // add_theme_page( $page_title, $menu_title, $capability, $menu_slug, $function);
    add_theme_page('keen Options', 'keen Options', 'edit_theme_options', 'keen-settings', 'keen_admin_options_page');
}

// Charger la page des options d'administration
add_action('admin_menu', 'keen_menu_options');

// Création de la page
function keen_admin_options_page()
{
?>
    <!-- 'wrap','submit','icon32','button-primary' and 'button-secondary' are classes
        for a good WP Admin Panel viewing and are predefined by WP CSS -->

    <div class="wrap">

        <div id="icon-themes" class="icon32"><br /></div>

        <h2><?php _e('keen Options', 'keen'); ?></h2>

        <!-- If we have any error by submiting the form, they will appear here -->
        <?php settings_errors('keen-settings-errors'); ?>

        <form id="form-keen-options" action="options.php" method="post" enctype="multipart/form-data">

            <?php
            settings_fields('theme_keen_options');
            do_settings_sections('keen');
            ?>

            <p class="submit">
                <input name="theme_keen_options[submit]" id="submit_options_form" type="submit" class="button-primary" value="<?php esc_attr_e('Sauvegarder', 'keen'); ?>" />
                <input name="theme_keen_options[reset]" type="submit" class="button-secondary" value="<?php esc_attr_e('Reinitialiser', 'keen'); ?>" />
            </p>

        </form>

    </div>
<?php
}

// Créer bouton Télécharger.
function keen_options_settings_init()
{
    register_setting('theme_keen_options', 'theme_keen_options', 'keen_options_validate');
    // Ajouter un formulaire pour ajouter le logo
    add_settings_section('keen_settings_header', __('Options du logo', 'keen'), 'keen_settings_header_text', 'keen');
    // Ajouter un uploader pour l'image
    add_settings_field('keen_setting_logo',  __('Logo', 'keen'), 'keen_setting_logo', 'keen', 'keen_settings_header');
    // Ajout de la prévisualisation de l'image.
    add_settings_field('keen_setting_logo_preview',  __('Logo Preview', 'keen'), 'keen_setting_logo_preview', 'keen', 'keen_settings_header');
}
add_action('admin_init', 'keen_options_settings_init');

function keen_settings_header_text()
{
?>
    <p><?php _e('Paramétrer le logo du site', 'keen'); ?></p>
<?php
}

// Form DL HTML
function keen_setting_logo() {
    $wptuts_options = get_option( 'theme_wptuts_options' );
    ?>
        <input type="hidden" id="logo_url" name="theme_wptuts_options[logo]" value="<?php echo esc_url( $wptuts_options['logo'] ); ?>" />
        <input id="upload_logo_button" type="button" class="button" value="<?php _e( 'Upload Logo', 'wptuts' ); ?>" />
    <?php
}



// Validation / Reset
function keen_options_validate($input)
{
    $default_options = keen_get_default_options();
    $valid_input = $default_options;

    $submit = !empty($input['submit']) ? true : false;
    $reset = !empty($input['reset']) ? true : false;

    if ($submit)
        $valid_input['logo'] = $input['logo'];
    elseif ($reset)
        $valid_input['logo'] = $default_options['logo'];

    return $valid_input;
}



// Remplacer le bouton 'Insert into Post' à l'intérieur de la modale Thickbox
function keen_options_setup()
{
    global $pagenow;

    if ('media-upload.php' == $pagenow || 'async-upload.php' == $pagenow) {
        add_filter('gettext', 'replace_thickbox_text', 1, 3);
    }
}
add_action('admin_init', 'keen_options_setup');

function replace_thickbox_text($translated_text, $text, $domain)
{
    if ('Insert into Post' == $text) {
        $referer = strpos(wp_get_referer(), 'keen-settings');
        if ($referer != '') {
            return __('I want this to be my logo!', 'keen');
        }
    }
    return $translated_text;
}

// Aperçu du logo	

function keen_setting_logo_preview()
{
    $keen_options = get_option('theme_keen_options');  ?>
    <div id="upload_logo_preview" style="min-height: 100px;">
        <img style="max-width:100%;" src="<?php echo esc_url($keen_options['logo']); ?>" />
    </div>
<?php
}
