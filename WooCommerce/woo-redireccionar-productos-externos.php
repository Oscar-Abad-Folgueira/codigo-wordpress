<?php
/**
 * @snippet       WooCommerce Snippet: Redireccionar productos externos de WooCommerce a la url del producto y abrir en otra pestaña.
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/redireccionar-directamente-los-productos-externos-de-woocommerce-y-abrir-en-otra-pestana-del-navegador/
 */

add_action( 'woocommerce_before_shop_loop_item', 'mycode_woocommerce_template_loop_product_link_open', 20 );
function mycode_woocommerce_template_loop_product_link_open() {
  global $product;
  if( $product->is_type('external') ) {
    echo '<a rel="nofollow" href="' . esc_url( $product->add_to_cart_url() ) . 
          '" class="woocommerce-LoopProduct-link" data-quantity="'.esc_attr( isset( $quantity ) ? $quantity : 1 ).
          '" data-product_id="'.esc_attr( $product->id ).'" data-product_sku="'.esc_attr( $product->get_sku() ).
          '" target="_blank">';

  } else {

  }
}