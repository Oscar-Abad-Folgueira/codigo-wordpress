<?php
/**
 * @snippet       WordPress snippet: Establecer un mínimo de caracteres al comentar
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/wordpress-snippet-establecer-un-minimo-de-caracteres-al-comentar/
 */
 
add_filter( 'preprocess_comment', 'set_minimal_length_for_comments' );

function set_minimal_length_for_comments( $comment ) {
    $min_length = 15;

    if ( strlen( $comment['comment_content'] ) < $min_length ){
        wp_die( 'Los comentarios deben ser por lo menos de ' . $min_length . ' caracteres.' );
    }
    return $comment;
}