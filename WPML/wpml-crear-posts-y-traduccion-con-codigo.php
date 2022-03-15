<?php
/**
 * @snippet       WordPress Snippet (WPML): Crear posts y traducciones en WordPress para WPML con código
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://oscarabadfolgueira.com/crear-posts-y-traducciones-en-wordpress-para-wpml-con-codigo
 */
 
function nuevos_posts_para_publicar() {
	$output = array(); // array que contendrá los posts para publicar

	// Crear el post original en español
	$post_original_es = array(
			'post_title'    => 'Título del post en español',
			'post_content'  => 'Contenido del post en español y bla, bla, blac...',
			'post_status'   => 'publish',
	);

	// Create translation post object
	$post_traducido_en = array(
			'post_title'    => 'My post title - English',
			'post_content'  => 'My post content in english and ble, ble, ble...',
			'post_status'   => 'publish',
	);

	// Create translation post object
	$post_traducido_eu = array(
		'post_title'    => 'Nire mezuaren izenburua - Euskara',
		'post_content'  => 'Nire mezuaren edukia euzkaraz eta bleu, bleu, bleu...',
		'post_status'   => 'publish',
	);

	// Insertar los 3 posts en la base de datos con wp_insert_post();
	$post_original_es_id = wp_insert_post( $post_original_es );
	$post_traducido_en_id = wp_insert_post( $post_traducido_en );
	$post_traducido_eu_id = wp_insert_post( $post_traducido_eu );

	return $output = array(
			'original' => $post_original_es_id,
			'traduccion_en' => $post_traducido_en_id,
			'traduccion_eu' => $post_traducido_eu_id
	);
}


function conectar_traducciones() {
	$nuevos_posts_ids = nuevos_posts_para_publicar();  // obtenemos los ids de los posts

	if ( $nuevos_posts_ids) {

			$wpml_element_type = apply_filters( 'wpml_element_type', 'post' ); // establecer el tipo de post
			 
			// Obtener información del idioma orginal
			$get_language_args = array('element_id' => $nuevos_posts_ids['original'], 'element_type' => 'post' );
			$original_post_language_info = apply_filters( 'wpml_element_language_details', null, $get_language_args );
			 
			// establecer los argumentos de la traducción en inglés
			$set_language_args_en = array(
					'element_id'    => $nuevos_posts_ids['traduccion_en'],
					'element_type'  => $wpml_element_type,
					'trid'   => $original_post_language_info->trid,
					'language_code'   => 'en',
					'source_language_code' => $original_post_language_info->language_code
			);

			// establecer los argumentos de la traducción en Euskera
			$set_language_args_eu = array(
				'element_id'    => $nuevos_posts_ids['traduccion_eu'],
				'element_type'  => $wpml_element_type,
				'trid'   => $original_post_language_info->trid,
				'language_code'   => 'eu',
				'source_language_code' => $original_post_language_info->language_code
			);

			do_action( 'wpml_set_element_language_details', $set_language_args_en );
			do_action( 'wpml_set_element_language_details', $set_language_args_eu );
	}
}

/*  Crear un cron job  para crear los posts y traducciones */
add_action('cron_crear_posts_wpml', 'conectar_traducciones');

if (! wp_next_scheduled('cron_crear_posts_wpml')) {
wp_schedule_event((strtotime('24:00:00')), 'daily', 'cron_crear_posts_wpml');
}