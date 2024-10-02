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
    ]);
}

add_action('init', 'job_openings_post_type');



require_once (__DIR__.'/locations.php');
require_once (__DIR__.'/locations-wp.php');




////////// display the list of job openings
function display_job_openings() {
    $location_filter = isset($_GET['job_location_filter']) ? sanitize_text_field($_GET['job_location_filter']) : '';

    $args = [
        'post_type' => 'opening',
        'posts_per_page' => -1,
    ];

    if ($location_filter) {
        $args['meta_query'] = [
            [
                'key' => 'job_location',
                'value' => $location_filter,
                'compare' => 'LIKE',
            ],
        ];
    }

    $query = new WP_Query($args);

    ob_start();
    if ($query->have_posts()) {
        echo '<table>';
        while ($query->have_posts()) {
            $query->the_post();
            $location = get_post_meta(get_the_ID(), 'job_location', true);
            echo '<tr>'
            . '<td>' . get_the_title() . '</td>'
            . '<td>' . esc_html($location) . '</td>'
            . '<td>' . get_the_date() . '</td>'
            .'</tr>';
        }
        echo '</table>';
    } else {
        echo '<p>No job openings found.</p>';
    }

    wp_reset_postdata();
    return ob_get_clean();
}

add_shortcode('job_openings', 'display_job_openings');

