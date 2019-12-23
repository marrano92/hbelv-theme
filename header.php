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
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Great+Vibes:400%7CCormorant:400%7CMuli:400,600,700&amp;subset=latin,latin,latin" media="all">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes:400%7CCormorant:400%7CMuli:400,600,700&subset=latin,latin,latin" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<?php
do_action( 'wp_body_open' );

 get_template_part('parts/header/top-bar'); ?>
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

