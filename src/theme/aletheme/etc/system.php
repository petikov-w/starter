<?php

/**
 * Initialize Theme Support Features 
 */
function ale_init_theme_support() {
	if (function_exists('ale_get_images_sizes')) {
		foreach (ale_get_images_sizes() as $post_type => $sizes) {
			foreach ($sizes as $config) {
				ale_add_image_size($post_type, $config);
			}
		}
	}
}
add_action('init', 'ale_init_theme_support');

function ale_after_setup_theme() {
	// add editor style for admin editor
	add_editor_style();

	// add post thumbnails support
	add_theme_support('post-thumbnails');
	
	// add needed post formats to theme
	if (function_exists('ale_get_post_formats')) {
		add_theme_support('post-formats', ale_get_post_formats());
	}
}
add_action('after_setup_theme', 'ale_after_setup_theme');

/**
 * Initialize Theme Navigation 
 */
function ale_init_navigation() {
	if (function_exists('register_nav_menus')) {

		register_nav_menus(array(
			'header_menu'	=> esc_html__('Header Menu', 'alekids'),
			'footer_menu'	=> esc_html__('Footer Menu', 'alekids'),
		));
		
	}
}
add_action('init', 'ale_init_navigation');

function alekids_archive_menu_filter($items, $menu, $args) {
    foreach ($items as &$item) {
        if ($item->object != 'ale-archive')
            continue;
        $item->url = get_post_type_archive_link($item->type);

        /* set current */
        if (get_query_var('post_type') == $item->type) {
            $item->classes [] = 'current-menu-item';
            $item->current = true;
        }
    }

    return $items;
}
add_filter( 'wp_get_nav_menu_items', 'alekids_archive_menu_filter', 10, 3 );



/**
 * Add custom image size wrapper
 * @param string $post_type
 * @param array $config 
 */
function ale_add_image_size($post_type, $config) {
	add_image_size($config['name'], $config['width'], $config['height'], $config['crop']);
}



// THIS INCLUDES THE THUMBNAIL IN OUR RSS FEED
function ale_insert_feed_image($content) {
global $post;

if ( has_post_thumbnail( $post->ID ) ){
	$content = ' ' . get_the_post_thumbnail( $post->ID, 'medium' ) . " " . $content;
}
return $content;
}

add_filter('the_excerpt_rss', 'ale_insert_feed_image');
add_filter('the_content_rss', 'ale_insert_feed_image');