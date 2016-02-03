<?php
/*
	==========================================
	 Include css
	==========================================
*/
    function New_style_init() {
        wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all'); 
}
add_action('wp_enqueue_scripts', 'New_style_init');

/*
	==========================================
	 Theme support function
	==========================================
*/

add_theme_support('post-thumbnails');

