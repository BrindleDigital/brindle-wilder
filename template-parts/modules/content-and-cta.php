<?php 
    $section = $args['section'];
?>
<section class="regular-content section--cta" id="cta">
    <a class="regular-content__anchor" name="cta"></a>
    <div class="regular-content__wrap">

        <div class="regular-content__main">
            <div class="container">
                <div class="row">

                    <div class="col col-12 text-center p-0">
                        <div class="col__wrap">
                            <div class="content">
                                <h2><?php echo $section['title']; ?></h2>
                                <?php echo $section['content']; ?>
                                <?php echo acf_button($section['button'], 'btn btn-outline'); ?>    
                            </div>
                            <?php if( $section['floating'] ): ?>
                                <img src="<?php echo $section['floating']['url']; ?>" alt="Floating" class="regular-content__floating floating floating-001">
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        
    </div>
</section>