<?php
/**
 * @snippet       WooCommerce Snippet: Permitir comprar productos de una sola categoría a la vez
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/woocommerce-snippet-que-solo-se-puedan-comprar-productos-de-una-categoria-a-la-vez/
 */

function is_product_the_same_cat($valid, $product_id, $quantity) 
{
    global $woocommerce; 
    if($woocommerce->cart->cart_contents_count == 0) { 
        return true; 
    } 
    foreach ( $woocommerce->cart->get_cart() as $cart_item_key => $values ) { 
        $_product = $values['data']; 
        $terms = get_the_terms( $_product->id, 'product_cat' ); 
        $target_terms = get_the_terms( $product_id, 'product_cat' ); 
        foreach ($terms as $term) { 
            $cat_ids[] = $term->term_id; 
        } 
        foreach ($target_terms as $term) { 
            $target_cat_ids[] = $term->term_id; 
        } 
    } 
    $same_cat = array_intersect($cat_ids, $target_cat_ids); 
    if(count($same_cat) > 0) return $valid; 
    else {
		wc_add_notice( 'No puedes comprar productos de restaurantes diferentes, Tienes que hacer un nuevo pedido', 'error' );
		return false;
    } 
}
add_filter( 'woocommerce_add_to_cart_validation', 'is_product_the_same_cat',10,3);