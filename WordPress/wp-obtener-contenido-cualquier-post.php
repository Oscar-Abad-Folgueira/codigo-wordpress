<?php
/**
 * @snippet       Obtener el contenido de cualquier post en WordPress para mostrarlo por código
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/obtener-el-contenido-de-cualquier-post-en-wordpress/
 */

$page_shortcodes_postid = get_post( 2607 ); // obtenemos el post con ese id

$page_shortcodes_content = $page_shortcodes_postid->post_content;  // obtenemos el contenido de ese post
echo $page_shortcodes_content;