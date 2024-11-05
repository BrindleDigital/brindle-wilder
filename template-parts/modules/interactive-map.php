<?php
    $section = get_field('map');
?>
<section class="regular-content section--interactive-map" id="interactive-map">
    <a class="regular-content__anchor" name="interactive-map"></a>
    <div class="regular-content__wrap">

        <div class="regular-content__main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col col-12 p-0">
                        <?php echo $section['content']; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>