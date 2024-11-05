<?php

$theme_settings = get_theme_global_settings();

// print_r('ADDITIONAL SCRIPTS --');
// print_r($theme_settings);


function site_custom_scripts_on_head(){
    global $theme_settings;

    

    if( $theme_settings['additional_scripts']['header_scripts'] ){
        foreach( $theme_settings['additional_scripts']['header_scripts'] as $item ){
            print_r($item['script']);
        }
    }
    
}
add_action('wp_head', 'site_custom_scripts_on_head');


function site_custom_scripts_on_footer(){
    global $theme_settings;

    

    if( $theme_settings['additional_scripts']['footer_scripts'] ){
        foreach( $theme_settings['additional_scripts']['footer_scripts'] as $item ){
            print_r($item['script']);
        }
    }
}
add_action('wp_footer', 'site_custom_scripts_on_footer');