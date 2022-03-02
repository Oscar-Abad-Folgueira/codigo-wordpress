<?php
/**
 * @snippet       WordPress Snippet: WP_Query - Excluir el post actual
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/wp_query-excluir-el-post-actual/
 */


  $args = array (
      'post_type'              => array( 'evento' ),
      'posts_per_page'         => '3',
      'post__not_in'           => array(get_the_ID()),  // Excluir el post actual
  );
  
  $query = new WP_Query( $args );
  
  if ( $query->have_posts() ) : 
      while ( $query->have_posts() ) : $query->the_post();
          // código para el tratamiento de los datos en el loop
          the_title();  // Por ejemplo...
      endwhile;
  endif;
  
  wp_reset_postdata();