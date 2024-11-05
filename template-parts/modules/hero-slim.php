<?php   

    $section = $args['section'];

    // if( isset($args['section']['content']) && !empty($args['section']['content']['hero_interior']) ){
    //     $section = ;
    // }
    

?>
<section class="regular-content section--hero section--hero-slim" id="hero">
    
    <a class="regular-content__anchor" name="hero"></a>
    

    <div class="regular-content__slider">

        <?php
        
        $slide = array(
            'background_settings' => array(
                'color' => '#FFFFFF',
                'image' => array(
                    'desktop' => array(

                        'url' => $section['background']['url'],
                        'alt' => ''

                    ),
                    'mobile' => array(
                        
                        'url' => $section['background']['url'],
                        'alt' => ''

                    ),
                    'thumbnail' => array(
                        
                        'url' => get_the_post_thumbnail_url(),
                        'alt' => get_the_title()

                    ),
                ),
                'video' => array(

                ),
                'overlay' => $section['overlay']
            )
        );

        ?>
        <div class="regular-content__slide">
            <div class="regular-content__wrap regular-content--white regular-content--slim">

                <?php echo regular_content_background( $slide['background_settings'], ['parallax' => true] ); ?>

                <div class="regular-content__main">
                    <div class="container p-0">
                        <div class="row">

                            <div class="col col-12">
                                <div class="col__wrap">
                                    <div class="main">

                                        <p class="subheading breadcrumbs"><a class="link" href="<?php echo site_url(); ?>">Home</a> • <a class="link" href="#"><?php echo get_the_title(); ?></a></p>
                                        <h1><?php echo get_the_title(); ?></h1>
                                        
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

</section>