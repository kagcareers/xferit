<?php
/**
 * Kaizen Careers functions and definitions
 * @package Kaizen Careers
 */

/**
 * Register pattern categories.
 */

if ( ! function_exists( 'kaizencareers_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @return void
	 */
	function kaizencareers_pattern_categories() {

		register_block_pattern_category(
			'kaizencareers_page',
			array(
				'label'       => _x( 'Pages', 'Block pattern category', 'kaizencareers' ),
				'description' => __( 'A collection of full page layouts.', 'kaizencareers' ),
			)
		);
	}
endif;

add_action( 'init', 'kaizencareers_pattern_categories' );


/**
 * Add required pages
 */
 function my_theme_setup_pages() {
    $pages = array(
        'Current Openings' => 'current-openings',
        'News' => 'news',
        'Our Locations' => 'locations',
    );

    foreach ($pages as $page_title => $template) {
        // Check if the page already exists
        if (!get_page_by_title($page_title)) {
            // Create the page
            $page_id = wp_insert_post(array(
                'post_title' => $page_title,
                'post_content' => '',
                'post_status' => 'publish',
                'post_type' => 'page',
                'page_template' => $template,
            ));
        }
    }

    if(!get_page_by_title('Data')) {
        wp_insert_post(array(
            'post_title'=> 'Data',
            'post_content' => 'do not edit this page',
            'post_status' => 'publish',
            'post_type' => 'page',
            'page_template' => 'data'
        ));
    }
}
add_action('after_switch_theme', 'my_theme_setup_pages');

function exclude_pages_from_menu_by_title($items, $args) {
    $exclude_titles = array('Data');

    foreach ($items as $key => $item) {
        if (in_array($item->title, $exclude_titles)) {
            unset($items[$key]);
        }
    }
    var_dump($items);
    die();
    return $items;
}
add_filter('wp_nav_menu_objects', 'exclude_pages_from_menu_by_title', 10, 2);