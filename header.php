<?php

/** The header is for our theme
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage KeenEtNoa
 * @since 1.0.0
 */

?>

<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="steelsheet">
    <title><?php echo get_bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div id="page" class="site">

        <!-- .site-branding -->
        <h1 class="blog-title"><a href="<?php echo get_bloginfo('wpurl'); ?>"> <?php echo get_bloginfo('name'); ?></a></h1>
        <p class="lead blog_description"><?php echo get_bloginfo('description'); ?></p>

        <header id="masthead" class="site-header">
            <div class="container header-container">
                <div class="navbar-header">
                    <div class="site-branding">
                    </div>
                </div>

                <!-- #site-navigation -->
                <nav id="site-navigation" class="main-navigation site-navigation">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_id' => 'primary-menu',
                        'depth' => 2,
                    ));
                    ?>
                </nav>
            </div>

        </header>
        <!--masthead-->

        <div id="content" class="site-content">