<?php
/**
 * @snippet       WordPress Snippet: Restringir parte del contenido 2
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/crear-shortcode-restringir-partes-del-contenido-parte-2/
 */

function oaf_restrict_partial_content_shortcode( $atts, $content = null ) {
	if ( is_user_logged_in() && !is_null( $content ) && !is_feed() ) {
		return $content;
	} else {
		return __( 'Upps! Este contenido sólo está disponible para usuarios registrados.', 'oaf_rpcs' );
	}
}

add_shortcode ('restrict_pcs', 'oaf_restrict_partial_content_shortcode' );