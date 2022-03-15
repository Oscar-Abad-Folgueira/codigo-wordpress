<?php
/**
 * @snippet       WordPress Snippet: Borrar y crear de nuevo las rewrite rules
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://oscarabadfolgueira.com/
 */
 
add_action('init', function() {
    flush_rewrite_rules();
});