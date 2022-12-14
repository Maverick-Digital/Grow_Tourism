<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>

</head>

<?php
$navbar_scheme   = get_theme_mod('navbar_scheme', 'navbar-light bg-light'); // Get custom meta-value.
$navbar_position = get_theme_mod('navbar_position', 'static'); // Get custom meta-value.

$search_enabled  = get_theme_mod('search_enabled', '1'); // Get custom meta-value.
?>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<a href="#main" class="visually-hidden-focusable"><?php esc_html_e('Skip to main content', 'grow-tourism'); ?></a>

	<div id="wrapper">
		<header>
			<nav id="header" class="navbar navbar-expand-md text-primary top-navigation <?php echo esc_attr($navbar_scheme);
																						if (isset($navbar_position) && 'fixed_top' === $navbar_position) : echo ' fixed-top';
																						elseif (isset($navbar_position) && 'fixed_bottom' === $navbar_position) : echo ' fixed-bottom';
																						endif;
																						if (is_home() || is_front_page()) : echo ' home';
																						endif; ?>">
				<div class="container">
					<a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
						<?php
						$header_logo = get_theme_mod('header_logo'); // Get custom meta-value.

						if (!empty($header_logo)) :
						?>
							<img id="darklLogo" src="<?php echo esc_url($header_logo); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" />
						<?php
						else :
							echo esc_attr(get_bloginfo('name', 'display'));
						endif;
						?>
						<img style="display: none;" id="lightLogo" src="https://wordpress-572332-2777368.cloudwaysapps.com/wp-content/uploads/2022/08/Grow-Tourism-logo_white.svg" alt="" srcset="">
					</a>

					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'blank'); ?>">
						<span class="navbar-toggler-icon"></span>
					</button>

					<!-- <a class="navbar-toggler btn btn-light text-primary" data-bs-toggle="offcanvas" href="#offcanvasMenu" role="button" aria-controls="offcanvasMenu">
							<i class="fa-solid fa-bars"></i>
						</a> -->

					<div id="navbar" class="collapse navbar-collapse flex-grow-0 align-items-end">
						<div class="d-md-flex flex-column align-items-end full-height-menu-mobile">

							<div class="d-md-flex mb-md-2 align-items-center social-icons-header">
								<div class="text-center my-sm-1 my-md-0 social-icons-wrap">
									<a target="_blank" href="https://www.linkedin.com/company/grow-tourism/" class="fs-5 text pe-2"><i class="fa-brands fa-linkedin"></i></a>
									<a target="_blank" href="https://www.instagram.com/growtourism/" class="fs-5 text pe-2"><i class="fab fa-instagram-square"></i></a>
								</div>
								<?php

								// Loading WordPress Custom Menu (theme_location).
								wp_nav_menu(
									array(
										'theme_location' => 'header-top-menu',
										'container'      => '',
										'menu_class'     => 'navbar-nav mb-sm-1  mb-md-0',
										'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
										'walker'         => new WP_Bootstrap_Navwalker(),
									)
								); ?>

							</div>

							<?php // Loading WordPress Custom Menu (theme_location).
							wp_nav_menu(
								array(
									'theme_location' => 'main-menu',
									'container'      => '',
									'menu_class'     => 'navbar-nav me-auto mobile-menu',
									'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
									'walker'         => new WP_Bootstrap_Navwalker(),
								)
							); ?>
							<?php
							if ('1' === $search_enabled) :
							?>
								<form class="search-form my-2 my-lg-0" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
									<div class="input-group">
										<input type="text" name="s" class="form-control" placeholder="<?php esc_attr_e('Search', 'grow-tourism'); ?>" title="<?php esc_attr_e('Search', 'grow-tourism'); ?>" />
										<button type="submit" name="submit" class="btn btn-outline-secondary"><?php esc_html_e('Search', 'grow-tourism'); ?></button>
									</div>
								</form>
							<?php
							endif;
							?>

						</div>
						<!-- <a class="btn btn-light text-primary" data-bs-toggle="offcanvas" href="#offcanvasMenu" role="button" aria-controls="offcanvasMenu">
							<i class="fa-solid fa-bars"></i>
						</a> -->
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container -->
			</nav><!-- /#header -->
		</header>

		<?php
		if (is_front_page()) : ?>
			<div class="pt-5 home-header">
				<div class="container py-5 text-center text-white">
					<h1 class="display-5 fw-normal">Learn the skills, insights and knowledge to deliver <br><strong>world-class tourism experiences</strong></h1>
					<p class="fs-4">The key to unlocking high-value tourism in New Zealand is developing our people.</p>
					<!-- <button class="btn btn-light btn-lg rounded-pill mt-2" type="button">Learn more <i class="fa-solid fa-arrow-right"></i></button> -->
				</div>
				<div class="container-fluid d-flex align-items-center justify-content-between px-0 hero-images">
					<div data-aos="fade-up" class="">
						<img class="img-fluid" src="https://wordpress-572332-2777368.cloudwaysapps.com/wp-content/uploads/2022/07/1.png" alt="" srcset="">
					</div>
					<div data-aos="fade-up" class="d-none d-md-block">
						<img class="img-fluid" src="https://wordpress-572332-2777368.cloudwaysapps.com/wp-content/uploads/2022/08/5-1.png" alt="" srcset="">
					</div>
					<div data-aos="fade-up" class="d-none d-md-block">
						<img class="img-fluid" src="https://wordpress-572332-2777368.cloudwaysapps.com/wp-content/uploads/2022/08/6.png" alt="" srcset="">
					</div>
					<div data-aos="fade-up" class="">
						<img class="img-fluid" src="https://wordpress-572332-2777368.cloudwaysapps.com/wp-content/uploads/2022/07/4.png" alt="" srcset="">
					</div>
				</div>
			</div>
		<?php else :

		endif;
		?>



		<main id="main" class="" <?php if (isset($navbar_position) && 'fixed_top' === $navbar_position) : echo ' ';
									elseif (isset($navbar_position) && 'fixed_bottom' === $navbar_position) : echo ' style="padding-bottom: 100px;"';
									endif; ?>>
			<?php
			// If Single or Archive (Category, Tag, Author or a Date based page).
			if (is_single() || is_archive()) :
			?>
				<div class="row g-0">
					<div class="col-md-12 col-sm-12">
					<?php
				endif;
					?>
					<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
						<div class="offcanvas-header">
							<a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
								<?php
								$header_logo = get_theme_mod('header_logo'); // Get custom meta-value.

								if (!empty($header_logo)) :
								?>
									<img src="<?php echo esc_url($header_logo); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" />
								<?php
								else :
									echo esc_attr(get_bloginfo('name', 'display'));
								endif;
								?>
							</a>
							<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
						</div>
						<div class="offcanvas-body pt-0">
							<div class="mb-3">
								<p>
									Grow Tourism is equipping a workforce with the skills, insights and knowledge to build New Zealand???s high value tourism future.
								</p>
							</div>
							<?php
							// Loading WordPress Custom Menu (theme_location).
							wp_nav_menu(
								array(
									'theme_location' => 'offcanvas-menu',
								)
							);

							if ('1' === $search_enabled) :
							?>
								<form class="search-form my-2 my-lg-0" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
									<div class="input-group">
										<input type="text" name="s" class="form-control" placeholder="<?php esc_attr_e('Search', 'grow-tourism'); ?>" title="<?php esc_attr_e('Search', 'grow-tourism'); ?>" />
										<button type="submit" name="submit" class="btn btn-outline-secondary"><?php esc_html_e('Search', 'grow-tourism'); ?></button>
									</div>
								</form>
							<?php
							endif;
							?>










						</div>
					</div>