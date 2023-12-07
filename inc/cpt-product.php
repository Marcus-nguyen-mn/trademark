<?php
function post_type_prod(){
    $label = array(
        'name' => __('Products'),
        'singular_name' => __('Products'),

    );
    $args = array(
        'labels' => $label,
        'description' => 'Products',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail',
            'comments',
            'trackbacks',
            'revisions',
            'custom-fields'
        ),
        'taxonomies' => array('post_tag'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 20,
        'menu_icon' => 'dashicons-images-alt2',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('prod', $args);
}
add_action('init', 'post_type_prod');

function taxonomy_prod() {
	$labels = array(
		'name' => 'Category Products',
		'singular' => 'Category Products',
		'menu_name' => 'Category Products'
	);
	$args = array(
		'labels'                   => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy('cat-product', 'prod', $args);


}
add_action( 'init', 'taxonomy_prod', 0 );