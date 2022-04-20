<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WBAfG_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;700&display=swap" rel="stylesheet"> 
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:wght@200;300;400;500;600;700&display=swap" rel="stylesheet"> 
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<header id="masthead" class="site-header">

		<div id="header-container-opened">
			<div class="header-top">
				<a href="javascript:void(0)" onclick="closeMenu()"><img id="icon-x-close" src="./wp-content/themes/wbafg-theme/assets/header/icon_x.svg" alt=""></a>
				<img id="logo" src="./wp-content/themes/wbafg-theme/assets/header/logo_2.svg" alt="">
			</div>
			<div class="header-nav">
				<nav id="main-navigation">
					<?php
						wp_nav_menu( array(
							'menu'    => 'main',
						) );
					?>
				</nav>
			</div>
			<div class="header-sm">
				<a href="https://www.instagram.com/wbafg/" target="_blank" class="fa fa-instagram"></a>
				<a href="https://www.facebook.com/wbafg/" target="_blank" class="fa fa-facebook"></a>
			</div>
			<div class="header-nav-secondary">
				<nav id="secondary-navigation">
					<?php
						wp_nav_menu( array(
							'menu'    => 'footer',
						) );
					?>
				</nav>
			</div>
		</div>

		<div id="header-container-closed">
			<div class="header-top">
				<a href="javascript:void(0)" onclick="openMenu()"><img id="burger-icon" src="./wp-content/themes/wbafg-theme/assets/header/burger.svg" alt=""></a>
				<img id="logo-mobile" src="./wp-content/themes/wbafg-theme/assets/header/logo_mobile.svg" alt="">
			</div>
		</div>

	</header><!-- #masthead -->
