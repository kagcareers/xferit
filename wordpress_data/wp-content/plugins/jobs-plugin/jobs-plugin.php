<?php
/**
 * Plugin Name: Job Listings Plugin
 * Description: A plugin to post job openings.
 * Version: 1.0
 * Author: Kaizen Automotive
 */


// create custom post type: job-opening

function job_openings_post_type() {
    register_post_type('opening', [
        'labels' => [
            'name' => 'Job Openings',
            'singular_name' => 'Job Opening'
        ],
        'public' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor'],
        'rewrite' => ['slug' => 'openings'], // Set a custom slug
        'menu_icon' => 'dashicons-businessman',
        'show_in_rest' => true,  // This enables REST API support
        'rest_base' => 'openings', // Optional: Define a custom REST API endpoint slug

    ]);
}

add_action('init', 'job_openings_post_type');


require_once (__DIR__.'/locations.php');
require_once (__DIR__.'/locations-wp.php');
require_once (__DIR__.'/departments.php');
require_once (__DIR__.'/departments-wp.php');
