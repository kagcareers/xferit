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
        'News' => 'news.html',
        'Our Locations' => 'locations.html',
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
}
add_action('after_switch_theme', 'my_theme_setup_pages');