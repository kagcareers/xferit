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
