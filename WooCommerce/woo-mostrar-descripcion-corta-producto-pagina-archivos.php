<?php
/**
 * @snippet       WooCommerce Snippet: Mostrar la descripción corta de los productos en la página de inicio y en las páginas de archivo de WooCommerce
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/mostrar-la-descripcion-de-los-productos-en-la-tienda-y-en-las-paginas-de-archivo-de-woocommerce/
 */

function short_desc_on_product_archives() {
     
  the_excerpt();   
}
add_action( 'woocommerce_after_shop_loop_item_title', 'short_desc_on_product_archives', 40 );