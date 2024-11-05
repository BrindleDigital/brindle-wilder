<div class="regular-content section--the-content" id="the-content">
    <div class="regular-content__wrap">
        <div class="regular-content__main">
            <div class="container">
                <div class="row">
                    <div class="col col-12 col--the-content px-0 py-4">
                        <div class="col__wrap">
                            <?php
                                while ( have_posts() ) :
                                    the_post();

                                    get_template_part( 'template-parts/content', 'page' );

                                endwhile; // End of the loop.
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>