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

$container               = get_theme_mod( 'understrap_container_type' );
$query_monitor_is_active = in_array( 'query-monitor/query-monitor.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) );
$change_menu             = is_user_logged_in() && $query_monitor_is_active;
$menu_string_1           = $change_menu ? 'query-monitor-32' : '';
$menu_string_2           = $change_menu ? 'query-monitor-91' : '';

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
<div class="site demo1" id="page">
	<!-- ******************* The Navbar Area ******************* -->
		<div id="burgerBtn"></div>
		<ul id="nav">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
		<div id="mobileBodyContent">
			<div id="header"></div>
			<div id="image">
				<img src="https://s3-eu-west-1.amazonaws.com/ugly.cloud/2017/02/codepen-pure-css-mobile-nav-anim.jpg" alt="" />
			</div>
			<div id="title"></div>
			<div id="text">
				<div class="item"></div>
				<div class="item"></div>
				<div class="item"></div>
				<div class="item"></div>
				<div class="item"></div>
				<div class="item"></div>
				<div class="item"></div>
				<div class="item"></div>
				<div class="item"></div>
			</div>
		</div>
	<?php
	//	wp_nav_menu(
	//		array(
	//			'theme_location'  => 'primary',
	//			'container_class' => 'collapse navbar-collapse',
	//			'container_id'    => 'navbarNavDropdown',
	//			'menu_class'      => 'navbar-nav ml-auto',
	//			'fallback_cb'     => '',
	//			'menu_id'         => 'main-menu',
	//			'depth'           => 2,
	//			'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
	//		)
	//	);
	?>

