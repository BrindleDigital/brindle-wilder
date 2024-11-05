<?php
        $section = $args['section'];
    ?>
    <section class="regular-content section--testimonials" id="testimonials">
        <a class="regular-content__anchor" name="testimonials"></a>
        <div class="regular-content__wrap">

            <div class="regular-content__main">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col col-12  p-0">
                            
                            <div class="testimonials-slider">

                                <?php foreach( $section as $testimonial ): ?>

                                    <div class="testimonials-slider__item">
                                        <div class="item__wrap">

                                            <h2><?php echo $testimonial['title']; ?></h2>

                                            <div class="content"><?php echo $testimonial['content']; ?></div>

                                            <span class="link">- <?php echo $testimonial['author']; ?></span>

                                        </div>
                                    </div>

                                <?php endforeach; ?>
                            
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>