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
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
    <link rel="profile" href="http://gmpg.org/xfn/11">
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'KeenEtNoa' ); ?></a>

        <header id="masthead" class="site-header">
        <div class="container header-container">
			<div class="navbar-header">
				<div class="site-branding">
					<?php keen_et_noa_brand(); ?>
				</div><!-- .site-branding -->
             </div>

            <nav id="site-navigation" class="main-navigation site-navigation">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'depth'          => 2,
                    )
                );
                    ?>
            </nav><!-- #site-navigation -->
        </div>

        </header><!--masthead-->

        <?php keen_et_noa_categories_menu(); ?>

		<div id="content" class="site-content">

