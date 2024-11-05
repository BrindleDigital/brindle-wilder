
<?php 
    $section = $args['section'];
?>
<section class="regular-content section--statistics" id="statistics">
    <a class="regular-content__anchor" name="statistics"></a>
    <div class="regular-content__wrap">

        <div class="regular-content__main">
            <div class="container">
                <div class="row">

                    <div class="col col-12 col--title p-0">
                        <div class="col__wrap">

                            <h2><?php echo $section['title']; ?></h2>

                        </div>
                    </div>

                    <div class="col col-12 col--statistics">
                        <div class="col__wrap">
                            <ul>

                                <?php if( $section['stats'] ): foreach( $section['stats'] as $stat ): ?>
                                    <li>
                                        <h3><?php echo $stat['value']; ?></h3>
                                        <p class="subheading"><?php echo $stat['title']; ?></p>
                                    </li>
                                <?php endforeach; endif; ?>
                                
                            </ul>
                        </div>
                    </div>

                    <div class="col col-12 col--cta">
                        <div class="col__wrap">
                            <?php echo acf_button( $section['button'], 'btn' ); ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        
    </div>
</section>