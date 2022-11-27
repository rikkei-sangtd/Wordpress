<?php

/**
 * Theme Functions.
 * 
 * @package Aquila
 */

echo '<pre>';
print_r(get_template_directory_uri());
wp_die();


function aquila_enqueue_scripts()
{
    wp_enqueue_style('stylesheet', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');
