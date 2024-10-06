<?php
function my_bootstrap_theme_enqueue_scripts() {
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    
    // Enqueue jQuery
    wp_enqueue_script('jquery');
    
    // Enqueue Bootstrap JS
    wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'my_bootstrap_theme_enqueue_scripts');
?>
