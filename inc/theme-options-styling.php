<?php

function setup_theme_options_global_styling() {
   
    $theme_options = get_theme_global_settings();
    $rem_size = 16; // this will define the rem size base


    $default_font_size = 16;
    $default_line_height = 1.6;

    $fonts = array(
        'primary' => $theme_options['fonts']['primary']['font_name'],
        'secondary' => $theme_options['fonts']['secondary']['font_name'],
        'alt' => $theme_options['fonts']['alt']['font_name'],
    );

    $colors = array(
        'primary' => $theme_options['colors']['primary']['color'],
        'secondary' => $theme_options['colors']['secondary']['color'],
        'accent' => $theme_options['colors']['accent']['color'],
        'black' => $theme_options['colors']['black']['color'],
        'white' => $theme_options['colors']['white']['color'],
    );

    $typography = array(
        'h1' => $theme_options['typography']['h1']['font_settings'],
        'h2' => $theme_options['typography']['h2']['font_settings'],
        'h3' => $theme_options['typography']['h3']['font_settings'],
        'h4' => $theme_options['typography']['h4']['font_settings'],
        'h5' => $theme_options['typography']['subheading']['font_settings'],
        'h6' => $theme_options['typography']['h6']['font_settings'],

        'subheading' => $theme_options['typography']['subheading']['font_settings'],

        'body-small' => $theme_options['typography']['body_small']['font_settings'],
        'body-regular' => $theme_options['typography']['body_regular']['font_settings'],
        'body-large' => $theme_options['typography']['body_large']['font_settings'],

        'link-regular' => $theme_options['typography']['link_regular']['font_settings'],
        'link-large' => $theme_options['typography']['link_large']['font_settings'],
    );

    // print_r( $theme_options['typography'] );
    
    ?>

        <script>
            window.siteColors = {};
            window.siteUrl = '<?php echo site_url(); ?>';

            <?php foreach( $colors as $index => $value ): ?>
                window.siteColors.<?php echo $index; ?> = '<?php echo $value; ?>';
            <?php endforeach; ?>

        </script>

        <style>

            <?php 
            $gfonts_path = '';

            if( $theme_options['googlefonts'] ){
                
                $gfonts_path .= '@import url(https://fonts.googleapis.com/css2';

                foreach ( $theme_options['googlefonts'] as $index => $gfont ){

                    $font_name = str_replace(' ', '+', $gfont['font_name']);
                    $font_weight = $gfont['font_weights'];

                    $font_weight = str_replace(' ', '', $font_weight);
                    $font_weight = str_replace(',', ';', $font_weight);

                    $gfonts_path .= ( ($index == 0) ? '?' : '&' ) . 'family='.$font_name.':wght@' . $font_weight;

                }

                $gfonts_path .= '&display=swap);';

                
            } 
            echo $gfonts_path;
            ?>
                

            /* THEME SETTINGS STYLING */

            :root {

                --default-font-size-px: <?php echo $default_font_size; ?>px;
                --default-font-size: <?php echo $default_font_size / $rem_size; ?>rem;
                --default-line-height: <?php echo $default_line_height; ?>;

                --default-font-size-px-mobile: <?php echo ($default_font_size * 0.75); ?>px;
                --default-font-size-mobile: <?php echo ($default_font_size * 0.75) / $rem_size; ?>rem;
                --default-line-height-mobile: <?php echo ($default_line_height * 0.75); ?>;


                <?php foreach( $fonts as $index => $value ): ?>
                --font-<?php echo $index; ?>: '<?php echo $value; ?>', sans-serif;
                <?php endforeach; ?>

                <?php foreach( $colors as $index => $value ): ?>
                --color-<?php echo $index; ?>: <?php echo $value; ?>;
                <?php endforeach; ?>

                <?php foreach( $typography as $index => $value ): ?>
                --typography-<?php echo $index; ?>-font-family: '<?php echo $fonts[ $value['font_family'] ]; ?>', sans-serif;
                --typography-<?php echo $index; ?>-font-size: <?php echo $value['font_size']; ?>px;
                --typography-<?php echo $index; ?>-font-weight: <?php echo $value['font_weight']; ?>;
                --typography-<?php echo $index; ?>-line-height: <?php echo $value['line_height']; ?>;
                --typography-<?php echo $index; ?>-font-style: <?php echo $value['font_style']; ?>;
                --typography-<?php echo $index; ?>-letter-spacing: <?php echo $value['letter_spacing']; ?>px;
                <?php endforeach; ?>

                <?php foreach( $typography as $index => $value ): ?>
                --typography-<?php echo $index; ?>-font-family-md: '<?php echo $fonts[ $value['font_family'] ]; ?>', sans-serif;
                --typography-<?php echo $index; ?>-font-size-md: <?php echo $value['font_size'] * 0.75; ?>px;
                --typography-<?php echo $index; ?>-font-weight-md: <?php echo $value['font_weight']; ?>;
                --typography-<?php echo $index; ?>-line-height-md: <?php echo $value['line_height'] * 0.75; ?>;
                --typography-<?php echo $index; ?>-font-style-md: <?php echo $value['font_style']; ?>;
                --typography-<?php echo $index; ?>-letter-spacing-md: <?php echo $value['letter_spacing'] * 0.75; ?>px;
                <?php endforeach; ?>


            }


            html {
                font-size: var(--default-font-size-px)px;
            }

            body{ 

                color: var(--color-black);

                /* font-family: var(--font-primary), sans-serif; */
                /* font-size: var(--default-font-size)rem; */
                /* line-height: var(--default-line-height); */

                font-family: var(--typography-body-regular-font-family);
                font-size: var(--typography-body-regular-font-size);
                font-weight: var(--typography-body-regular-font-weight);
                font-style: var(--typography-body-regular-font-style);
                letter-spacing: var(--typography-body-regular-letter-spacing);
                line-height: var(--typography-body-regular-line-height);

            }

            p, li, label{
                font-family: var(--typography-body-regular-font-family);
                font-size: var(--typography-body-regular-font-size);
                font-weight: var(--typography-body-regular-font-weight);
                font-style: var(--typography-body-regular-font-style);
                letter-spacing: var(--typography-body-regular-letter-spacing);
                line-height: var(--typography-body-regular-line-height);
            }

            a{
                color: var(--color-primary);
            }

            

            .btn,
            .gform_wrapper form input[type="submit"].gform_button{
                padding: 28px 28px;
                height: 80px;

                
                font-family: var(--typography-link-regular-font-family);
                font-size: var(--typography-link-regular-font-size);
                font-weight: var(--typography-link-regular-font-weight);
                font-style: var(--typography-link-regular-font-style);
                letter-spacing: var(--typography-link-regular-letter-spacing);
                line-height: var(--typography-link-regular-line-height);

                border: 2px solid var(--color-primary); 
                background: var(--color-primary);
                color: var(--color-white);


                border-radius: 5px;
                outline: 0;
                text-decoration: none;
                transition: all .4s .0s ease;
                text-align: center;
                text-transform: uppercase;
                min-width: 240px;

                display: inline-flex;
                justify-content: center;
                align-items: center;

            }
            .btn:hover,
            .btn:focus,
            .gform_wrapper form input[type="submit"].gform_button:hover,
            .gform_wrapper form input[type="submit"].gform_button:focus{
                color: var(--color-white);
                background: var(--color-secondary);
                border-color: var(--color-secondary);
            }

            .btn-outline{
                background: transparent;
                color: var(--color-secondary);
                border-color: var(--color-secondary);
            }
            .btn-outline:hover,
            .btn-outline:focus{
                background: var(--color-primary);
                color: var(--color-white);
                border-color: var(--color-primary);
            }

            .regular-content--white .btn-outline{
                background: transparent;
                color: var(--color-white);
                border-color: var(--color-white);
            }

            .regular-content--white .btn-outline:hover,
            .regular-content--white .btn-outline:focus{
                background: var(--color-white);
                color: var(--color-black);
                border-color: var(--color-white);
            }

            <?php foreach( $typography as $index => $value ): ?>


                <?php echo $index; ?>{
                    font-family: var(--typography-<?php echo $index; ?>-font-family);
                    font-size: var(--typography-<?php echo $index; ?>-font-size);
                    font-weight: var(--typography-<?php echo $index; ?>-font-weight);
                    font-style: var(--typography-<?php echo $index; ?>-font-style);
                    letter-spacing: var(--typography-<?php echo $index; ?>-letter-spacing);
                    line-height: var(--typography-<?php echo $index; ?>-line-height);
                }


            <?php endforeach; ?>

            .subheading, h5{
                font-family: var(--typography-subheading-font-family);
                font-size: var(--typography-subheading-font-size);
                font-weight: var(--typography-subheading-font-weight);
                font-style: var(--typography-subheading-font-style);
                line-height: var(--typography-subheading-line-height);
                letter-spacing: var(--typography-subheading-letter-spacing);
                text-transform: uppercase;
            }

            .link{
                font-family: var(--typography-link-regular-font-family);
                font-size: var(--typography-link-regular-font-size);
                font-weight: var(--typography-link-regular-font-weight);
                font-style: var(--typography-link-regular-font-style);
                line-height: var(--typography-link-regular-line-height);
                letter-spacing: var(--typography-link-regular-letter-spacing);
                text-transform: uppercase;
            }

            .link-large{
                font-family: var(--typography-link-large-font-family);
                font-size: var(--typography-link-large-font-size);
                font-weight: var(--typography-link-large-font-weight);
                font-style: var(--typography-link-large-font-style);
                line-height: var(--typography-link-large-line-height);
                letter-spacing: var(--typography-link-large-letter-spacing);
                text-transform: uppercase;
            }

            @media (max-width: 1200px){ 

                .btn{
                    height: 60px;
                    font-size: 14px;
                    padding: 21px 28px;
                }

                <?php foreach( $typography as $index => $value ): ?>
                    <?php echo $index; ?>{
                        font-family: var(--typography-<?php echo $index; ?>-font-family-md);
                        font-size: var(--typography-<?php echo $index; ?>-font-size-md);
                        font-weight: var(--typography-<?php echo $index; ?>-font-weight-md);
                        line-height: var(--typography-<?php echo $index; ?>-line-height-md);
                    }
                <?php endforeach; ?>
                .subheading, h5{
                    font-family: var(--typography-subheading-font-family-md);
                    font-size: var(--typography-subheading-font-size-md);
                    font-weight: var(--typography-subheading-font-weight-md);
                    line-height: var(--typography-subheading-line-height);
                    letter-spacing: var(--typography-subheading-letter-spacing);
                    text-transform: uppercase;
                }

                .link{
                    font-family: var(--typography-link-regular-font-family-md);
                    font-size: var(--typography-link-regular-font-size-md);
                    font-weight: var(--typography-link-regular-font-weight-md);
                    line-height: var(--typography-link-regular-line-height-md);
                }

                .link-large{
                    font-family: var(--typography-link-large-font-family-md);
                    font-size: var(--typography-link-large-font-size-md);
                    font-weight: var(--typography-link-large-font-weight-md);
                    line-height: var(--typography-link-large-line-height-md);
                }

            }

            @media (max-width: 767px){
                p, li, label{
                    font-size: var(--default-font-size-mobile);
                    font-family: var(--font-primary), sans-serif;
                }
            }

            @media (max-width: 575px){
                .btn{
                    line-height: 1;
                }
            }

        </style>
    
    <?php
}

add_action('wp_head', 'setup_theme_options_global_styling');