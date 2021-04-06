<?php?>
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'cheerstheme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<div class="logo-download-icons">
				<?php the_custom_logo(); ?>
				<?php 
				if ( is_front_page() && is_home() ) :
					?>
					<a href="#"><img src="./wp-content/themes/cheerstheme/images/download-cheers.svg" alt="download" class="download-img"></a>
					<?php
				else :
					?>
					<a href="#"><img src="../wp-content/themes/cheerstheme/images/download-cheers.svg" alt="download" class="download-img"></a>
				<?php endif; ?>		
			</div>	

			<?php 
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$cheerstheme_description = get_bloginfo( 'description', 'display' );
			if ( $cheerstheme_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $cheerstheme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<div class="icon-wrapper">
			<!-- changes to button with JS, this is just a container-->
			<div hidden class="data-menu-button">Menu</div>
			</div>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'container'  =>  'div',
					'container_class'  =>  'nav-menu data-menu'
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
