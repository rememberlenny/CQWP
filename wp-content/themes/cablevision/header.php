<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package cablevision
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
<link href="/stylesheets/print.css" media="print" rel="stylesheet" type="text/css" />
<!--[if IE]>
    <link href="/stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
<![endif]-->
<?php wp_head(); ?>

<style>
	
	#masthead{
		margin-top: 2.5em;
		margin-bottom: .5em;
	}
	#site-navigation{
		margin-top: 1em;
	}
	header .search-container{
		float: right;
		display: inline-block;
	}
	.site-title{
		display:inline-block;
	}
	#headerNav{
		clear: both;
	}
	.topicHeading-ad-container h2 {
		float: left;
		width: 74%;
		text-align: center;
	}
	.topicHeading-ad-container {
	height: 78px;
	}
	.topicHeading-ad-container a, .topicHeading-ad-container span {
		line-height: 80px;
	}
	.subheading{
		margin-bottom: 1.2em;
	}
	.topicHeading-ad-container h2 {
		float: none;
		width: 100%;
	}
	.topicHeading-ad-container {
		width: 100%;
	}
</style>

</head>

<body id="wrap-page" <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="container-16 site-header" role="banner">
		<div class="site-branding grid-16">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php if ( function_exists( 'ot_get_option' ) ) {
  $test_input = ot_get_option( 'header_logo' );
}; echo $test_input;?>" alt="<?php bloginfo( 'name' ); ?>"></a></h1>
			<div class="search-container"><?php get_search_form(); ?></div>
		</div>
		
		<nav id="site-navigation" class="grid-16 main-navigation" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'cablevision' ); ?></h1>
			<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'cablevision' ); ?>"><?php _e( 'Skip to content', 'cablevision' ); ?></a></div>

			<?php
				$defaults = array(
					'theme_location'  => 'primary',
					'menu'            => '',
					'container'       => 'div',
					'container_class' => '',
					'container_id'    => 'primaryNav',
					'menu_class'      => 'menu',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				);
				wp_nav_menu( $defaults ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="container-16 clearfix subhead-subnav">
