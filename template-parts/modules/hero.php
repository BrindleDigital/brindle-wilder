<?php   
    $section = $args['section'];
    $sidebar = $args['sidebar'];

?>
<section class="regular-content section--hero section--hero-featured" id="hero">
    <a class="regular-content__anchor" name="hero"></a>

    <div class="sidebar">
        <div class="sidebar__wrap">
            <h2><?php echo $sidebar['text']; ?></h2>
            <?php echo acf_button( $sidebar['link'] ); ?>
        </div>
    </div>

    <div class="regular-content__slider">

        <?php foreach( $section as $slide ): ?>

            <div class="regular-content__slide">
                <div class="regular-content__wrap regular-content--white">

                    <?php echo regular_content_background( $slide['background_settings'], [ 'parallax' => true ] ); ?>

                    <div class="regular-content__main">
                        <div class="container p-0">
                            <div class="row">

                                <div class="col col-12">
                                    <div class="col__wrap">
                                        <div class="main">
                                            <h1><?php echo $slide['title']; ?></h1>
                                            <p class="subheading"><?php echo $slide['subheading']; ?></p>
                                            <div class="content">
                                                <?php echo $slide['content']; ?>
                                            </div>
                                            <div class="buttons">
                                                <?php echo acf_button($slide['button'], 'btn'); ?>
                                                <?php echo acf_button($slide['button_outline'], 'btn btn-outline'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>

    </div>

    <div class="reguar-content__slider--arrows">

        <button class="js--hero-slider-prev slider-prev">
            <svg width="61" height="23" viewBox="0 0 61 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M59 11.6L1.99989 11.6M1.99989 11.6L14.0885 2M1.99989 11.6L14.0885 21.2" style="stroke: var(--color-white)" stroke-width="2.4" stroke-linecap="round"/>
            </svg>
        </button>

        <button class="js--hero-slider-next slider-next">
            <svg width="61" height="23" viewBox="0 0 61 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 11.4L59.0001 11.4M59.0001 11.4L46.9115 21M59.0001 11.4L46.9115 1.80005" style="stroke: var(--color-white)" stroke-width="2.4" stroke-linecap="round"/>
            </svg>
        </button>

    </div>

</section>
