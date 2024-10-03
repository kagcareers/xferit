<?php

function job_opening_department_meta_box() {
    add_meta_box(
        'job_opening_deparment', // ID of the metabox
        'Departments', // title of the metabox
        'job_opening_department_callback', // content render callback
        'opening' // applicable post type
    );
}
add_action('add_meta_boxes', 'job_opening_department_meta_box');

function job_opening_department_callback($post) {
    $departments_selected =  explode(',', get_post_meta($post->ID, 'job_department', true));

    foreach (all_departments() as $dep){
        $checked = in_array($dep->shorthand(), $departments_selected) ? ' checked="checked" ':"";

        echo ''
        .'<label style="display:inline-block; padding: 5px; margin: 2px; border: 1px solid grey">'
            .'<input '. $checked .' type="checkbox" name="job_department_ui" value="'.$dep->shorthand().'">'.$dep->name()
        .'</label>';
    }

    echo '<input type="hidden" id="job_department" name="job_department">
    <script>
    const checkboxes = document.querySelectorAll("input[type=checkbox][name=job_department_ui]");
    const hiddenInput = document.getElementById("job_department");

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

function save_job_opening_department_meta($post_id) {
    if (array_key_exists('job_department', $_POST)) {
        update_post_meta($post_id, 'job_department', sanitize_text_field($_POST['job_department']));
    }
}
add_action('save_post', 'save_job_opening_department_meta');


/////////// register for rest

function register_custom_meta() {
    register_meta('opening', 'job_department', [
        'show_in_rest' => true, // Expose this meta field in the REST API
        'single' => false,       // Specify that this is a single value
        'type' => 'array',     // Define the type of data
    ]);
}
add_action('init', 'register_custom_meta');


function add_custom_field_department_to_rest() {
    register_rest_field('opening', 'job_department', [
        'get_callback' => function ($data) {
            return get_post_meta($data['id'], 'job_department', true);
        },
        'update_callback' => function ($value, $data) {
            update_post_meta($data['id'], 'job_department', sanitize_array_field($value));
        },
        'schema' => [
            'type' => 'array',
            'context' => ['view', 'edit'],
        ],
    ]);
}
add_action('rest_api_init', 'add_custom_field_department_to_rest');