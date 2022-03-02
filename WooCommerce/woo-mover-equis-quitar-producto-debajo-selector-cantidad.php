<?php
/**
 * @snippet       WooCoomerce Snippet - Mover equis de eliminar productos carrito debajo selector de cantidad
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/mover-las-equis-de-eliminar-productos-del-carrito-de-woocommerce-debajo-de-la-cantidad
 */
 
// primero quitamos las equis
add_filter('woocommerce_cart_item_remove_link','remove_cart_icon',10,2);

function remove_cart_icon($plink,$link){
		return '';
}

// Mostar la equis debajo del selector de cantidad de productos en carrito
add_filter('woocommerce_cart_item_quantity','change_cart_remove_link',10,3);
function change_cart_remove_link($product_quantity, $cart_item_key, $cart_item){

    //create new product object
    $_product = new WC_Product($cart_item['product_id']);//product_id

    $cart_remove_link = sprintf(
                                    '<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">x</a>',
                                    esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                                    __( 'Quitar producto', 'woocommerce' ),
                                    esc_attr( $_product->get_id() ),
                                    esc_attr( $_product->get_sku() )
                                );

    $product_quantity .= $cart_remove_link; 
    return $product_quantity;
}