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
require_once (__DIR__.'/departments.php');
require_once (__DIR__.'/departments-wp.php');


require_once (__DIR__.'/json-out.php');



////////// display the list of job openings
function display_job_openings() {
    $location_filter = isset($_GET['job_location_filter']) ? sanitize_text_field($_GET['job_location_filter']) : '';
    $department_filter = isset($_GET['job_department_filter']) ? sanitize_text_field($_GET['job_department_filter']) : '';

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
            [
                'key' => 'job_department',
                'value' => $department_filter,
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

//// filter job listings

function job_opening_filter_form() {

    ob_start();
    ?>
    <form method="GET" action="">
        <select name="job_location_filter">
            <option value="">All Locations</option>
            <?php foreach (all_locations() as $loc) : ?>
                <option value="<?php echo esc_attr($loc->shorthand()); ?>"><?php echo esc_html($loc->name()); ?></option>
            <?php endforeach; ?>
        </select>
        <select name="job_department_filter">
            <option value="">All Departments</option>
            <?php foreach (all_departments() as $dep) : ?>
                <option value="<?php echo esc_attr($dep->shorthand()); ?>"><?php echo esc_html($dep->name()); ?></option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="Filter">
    </form>
    <?php
    return ob_get_clean();
}

add_shortcode('job_filter_form', 'job_opening_filter_form');