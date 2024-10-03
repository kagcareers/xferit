<?php

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
    $locations_selected =  explode(',', get_post_meta($post->ID, 'job_location', true));

    foreach (all_locations() as $loc){
        $checked = in_array($loc->shorthand(), $locations_selected) ? ' checked="checked" ':"";

        echo ''
        .'<label style="display:inline-block; padding: 5px; margin: 2px; border: 1px solid grey">'
            .'<input '. $checked .' type="checkbox" name="job_location_ui" value="'.$loc->shorthand().'">'.$loc->name()
        .'</label>';
    }

    echo '<input type="hidden" id="job_location" name="job_location">
    <script>
    const checkboxes = document.querySelectorAll("input[type=checkbox][name=job_location_ui]");
    const hiddenInput = document.getElementById("job_location");

    function updateHiddenInput() {
        const checkedValues = Array.from(checkboxes)
            .filter(checkbox => checkbox.checked)
            .map(checkbox => checkbox.value);
        hiddenInput.value = checkedValues.join(",");
    }

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener("change", updateHiddenInput);
    });
    </script>';
}

function save_job_opening_location_meta($post_id) {
    if (array_key_exists('job_location', $_POST)) {
        update_post_meta($post_id, 'job_location', sanitize_text_field($_POST['job_location']));
    }
}
add_action('save_post', 'save_job_opening_location_meta');



/////////// register for rest

function register_custom_location_meta() {
    register_meta('opening', 'job_location', [
        'show_in_rest' => true, // Expose this meta field in the REST API
        'single' => false,       // Specify that this is a single value
        'type' => 'array',     // Define the type of data
    ]);
}
add_action('init', 'register_custom_location_meta');


function add_custom_field_location_to_rest() {
    register_rest_field('opening', 'job_location', [
        'get_callback' => function ($data) {
            return get_post_meta($data['id'], 'job_location', true);
        },
        'update_callback' => function ($value, $data) {
            update_post_meta($data['id'], 'job_location', sanitize_array_field($value));
        },
        'schema' => [
            'type' => 'array',
            'context' => ['view', 'edit'],
        ],
    ]);
}
add_action('rest_api_init', 'add_custom_field_location_to_rest');