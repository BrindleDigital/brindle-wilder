<?php
    $section = $args['section'];
    
?>
<section class="regular-content section--explore regular-content--white" id="explore">
    <a class="regular-content__anchor" name="explore"></a>
    <div class="regular-content__wrap">

        <div class="regular-content__main">
            <div class="container-fluid">
                <div class="row">

                    <div class="col col-12 col--image p-0">
                        <img src="<?php echo $section['image']['url']; ?>" alt="<?php echo $section['image']['alt']; ?>">
                    </div>

                    <div class="col col-12 col--content p-0">
                        
                        <div class="col__wrap">
                        <h2><?php echo $section['title']; ?></h2>

<?php echo acf_button($section['button'], 'btn btn-outline'); ?>
                        </div>

                    </div>

                    <div class="col col-12 col--gallery">
                        <div class="container p-0">
                            <?php foreach( $section['content'] as $image ): ?>

                                <figure>
                                    <img src="<?php echo $image['image']['url']; ?>" alt="<?php echo $image['title']; ?>">
                                    <figcaption><?php echo $image['title']; ?></figcaption>
                                </figure>

                            <?php endforeach; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
    </div>
</section>
