<?php


function neighborhood_shortcode() {
    return '<img src="' . get_stylesheet_directory_uri() . '/assets/img/neighborhood-shortcode-example.png" alt="example">';
}
add_shortcode('neighborhood_map', 'neighborhood_shortcode');


function floor_plans_shortcode() {
    return '<img src="' . get_stylesheet_directory_uri() . '/assets/img/floor-plans-example.png" alt="example" style="width: 100%;margin-bottom: 60px">';
}
add_shortcode('floor_plans', 'floor_plans_shortcode');


function interactive_map_shortcode() {

    return '<div id="map" style="margin: 0 !important;"></div>';
    
}
add_shortcode('interactive_map', 'interactive_map_shortcode');