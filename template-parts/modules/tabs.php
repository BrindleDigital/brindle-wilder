
<?php 
    $section = $args['section'];
?>
<section class="regular-content section--tabs" id="tabs">
    <a class="regular-content__anchor" name="tabs"></a>
    <div class="regular-content__wrap">

        <div class="regular-content__main">
            <div class="container">
                <div class="row js--tab-group">

                    <div class="col col-12 col--tab-buttons p-0">
                        <div class="col__wrap">

                            <ul>
                                <?php foreach( $section as $index => $tab ): ?>
                                    <li>
                                        <button class="js--tab-button tab-button <?php echo ( $index == 0 ) ? ' active' : ''; ?>" data-tab="#tab-element-<?php echo 1 + $index; ?>"><?php echo $tab['title']; ?></button>
                                    </li>
                                <?php endforeach; ?>
                            </ul>

                        </div>
                    </div>

                    <div class="col col-12 col--tab-content">
                        <div class="col__wrap">
                            
                            <?php foreach( $section as $index => $tab ): ?>
                                <div class="js--tab-element tab-container <?php echo ( $index == 0 ) ? ' active' : ''; ?>" id="tab-element-<?php echo 1 + $index; ?>">
                                    <div class="tab-container__wrap">
                                        <?php echo $tab['content']; ?>
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