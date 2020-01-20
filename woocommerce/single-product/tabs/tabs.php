<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = apply_filters( 'woocommerce_product_tabs', array() );


if ( ! empty( $product_tabs ) ) : ?>

    <div class="woocommerce-tabs wc-accordion">
        <?php foreach ( $product_tabs as $key => $product_tab ) : ?>
            <div class="wc-accordion-group">
                <div class="wc-accordion-heading">
                <button class="wc-accordion-toggle collapsed
                    <?php echo esc_attr( $key ); ?>_tab" 
                    style="border-style: none; font-size: 15px; background-color: #DCDCDC; width: 90%; height: 40px; margin-bottom: 15px;" 
                    data-toggle="collapse" href="#collapse-tab-<?php echo esc_attr( $key ); ?>">
                    <?php echo wp_kses_post( apply_filters( 'woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key ))?>
                    <i class="fas fa-chevron-down"></i>
                </button>
                </div>

                <div id="collapse-tab-<?php echo esc_attr( $key ); ?>" class="wc-accordion-body collapse">
                    <div class="card card-body" style="background-color: white; border-radius: 5px;
                        margin-left: 20%; margin-right: 20%; margin-bottom: 15px;">
                        <?php
                            if ( isset( $product_tab['callback'] ) ) {
                                call_user_func( $product_tab['callback'], $key, $product_tab );
                            }
                        ?>
                    </div>
                </div>
            </div>
         <?php endforeach; ?>
         <?php do_action( 'woocommerce_product_after_tabs' ); ?>
    </div>

<?php endif; ?>