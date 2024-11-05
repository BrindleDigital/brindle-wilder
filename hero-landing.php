<?php   
    $section = $args['section'];
    $sidebar = $args['sidebar'];

?>
<section class="regular-content section--hero section--hero-featured" id="hero">
    <a class="regular-content__anchor" name="hero"></a>
<!-- 
    <div class="sidebar">
        <div class="sidebar__wrap">
            <h2><?php echo $sidebar['text']; ?></h2>
            <?php echo acf_button( $sidebar['link'] ); ?>
        </div>
    </div> -->

    <div class="regular-content__slider">

        <?php foreach( $section as $slide ): ?>

            <div class="regular-content__slide">
                <div class="regular-content__wrap regular-content--white">

                    <?php echo regular_content_background( $slide['background_settings'], [ 'parallax' => true ] ); ?>

                    <div class="regular-content__main">
                        <div class="container p-0">
                            <div class="row">

                                <div class="col col-12 col-md-6">
                                    <div class="col__wrap">
                                        <div class="main">
                                            <h1><?php echo $slide['title']; ?></h1>
                                            <p class="subheading"><?php echo $slide['subheading']; ?></p>
                                            <div class="content">
                                                <?php echo $slide['content']; ?>
                                            </div>

                                            <!-- <div class="buttons">
                                                <?php echo acf_button($slide['button'], 'btn'); ?>
                                                <?php echo acf_button($slide['button_outline'], 'btn btn-outline'); ?>
                                            </div> -->

                                        </div>
                                    </div>
                                </div>

                                <div class="col col-12 col-md-6">
                                    <div class="col__wrap">
                                        <?php echo do_shortcode($slide['form']); ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>

    </div>

    <!-- <div class="reguar-content__slider--arrows">

        <button class="js--hero-slider-prev slider-prev">
            <svg width="61" height="23" viewBox="0 0 61 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M59 11.6L1.99989 11.6M1.99989 11.6L14.0885 2M1.99989 11.6L14.0885 21.2" style="stroke: var(--color-white)" stroke-width="2.4" stroke-linecap="round"/>
            </svg>
        </button>

        <button class="js--hero-slider-next slider-next">
            <svg width="61" height="23" viewBox="0 0 61 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 11.4L59.0001 11.4M59.0001 11.4L46.9115 21M59.0001 11.4L46.9115 1.80005" style="stroke: var(--color-white)" stroke-width="2.4" stroke-linecap="round"/>
            </svg>
        </button>

    </div> -->

    <style>
        .site-header .col--main :is(.site-navigation, .actions){
            display: none !important;
        }
        .site-header .col--main .phone a{
            text-decoration: none;
            font-size: 36px;
            font-weight: 500;
            color: var(--color-white);
        }
        .site-header.fixed .col--main .phone a{
            color: var(--color-primary);
        }
       

        .gform_wrapper.gravity-theme .gf_progressbar_percentage.percentbar_blue{
            background-color: var(--color-primary) !important;
        }

        .gform_wrapper{
            padding: 48px 64px;
            background: var(--color-accent);
            width: 100%;
            max-width: 550px;
  margin-left: auto;
        }
        .gform-theme-button{
            padding: 10px 20px;
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
            min-width: 150px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            height: 50px;
        }
        :is(.regular-content--white, .regular-content--white .gform_wrapper div, .regular-content--white .gform_wrapper p, .regular-content--white .gform_wrapper label) {
            color: #FFF;
            color: #000;
        }
        .gform_wrapper textarea{
            max-height: 100px;
        }


        @media (max-width: 767px){
            .site-header .col--main .phone a{
                font-size: 18px;
            }

            .regular-content#hero{
                /* margin-bottom: 550px; */
            }
            .gform_wrapper{
                padding: 20px;
                /* z-index: 2;
                position: absolute;
                top: 100%;
                left: 0; */
                width: calc(100%);
                
            }

            body .section--hero .regular-content__wrap .col .col__wrap{
                padding: 50px 20px 0;
            }
            body .section--hero .regular-content__wrap .col:last-of-type .col__wrap{
                padding-bottom: 50px;
            }

            body .section--hero .regular-content__main{
                aspect-ratio: initial;
                height: auto;
                overflow: hidden;
            }
            .site-header{
                padding-top: 80px;
            }

            .site-header .site-header__wrap{
                /* position: relative; */
            }
            .site-header .col--main .phone a{
                color: var(--color-primary);
            }
        }



    </style>

    <script>
        (function($){
            $(function(){

                $('.site-header .col--main').append('<div class="phone"><a href="<?php echo $slide['button']['url']; ?>" target="<?php echo $slide['button']['target']; ?>"><?php echo $slide['button']['title']; ?></a></div>');

            });
        })(jQuery);
    </script>

</section>
