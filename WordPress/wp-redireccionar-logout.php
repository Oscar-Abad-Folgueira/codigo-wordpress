<?php
/**
 * @snippet       WordPress Snippet: Redireccionar tras salir
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://oscarabadfolgueira.com/
 */

/* Redireccionar al logout */
add_action('wp_logout','oaf_redirect_after_logout');
function oaf_redirect_after_logout(){
	$inicio = home_url();
	wp_redirect( $inicio );
	exit();
}