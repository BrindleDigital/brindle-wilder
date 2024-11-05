<?php

/* Template Name: Builder */



get_header(); 

?>

<main role="main" class="site-main">

    <?php
    
    $flexible_content = get_field('flexible_content');

    // print_r( $flexible_content );

    foreach( $flexible_content as $content_index => $section ):

        switch( $section['acf_fc_layout'] ):

            case 'hero_landing':

                get_template_part('template-parts/modules/hero', 'landing', array('section' => $section['content']['hero_landing'])  );

                break;

            case 'hero_featured':

                get_template_part('template-parts/modules/hero', '', array('section' => $section['content']['hero_featured'], 'sidebar' => $section['content']['hero_sidebar_featured'])  );

                break;

            case 'hero_interior':

                get_template_part('template-parts/modules/hero', 'slim', array('section' => $section['content']['hero_interior'])  );

                break;

            case 'dual_column_form':

                get_template_part('template-parts/modules/dual-column-form', '', array('section' => $section['content']['dual_column'])  );

                break;

            case 'content_and_cta':

                get_template_part('template-parts/modules/content-and-cta', '', array('section' => $section['content']['content_and_cta'])  );

                break;

            case 'standard_content':

                get_template_part('template-parts/modules/standard-content', '', array('section' => $section['content']['standard_content'])  );

                break;

            case 'statistics':

                get_template_part('template-parts/modules/statistics', '', array('section' => $section['content']['statistics'])  );

                break;


            case 'image_and_content_box':

                get_template_part('template-parts/modules/featured-places', '', array('section' => $section['content']['image_and_content_box'], 'image_to_right' => $section['content']['image_to_left'])  );

                break;

            case 'media_group':


                get_template_part('template-parts/modules/media-group', '', array('section' => $section['content']['media_group'])  );

                break;

            case 'shortcode_and_content':


                get_template_part('template-parts/modules/floor-plans', '', array('section' => $section['content']['shortcode_and_content'])  );

                break;
    
            case 'explore':


                get_template_part('template-parts/modules/explore', '', array('section' => $section['content']['explore'][0])  );

                break;


            case 'testimonials':
	
                get_template_part('template-parts/modules/testimonials', '', array('section' => $section['content']['testimonials'])  );

                break;

            case 'tabs':

                get_template_part('template-parts/modules/tabs', '', array('section' => $section['content']['tabs'])  );

                break;

            case 'map':

                get_template_part('template-parts/modules/map', '', array('section' => $section['content']['map'])  );

                break;
    

        endswitch;


    endforeach;

    ?>



</main>


<?php

get_footer();

?>