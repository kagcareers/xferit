<?php



function get_openings_data($data) {

    // Query for the posts
    $args = array(
        'post_type' => 'opening',
        'posts_per_page' => -1, // Get all posts
    );

    $query = new WP_Query($args);

    $posts = array();
    foreach ($query->posts as $post) {
        $posts[] = array(
            'id' => $post->ID,
            'title' => get_the_title($post->ID),
            'content' => apply_filters('the_content', $post->post_content),
            'date' => $post->post_date,
            'excerpt' => $post->post_excerpt,
            'link' => get_permalink($post->ID),
        );
    }

    return rest_ensure_response($posts);
}


add_action('rest_api_init', function () {
    register_rest_route('custom/v1', 'data/openings/v2', array(
        'methods' => 'GET',
        'callback' => 'get_openings_data',
    ));
});