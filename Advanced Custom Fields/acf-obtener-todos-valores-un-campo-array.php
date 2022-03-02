<?php
/**
 * @snippet       Advanced Custom Fields: Obtener todos los valores de un campo
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://oscarabadfolgueira.com/advanced-custom-fields-obtener-todos-los-valores-de-un-campo
 */

function oaf_cpt_acf_fields_to_array() {
	
	$lista_ids_nombres_empresas = array();  // array que guardará la lista de ids y empresas

	// Argumentos para la query
	$empresas_query_args = array(
		'post_type'      => 'empresa',  // cpt empresa
		'posts_per_page' => -1,					// todos
		'post_status'    => 'publish',  // posts publicados
	);

	$empresas_query = new WP_Query($empresas_query_args);

	if ( $empresas_query->have_posts() ) {
		while ($empresas_query->have_posts() ){
			$empresas_query->the_post();
		
			$id_empresa = get_field( 'id_empresa' );
			$nombre_empesa = get_field( 'nombre_empresa' );

			$lista_ids_nombres_empresas[$id_empresa] = $nombre_empesa;  // Añadir al array
		}
	}

	wp_reset_postdata();

	return $lista_ids_nombres_empresas;
}