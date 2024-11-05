<?php


function regular_content_background( $background = false, $settings = [] ){

    if( !$background ){ return; }

    
    $color = $background['color'];
    

    $content = '';
    $desktop_image = '';

    
    if( isset($background['image']['thumbnail']) && !empty($background['image']['thumbnail']) && trim($background['image']['thumbnail']['url']) != '' ){
        $desktop_image = $background['image']['thumbnail']['url'];
    }

    if( isset($background['image']['desktop']) && !empty($background['image']['desktop']) && trim($background['image']['desktop']['url']) != '' ){
        $desktop_image = $background['image']['desktop']['url'];
    }


    $mobile_image = $desktop_image;

    if( isset($background['image']['mobile']) && !empty($background['image']['mobile']) ){
        $mobile_image = $background['image']['mobile']['url'];
    }



    $video = $background['video'];

    $video_enabled = $video['enable_background_video'];
    $video_type = $video['video_type'];
    $video_media_file = $video['media_file'];
    $video_embed_url = $video['embed_url'];



    $overlay = $background['overlay'];

    $parallax = ( isset($settings['parallax']) ) ? $settings['parallax'] : false;

    $content .= '
        <div class="regular-content__background ' . ( ( $parallax ) ? 'regular-content__background--parallax' : '' ) . '">
            <div class="regular-content__background__wrap">
    
                <div class="regular-content__background--item regular-content__background--color" style="background-color: '.$color.'"></div>
                <div class="regular-content__background--item regular-content__background--image desktop" style="background-image: url('.$desktop_image.')"></div>
                <div class="regular-content__background--item regular-content__background--image mobile" style="background-image: url('.$mobile_image.')"></div>

    ';

    // print_r($video_type);
    // print_r($video_embed_url);

    if( $video_enabled ):
    $content .= '<div class="regular-content__background--item regular-content__background--video">';

        if( ( $video_type == '1' ) && ( !empty($video_media_file) ) ):

            $content .= '<video autoplay loop mute><source src="'.$video_media_file['url'].'"></video>';

        elseif( ($video_type == '2' || $video_type == '3') && ( !empty($video_embed_url) ) ):

            $selected_video_type = '';
            
            if($video_type == '2'){
                $selected_video_type = 'youtube';
            }elseif($video_type == '3'){
                $selected_video_type = 'vimeo';
            }

            $content .= '<iframe src="#" data-embed-url="' . $video_embed_url . '" data-embed-source="' . $selected_video_type . '"></iframe>';
            

        endif;

    $content .= '</div>';
    endif;


    $content .= '
                <div class="regular-content__background--item regular-content__background--overlay" style="background: '.$overlay.'"></div>
            
            </div>
        </div>
    ';
    return $content;
}