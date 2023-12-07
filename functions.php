<?php
/*
 *  GLOBAL VARIABLES
 */
define('THEME_DIR', get_stylesheet_directory());
define('THEME_URL', get_stylesheet_directory_uri());
/*
 *  INCLUDED FILES
 */
$file_includes = [
    'inc/theme-assets.php',                 // Style and JS
    'inc/theme-setup.php',                  // General theme setting
    'inc/acf-options.php',                  // ACF Option page
    'inc/duplicate.php',              // Dupplicate Post 
    'inc/cpt-product.php',              // CPT Products            
];
foreach ($file_includes as $file) {
    if (!$filePath = locate_template($file)) {
        trigger_error(sprintf(__('Missing included file'), $file), E_USER_ERROR);
    }
    require_once $filePath;
}
unset($file, $filePath);
// //404
// add_action('wp', 'redirect_404_to_homepage', 1);
// function redirect_404_to_homepage()
// {
//     global $wp_query;
//     if ($wp_query->is_404) {
//         wp_redirect(get_bloginfo('url') . '/loi-404', 301);
//         exit;
//     }
// }
/** * Completely Remove jQuery From WordPress */
function my_init() {
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', false);
    }
}
add_action('init', 'my_init');