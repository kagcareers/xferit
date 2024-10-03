<?php


////////// add location attribute
{

    function get_unique_job_locations() {
        global $wpdb;
        $results = $wpdb->get_col("SELECT DISTINCT meta_value FROM {$wpdb->postmeta} WHERE meta_key = 'job_location'");
        return array_filter($results); // Remove any empty values
    }


    function job_opening_location_meta_box() {
        add_meta_box('job_opening_location', 'Job Location', 'job_opening_location_callback', 'opening');
    }
    add_action('add_meta_boxes', 'job_opening_location_meta_box');

    function job_opening_location_callback($post) {
        $location = get_post_meta($post->ID, 'job_location', true);
        echo '<label for="job_location">Location:</label>';
        echo '<select type="text" id="job_location" name="job_location">';
        foreach (all_locations() as $loc){
            echo '<option value="'.$loc->shorthand().'">'.$loc->name().'</option>';
        }
        echo '</select>';
    }

    function save_job_opening_location_meta($post_id) {
        if (array_key_exists('job_location', $_POST)) {
            update_post_meta($post_id, 'job_location', sanitize_text_field($_POST['job_location']));
        }
    }
    add_action('save_post', 'save_job_opening_location_meta');

}

