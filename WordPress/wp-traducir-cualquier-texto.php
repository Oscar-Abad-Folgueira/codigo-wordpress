<?php
/**
 * @snippet       WordPress Snippet: Traducir cualquier texto en WordPress
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/como-traducir-cualquier-texto-en-wordpress/
 */
 
add_filter( 'gettext', 'traducir_cualquier_texto', 10, 3 );

function traducir_cualquier_texto( $translated, $original, $domain ) {
    if ( $original == "Out of stock" ) {
        $translated = "Sacabao!";
    }
    return $translated;
}