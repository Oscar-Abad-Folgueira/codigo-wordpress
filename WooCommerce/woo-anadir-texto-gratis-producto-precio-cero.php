<?php
/**
 * @snippet       WooCommerce Snippet: Añadir texto gratis si el producto tiene precio cero (0).
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/anadir-el-texto-gratis-en-los-productos-con-precio-cero-en-woocommerce
 */
 
add_filter( 'woocommerce_get_price_html', 'mensaje_precio_cero' );
function mensaje_precio_cero($price) {
 if(!empty($price)){
   $mensaje = ' ¡¡¡Gratis!!!!';
   return $price . $mensaje;
 }
}