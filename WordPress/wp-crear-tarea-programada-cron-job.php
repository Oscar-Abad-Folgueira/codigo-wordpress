<?php
/**
 * @snippet       WordPress Snippet: Como crear tareas programadas en WordPress
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/como-crear-tareas-programadas-en-wordpress--cron-jobs/
 */

add_action('cron_borrar_todos_posts', 'oaf_borrar_todos_posts');

if (! wp_next_scheduled('cron_borrar_todos_posts')) {
	wp_schedule_event((strtotime('24:00:00')), 'daily', 'cron_borrar_todos_posts');
}

function oaf_borrar_todos_posts(){
	$todos_posts = get_posts( array('post_type'=>'post','numberposts'=>-1) );
	foreach ($todos_posts as $unpost) {
		wp_delete_post( $todos_posts->ID, true );
	}
}