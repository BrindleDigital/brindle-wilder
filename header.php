<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme-test
 */



$theme_options = get_theme_global_settings();

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<!-- <div class="site-loader" style="z-index: 99999; position: fixed; width: 100%; height: 100%; inset: 0; background: var(--color-accent)">
		<video muted autoplay style="    position: absolute;
    z-index: 99999;
    width: 100%;
    height: 100%;
    inset: 0;
    object-fit: cover;">
			<source src="<?php echo get_template_directory_uri(); ?>/assets/media/intro_video.mp4">
		</video>
	</div> -->
	

	<?php
	
		$section = get_field('expandable_menu', 'option');

	?>
	<div class="site-menu">
		<div class="site-menu__wrap">

			<div class="site-menu__background">
				<div class="site-menu__background--color"></div>
				<div class="site-menu__background--image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/featured-places-background-example.jpeg)"></div>
				<div class="site-menu__background--overlay"></div>
			</div>

			<div class="site-menu__main">
				<nav class="menu-navigation">
					
					<?php echo wp_nav_menu( array(
							'theme_location' => 'primary_menu', // Do not fall back to first non-empty menu.
						) );
					?>

				</nav>

				<ul class="sidebar">


					<?php if( $section['additional_options']  ): foreach( $section['additional_options'] as $index => $option ): ?>
					<li>
						<?php echo acf_button( $option['Link'] ); ?>
					</li>
					<?php endforeach; endif; ?>
					
				</ul>

				<button class="close-menu js--close-menu">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-close-menu.svg">
				</button>
			</div>

		</div>
	</div>



	<?php
	
		$button_1 = get_field('button_1', 'option');
		$button_2 = get_field('button_2', 'option');
		$menu_items = get_field('menu_items', 'option');
		$expandable_menu = get_field('expandable_menu', 'option');
	?>
	<header class="site-header">

		<div class="site-header__wrap">
			<div class="container-fluid">
				<div class="row">
					<div class="col col-12 col--main">


						<div class="logo">
							<a href="<?php echo site_url(); ?>">
								<img class="default black" src="<?php echo $theme_options['brand']['logo']['url']; ?>">
								<img class="white" src="<?php echo $theme_options['brand']['logo_white']['url']; ?>">
							</a>
						</div>
						<nav class="site-navigation nav">

						<?php if( $menu_items ): ?>

							<ul>
								<?php foreach( $menu_items as $index => $item): ?>
								<li>
									<?php echo acf_button( $item['link'] ); ?>
								</li>
								<?php endforeach; ?>
							</ul>

						<?php endif; ?>

						</nav>
						<div class="actions">

							<ul>
								<li>
									<?php echo acf_button( $button_1, 'btn'); ?>
								</li>
								<li>
									<?php echo acf_button( $button_2, 'btn'); ?>
								</li>
							</ul>

							<button class="menu-button js--open-menu">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/burger-icon-dark.svg" alt="Menu">
							</button>

						</div>

					</div>
				</div>
			</div>
		</div>


	</header>
