<?php
/**
 * @snippet       WooCommerce Snippet: Forzar el uso de cupones
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/exigir-el-uso-de-cupones-en-woocommerce/
 */
 
add_action( 'woocommerce_check_cart_items', 'mandatory_coupon_code' );
function mandatory_coupon_code() {

    $applied_coupons = WC()->cart->get_applied_coupons();
    if( is_array($applied_coupons) && sizeof($applied_coupons) == 0 ) {
        $message = __( 'Por favor, introduce un cupón.', 'woocommerce' );
        wc_add_notice( $message, 'error' );
    }
}