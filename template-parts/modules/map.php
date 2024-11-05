<?php 
    $section = $args['section'];
?>
<section class="regular-content section--gmap" id="gmap">
    <a class="regular-content__anchor" name="gmap"></a>
    <div class="regular-content__wrap">


        <div class="regular-content__main">
            <div class="container-fluid ">
                <div class="row">


                    <div class="col col-12 text-center p-0">
                        <div class="col__wrap" style="width: 100%; height: 475px; aspect-ratio: 1/0.35;">

                            <div id="map" style="margin: 0 !important; width: 100%; height: 100%;"></div>

                        </div>
                    </div>


                </div>
            </div>
        </div>

        
    </div>
    <script>  
    
       (function(){

            let defaultMarkerUrl = window.siteUrl + "/wp-content/themes/brindle/assets/img/maps_marker.png";
            let markerUrl = '<?php echo $section['marker_icon']['url']; ?>';

            window.gmapsettings = {}

            window.gmapsettings.latitude = <?php echo $section['latitude']; ?>;
            window.gmapsettings.longitude = <?php echo $section['longitude']; ?>;
            window.gmapsettings.marker = ( markerUrl ) ? markerUrl : defaultMarkerUrl;
            
            <?php if( !empty($section['styles']) ): ?>
                window.gmapsettings.styles = <?php echo $section['styles']; ?>
            <?php endif; ?>

       })();

    </script>
</section>