<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">
	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">
		<ul id="gn-menu" class="gn-menu-main">
			<li class="gn-trigger">
				<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
				<nav class="gn-menu-wrapper">
					<div class="gn-scroller">
						<ul class="gn-menu">
							<li class="gn-search-item">
								<input placeholder="Search" type="search" class="gn-search">
								<a class="gn-icon gn-icon-search"><span>Search</span></a>
							</li>
							<li>
								<a class="gn-icon gn-icon-download">Downloads</a>
								<ul class="gn-submenu">
									<li><a class="gn-icon gn-icon-illustrator">Vector Illustrations</a></li>
									<li><a class="gn-icon gn-icon-photoshop">Photoshop files</a></li>
								</ul>
							</li>
							<li><a class="gn-icon gn-icon-cog">Settings</a></li>
							<li><a class="gn-icon gn-icon-help">Help</a></li>
							<li>
								<a class="gn-icon gn-icon-archive">Archives</a>
								<ul class="gn-submenu">
									<li><a class="gn-icon gn-icon-article">Articles</a></li>
									<li><a class="gn-icon gn-icon-pictures">Images</a></li>
									<li><a class="gn-icon gn-icon-videos">Videos</a></li>
								</ul>
							</li>
						</ul>
					</div><!-- /gn-scroller -->
				</nav>
			</li>
			<li><a href="http://tympanus.net/codrops">Codrops</a></li>
			<li><a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/HeaderEffects/"><span>Previous Demo</span></a></li>
			<li><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=16030"><span>Back to the Codrops Article</span></a></li>
		</ul>
	</div>
	<div class="header-image-default">

	</div>
