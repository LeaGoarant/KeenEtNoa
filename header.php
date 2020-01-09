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
    <title><?php echo get_bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div id="page" class="site">

<<<<<<< HEAD
=======
        <!-- .site-branding -->
        <a href="<?php echo get_bloginfo('wpurl'); ?>">
            <h1 class="blog-title"> <?php echo get_bloginfo('name'); ?></h1>
        </a>
        <p class="lead blog_description"><?php echo get_bloginfo('description'); ?></p>

>>>>>>> d485ca0a4537b85d68de20d3f1947edcc3adaa09
        <header id="masthead" class="site-header">
            <div class="container header-container">
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