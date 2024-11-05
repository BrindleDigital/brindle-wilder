<?php


// Register ACF global options pages
if(function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings'
    ));


    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Global Settings',
        'menu_title'    => 'Global',
        'parent_slug'   => 'theme-general-settings' 
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings'
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings'
    ));
    
}

function get_theme_global_settings(){
    return array(
        'brand' 		        => get_field('brand', 'option'),
        'colors' 		        => get_field('colors', 'option'),
        'fonts' 		        => get_field('fonts', 'option'),
        'googlefonts' 		    => get_field('get_google_fonts', 'option'),
        'typography' 	        => get_field('typography', 'option'),
        'socials' 		        => get_field('socials', 'option'),
        'additional_scripts'    => get_field('additional_scripts', 'option'),
    );
}

function get_page_settings(){
    return get_field('page_settings', get_the_ID() );
}