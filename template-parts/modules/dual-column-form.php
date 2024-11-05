<?php   

    $section = $args['section'];

?>
<section class="regular-content section--contact-us" id="contact-us">
    <a class="regular-content__anchor" name="contact-us"></a>

    


    <div class="regular-content__wrap">
        <div class="regular-content__main">
            <div class="container">
                <div class="row">

                    <div class="col col-12 col-lg-6 col--content p-0">
                        <div class="col__wrap">

                            <?php echo $section['content']; ?>

                        </div>
                    </div>

                    <div class="col col-12 col-lg-6 col--form col--bg p-0">

                        <div class="col__background">
                            <div class="col__background--color" style="background: var(--color-accent);"></div>
                            <!-- <div class="col__background--image" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/featured-places-background-example.webp);"></div> -->
                            <div class="col__background--overlay" style="background: var(--color-accent); opacity:  0.9"></div>
                        </div>

                        <div class="col__wrap">
                            <?php echo $section['form']; ?>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <style>
        body .section--contact-us .container::before{
            background-image: url(<?php echo $section['figure']['url']; ?>); 
        }
    </style>

</section>