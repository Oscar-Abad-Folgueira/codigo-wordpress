<?php
/**
 * @snippet       Ocultar el menú de Advanced Custom Fields a todos los usuarios 
 * @author        Oscar Abad Folgueira
 * @author_url    https://www.oscarabadfolgueira.com
 * @snippet_url   https://oscarabadfolgueira.com/ocultar-el-menu-de-advanced-custom-fields-del-panel-de-administracion-de-wordpress
 */
 
add_filter('acf/settings/show_admin', '__return_false');