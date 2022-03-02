<?php
/**
 * @snippet       WordPress Snippet: Crear post con código 2
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/crear-post-wordpress-codigo/
 */
 
function oaf_post_exists_by_slug( $post_slug ) {
    $args_posts = array(
        'post_type'      => 'posts',
        'post_status'    => 'any',
        'name'           => $post_slug,
        'posts_per_page' => 1,
    );
    $loop_posts = new WP_Query( $args_posts );

    if ( ! $loop_posts->have_posts() ) {
        return false;

    } else {
        $loop_posts->the_post();
        return $loop_posts->post->ID;
    }
}