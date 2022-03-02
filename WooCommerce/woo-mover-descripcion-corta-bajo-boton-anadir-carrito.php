<?php
/**
 * @snippet       WooCoomerce Snippet - mover descripción corta debajo del botón Añadir al carrito en las páginas de producto
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/woocommerce-snippet-mover-la-descripcion-corta-del-producto-debajo-del-boton-de-anadir-al-carrito-en-las-paginas-de-producto
 */
 
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 10 );