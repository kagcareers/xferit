<?php

// Add a submenu page for managing job locations
function job_openings_menu() {
    add_submenu_page(
        'edit.php?post_type=job_opening', // Parent slug
        'Manage Locations',                // Page title
        'Manage Locations',                // Menu title
        'manage_options',                  // Capability
        'manage_job_locations',            // Menu slug
        'job_openings_manage_locations'    // Function to display the page
    );
}
add_action('admin_menu', 'job_openings_menu');


// Display the manage locations page
function job_openings_manage_locations() {
    if (!current_user_can('manage_options')) {
        return;
    }

    // Handle form submission
    if (isset($_POST['submit'])) {
        $locations = array_map('sanitize_text_field', $_POST['locations']);
        update_option('job_opening_locations', $locations);
    }

    // Retrieve the current locations
    $locations = get_option('job_opening_locations', []);
    ?>
    <div class="wrap">
        <h1>Manage Job Locations</h1>
        <form method="post">
            <h2>Locations</h2>
            <ul id="location-list">
                <?php foreach ($locations as $location) : ?>
                    <li>
                        <input type="text" name="locations[]" value="<?php echo esc_attr($location); ?>" />
                        <button type="button" class="remove-location">Remove</button>
                    </li>
                <?php endforeach; ?>
            </ul>
            <button type="button" id="add-location">Add Location</button>
            <input type="submit" name="submit" class="button button-primary" value="Save Locations" />
        </form>
    </div>
    <script>
        document.getElementById('add-location').onclick = function() {
            var li = document.createElement('li');
            li.innerHTML = '<input type="text" name="locations[]" /> <button type="button" class="remove-location">Remove</button>';
            document.getElementById('location-list').appendChild(li);
        };
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-location')) {
                e.target.parentNode.remove();
            }
        });
    </script>
    <?php
}
