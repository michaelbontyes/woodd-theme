<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package woodd
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'woodd' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div><!-- .site-branding -->


		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Primary Menu', 'woodd' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	
    <header class="centered-navigation" role="banner">
        <div class="centered-navigation-wrapper">
        <a href="javascript:void(0)" class="mobile-logo">
          <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_3_dark.png" alt="Logo image">
        </a>
        <a href="javascript:void(0)" id="js-centered-navigation-mobile-menu" class="centered-navigation-mobile-menu">MENU</a>
        <nav role="navigation">
          <ul id="js-centered-navigation-menu" class="centered-navigation-menu show">
            <li class="nav-link"><a href="javascript:void(0)">Products</a></li>
            <li class="nav-link"><a href="javascript:void(0)">About Us</a></li>
            <li class="nav-link"><a href="javascript:void(0)">Contact</a></li>
            <li class="nav-link logo">
              <a href="javascript:void(0)" class="logo">
                <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_3_dark.png" alt="Logo image">
              </a>
            </li>
            <li class="nav-link"><a href="javascript:void(0)">Testimonials</a></li>
            <li class="nav-link more"><a href="javascript:void(0)">More</a>
              <ul class="submenu">
                <li><a href="javascript:void(0)">Submenu Item</a></li>
                <li><a href="javascript:void(0)">Another Item</a></li>
                <li class="more"><a href="javascript:void(0)">Item with submenu</a>
                  <ul class="submenu">
                    <li><a href="javascript:void(0)">Sub-submenu Item</a></li>
                    <li><a href="javascript:void(0)">Another Item</a></li>
                  </ul>
                </li>
                <li class="more"><a href="javascript:void(0)">Another submenu</a>
                  <ul class="submenu">
                    <li><a href="javascript:void(0)">Sub-submenu</a></li>
                    <li><a href="javascript:void(0)">An Item</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="nav-link"><a href="javascript:void(0)">Sign up</a></li>
          </ul>
        </nav>
      </div>
    </header>

	<div id="content" class="site-content">
