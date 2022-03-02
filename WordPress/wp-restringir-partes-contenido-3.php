<?php
/**
 * @snippet       WordPress Snippet: Restringir parte del contenido 3
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/crear-shortcode-restringir-partes-del-contenido-parte-2/
 */
 
 if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function oaf_restrict_partial_content_shortcode( $atts, $content = null ) {
	if ( is_user_logged_in() && !is_null( $content ) && !is_feed() ) {
		return $content;
	} else {
	  
		return '<div style="background-color: #F5F2F2; padding: 5%;"><h4 style="color: red; text-align: center;">Upps, Este contenido sólo está disponible para usuarios registrados</h4></div>';
	}
}

add_shortcode ('restrict_pcs', 'oaf_restrict_partial_content_shortcode' );