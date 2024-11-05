<?php 
    $section = $args['section'];
?>
<section class="regular-content section--content" id="content">
    <a class="regular-content__anchor" name="content"></a>
    <div class="regular-content__wrap">


        <div class="regular-content__main">
            <div class=" <?php echo ($section['full_width_container']) ? 'container-fluid' : 'container'; ?> ">
                <div class="row">


                    <div class="col col-12 text-center p-0">
                        <div class="col__wrap">
                            <?php echo $section['content']; ?>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        
    </div>
</section>