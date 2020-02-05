<?php

/**
 * @snippet       Truncate Short Description @ WooCommerce Single
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Rodolfo Melogli
 * @compatible    WooCommerce 3.7
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */

add_action('wp_footer', 'bbloomer_woocommerce_short_description_truncate_read_more');

function bbloomer_woocommerce_short_description_truncate_read_more()
{
    if (!is_product()) return;
?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {

            var show_char = 800;
            var content = $(".woocommerce-product-details__short-description").html();

            if (content.length > show_char) {
                var a = content.substr(0, show_char);
                var b = content.substr(show_char - content.length);
                var html = a + '<span class="truncated">' + '<a style="color: #d3b28b;" href="" class="read-more">... Lire la suite</a></span><span class="truncated" style="display:none">' + b + '</span>';
                $(".woocommerce-product-details__short-description").html(html);
            }

            $(".read-more").click(function(e) {
                e.preventDefault();
                $(".woocommerce-product-details__short-description .truncated").toggle();
            });

        });
    </script>
<?php
}
