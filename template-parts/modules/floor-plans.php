<?php   
    $section = $args['section'];
    $image_to_right = $args['image_to_right'];
?>
<section class="regular-content section--plans" id="plans">
    <a class="regular-content__anchor" name="plans"></a>
    <div class="regular-content__wrap">

        <div class="regular-content__main">
            <div class="container">
                <div class="row">

                    <div class="col col-12 col--content p-0">
                        
                        <div class="col__wrap">
                            <h2><?php echo $section['title']; ?></h2>

                            <div class="content">
                                <?php echo $section['content']; ?>
                            </div>
                        </div>

                    </div>

                    <div class="col--gallery">
                        <?php echo do_shortcode($section['shortcode']); ?>
                    </div>

                    <div class="col col-12 col--cta p-0">
                    <?php echo acf_button($section['button'], 'btn'); ?>
                    </div>

                </div>
            </div>
        </div>
        
    </div>
</section>