<?php



function acf_button ( $link = false, $classes = '' ) {

    if( !$link || trim($link['title']) == '' ){ return; }

    return '<span class="btn--wrap"><a class="'. $classes .'" href="'.$link['url'].'" target="'.$link['target'].'">'.$link['title'].'</a></span>';

}