<?php   
    $section = $args['section'];
?>



<section class="regular-content section--gallery-list" id="gallery-list">
    <a class="regular-content__anchor" name="gallery-list"></a>
    <div class="regular-content__wrap">

        <div class="regular-content__main">
            <div class="container">
                <div class="row">

                    <div class="col col-12 col--title p-0">
                        
                        <h2><?php echo $section['title']; ?></h2>

                    </div>
                    <div class="col col-12 col--content">

                        <ul>
                            <?php foreach( $section['options'] as $index => $item ): ?>
                                <?php if( $index < 5): 
                                    
                                    $image = $item['image']['url'];
                                    
                                    ?>
                                    <li class="<?php echo ( $image ) ? 'image': ''; ?>">
                                        <a <?php echo ( $image ) ? 'href="'.$image.'" data-lity': ''; ?>><?php echo $item['title']; ?></a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            
                        </ul>

                        <ul>
                            <?php foreach( $section['options'] as $index => $item ): ?>
                                <?php if( $index >= 5): 
                                    
                                    $image = $item['image']['url'];
                                    
                                    ?>
                                    <li class="<?php echo ( $image ) ? 'image': ''; ?>">
                                        <a <?php echo ( $image ) ? 'href="'.$image.'" data-lity': ''; ?>><?php echo $item['title']; ?></a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>