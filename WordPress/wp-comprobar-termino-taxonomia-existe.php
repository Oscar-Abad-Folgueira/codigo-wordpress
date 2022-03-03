<?php
/**
 * @snippet       WordPress Snippet: Comprobar si el post tiene asignado el término "action" de la taxonomía "hook-type"
 *                para asignar una clase css u otra.
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://www.oscarabadfolgueira.com/comprobar-si-un-post-tiene-asignado-un-termino-de-una-taxonomia-en-wordpress/ 
 */

$hook_css_class = '';
if (has_term( 'action', 'hook-type' )) {
  $hook_css_class = "is-action-hook";
} else {
  $hook_css_class = "is-filter-hook";
};