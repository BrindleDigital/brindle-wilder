<?php

/* Template Name: Landing */



get_header(); 

?>

<main role="main" class="site-main">
    <?php
    
    
    get_template_part('template-parts/modules/hero', 'landing', array('section' => get_field('hero')['content']['hero_landing'])  );
    get_template_part('template-parts/modules/content-and-cta', '', array('section' => get_field('content_and_cta')['content']['content_and_cta'])  );
    get_template_part('template-parts/modules/featured-places', '', array('section' => get_field('image_and_content_box')['content']['image_and_content_box'], 'image_to_right' => get_field('')['content']['image_to_left'])  );
    get_template_part('template-parts/modules/floor-plans', '', array('section' => get_field('shortcode_and_content')['content']['shortcode_and_content'])  );
    
    get_template_part('template-parts/modules/explore', '', array('section' => get_field('explore')['content']['explore'][0])  );
    
    get_template_part('template-parts/modules/testimonials', '', array('section' => get_field('testimonials')['content']['testimonials'])  );

    get_template_part('template-parts/modules/map', '', array('section' => get_field('map')['content']['map'])  );


    ?>



</main>


<?php

get_footer();

?>