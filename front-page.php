<?php
/**
 * Template Name: Home Page New
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 */

get_header(); ?>
<main id="home-page" class="site-main" role="main">
	<section class="content-area home-page">
		<?php get_template_part('parts/homepage/hero'); ?>
	</section>
</main>

<?php get_footer(); ?>
