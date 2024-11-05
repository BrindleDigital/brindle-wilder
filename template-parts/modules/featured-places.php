<?php   
    $section = $args['section'];
    $image_to_right = $args['image_to_right'];
?>
<section class="regular-content section--featured-locations" id="featured-locations">
    <a class="regular-content__anchor" name="featured-locations"></a>
    <div class="regular-content__wrap <?php echo ( $image_to_right ) ? 'regular-content__wrap-ltr' : ''; ?>">

        <div class="regular-content__main">
            <div class="container">
                <div class="row">

                    <div class="col col-12 col--content p-0">
                        
                        <div class="featured-locations-slider">

                            <?php
                                foreach( $section as $index => $slide ){
                                    ?>
                                    <div class="slider-item">
                                        <div class="slider-item__wrap">

                                            <div class="image">
                                                <figure>
                                                    <img src="<?php echo $slide['background']['url']; ?>" alt="">
                                                    <div class="overlay" style="background: <?php echo $slide['overlay']; ?>;"></div>
                                                </figure>
                                                <img src="<?php echo $slide['image']['url']; ?>" alt="">
                                            </div>

                                            <div class="main">
                                                <h2><?php echo $slide['title']; ?></h2>
                                                <p class="subheading"><?php echo $slide['subheading']; ?></p>
                                                <div class="content"><?php echo $slide['content']; ?></div>
                                                <div>

                                                    <?php if( count($section) > 1): ?>
                                                        <button class="js--featured-location-slider-prev slider-prev">
                                                            <svg width="61" height="23" viewBox="0 0 61 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M59 11.6L1.99989 11.6M1.99989 11.6L14.0885 2M1.99989 11.6L14.0885 21.2" style="stroke: var(--color-primary)" stroke-width="2.4" stroke-linecap="round"/>
                                                            </svg>
                                                        </button>
                                                        <button class="js--featured-location-slider-next slider-next">
                                                            <svg width="61" height="23" viewBox="0 0 61 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M2 11.4L59.0001 11.4M59.0001 11.4L46.9115 21M59.0001 11.4L46.9115 1.80005" style="stroke: var(--color-primary)" stroke-width="2.4" stroke-linecap="round"/>
                                                            </svg>
                                                        </button>
                                                    <?php endif; ?>

                                                    <?php echo acf_button( $slide['button'], 'btn' ); ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <?php
                                }
                            ?>

                        </div>

                    </div>

                </div>
            </div>
        </div>
        
    </div>
</section>