<?php
/**
 * @snippet       WordPress Snippet: Borrar todos los posts con código
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/como-crear-tareas-programadas-en-wordpress--cron-jobs/
 */

function oaf_borrar_todos_posts(){
	$todos_posts = get_posts( array('post_type'=>'post','numberposts'=>-1) );
	foreach ($todos_posts as $unpost) {
		wp_delete_post( $todos_posts->ID, true );
	}
}