<?php


////////// add location attribute
{


    function job_opening_department_meta_box() {
        add_meta_box('job_opening_deparment', 'Department', 'job_opening_department_callback', 'opening');
    }
    add_action('add_meta_boxes', 'job_opening_department_meta_box');

    function job_opening_department_callback($post) {
        $location = get_post_meta($post->ID, 'job_department', true);
        echo '<label for="job_department">Department:</label>';
        echo '<select id="job_department" name="job_department">';
        foreach (all_departments() as $dep){
            echo '<option value="'.$dep->shorthand().'">'.$dep->name().'</option>';
        }
        echo '</select>';
    }

    function save_job_opening_department_meta($post_id) {
        if (array_key_exists('job_department', $_POST)) {
            update_post_meta($post_id, 'job_department', sanitize_text_field($_POST['job_department']));
        }
    }
    add_action('save_post', 'save_job_opening_department_meta');

}

