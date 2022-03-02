<?php
/**
 * @snippet       WooCoomerce Snippet - Crear un campo personalizao y que se muestre en varios sitios.
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/
 */
 
$args = array(
    'post_type'  => array('product','product_variation'),
    'meta_key'   => '_sku',
    'post_status' => array('publish','draft'), 
    'meta_query' => array(
        array(
            'key'     => '_sku',
            'compare' => 'EXISTS',
        ),
    ),
);
       
$products = new WP_Query($args);