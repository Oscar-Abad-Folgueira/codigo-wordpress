<?php
/**
 * @snippet       WooCommerce Snippet: No mostrar el peso y las dimensiones de los productos
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/
 */
 
 add_filter( 'wc_product_enable_dimensions_display', '__return_false' );