<?php


///////////////////

function handle_job_submission() {
    if (isset($_POST['submit_job'])) {
        $job_title = sanitize_text_field($_POST['job_title']);
        $job_description = sanitize_textarea_field($_POST['job_description']);
        $job_location = sanitize_text_field($_POST['job_location']);

        $new_job = [
            'post_title'   => $job_title,
            'post_content' => $job_description,
            'post_status'  => 'publish',
            'post_type'    => 'opening',
        ];

        $post_id = wp_insert_post($new_job);

        // Save the location as post meta
        update_post_meta($post_id, 'job_location', $job_location);
    }
}
add_action('init', 'handle_job_submission');

///////////////////

function get_unique_job_locations() {
    global $wpdb;
    $results = $wpdb->get_col("SELECT DISTINCT meta_value FROM {$wpdb->postmeta} WHERE meta_key = 'job_location'");
    return array_filter($results); // Remove any empty values
}

////////////////////////////

// Add custom columns to the job openings admin list
function job_openings_columns($columns) {
    $columns['job_location'] = 'Location';
    return $columns;
}
add_filter('manage_job_opening_posts_columns', 'job_openings_columns');

// Populate the custom column with data
function job_openings_column_content($column, $post_id) {
    if ($column === 'job_location') {
        $location = get_post_meta($post_id, 'job_location', true);
        echo esc_html($location);
    }
}
add_action('manage_job_opening_posts_custom_column', 'job_openings_column_content', 10, 2);


// Make the custom column sortable
function job_openings_sortable_columns($columns) {
    $columns['job_location'] = 'job_location';
    return $columns;
}
add_filter('manage_edit-job_opening_sortable_columns', 'job_openings_sortable_columns');

// Modify the query for sorting
function job_openings_orderby($query) {
    if (!is_admin()) {
        return;
    }
    if ($query->get('post_type') === 'opening' && $column = $query->get('orderby')) {
        if ($column === 'job_location') {
            $query->set('meta_key', 'job_location');
            $query->set('orderby', 'meta_value');
        }
    }
}
add_action('pre_get_posts', 'job_openings_orderby');


/////////////////////

require_once(__DIR__.'/manage-locations.php');

require_once(__DIR__.'/manual.php');