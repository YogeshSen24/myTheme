<?php

function add_css() {
    wp_enqueue_style('style1', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'add_css');

?>
