<?php

add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');

function load_posts_by_ajax_callback() {

        $args = array('post_type' => 'story','posts_per_page' => 5);
        $query = new WP_Query($args);
        // Get content from Post
            if($query->have_posts()) :
                while($query->have_posts()) : $query->the_post();

                the_title();
    endwhile;
endif;
}
