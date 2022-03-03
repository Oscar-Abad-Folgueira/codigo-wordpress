<?php
/**
 * @snippet       Modificar el número de posts por página en WordPress
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/woocommerce-snippet-anadir-texto-o-html-en-la-parte-superior-del-checkout-finalizar-compra/
 */
 
 function number_of_posts_per_page( $number ) {
    if ( is_home() ) {
		$number->set( 'posts_per_page', 15 );
		} elseif ( is_category() ) {
			$number->set( 'posts_per_page', 10 );
		} elseif ( is_tag() ) {
			$number->set( 'posts_per_page', 12 );
		} elseif ( is_author() ) {
			$number->set( 'posts_per_page', 10 );
		} elseif ( is_search() ) {
			$number->set( 'posts_per_page', 15 );
		} elseif ( is_archive() ) {
			$number->set( 'posts_per_page', 15 );
		}
	
} // End of number_of_posts_per_page()  function

// Action for set the number of posts per page    
add_action('pre_get_posts', 'number_of_posts_per_page');