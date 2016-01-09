<?php
/**
 * The 404 template file.
 *
 * @package _s
 */

get_header(); ?>

	<!-- <section class="hero small accent parallax top-bg" style="background-image: url(<?php bloginfo('template_url'); ?>/images/keyboard.jpg); background-position: 50% -236px;">
		<div class="container">
			<h1>Oops. You seem lost.</h1>
			<a class="button white" href="/">Get back home</a>
		</div>
	</section> -->

<section class="hero small accent parallax top-bg" style="background-image: url(<?php bloginfo('template_url'); ?>/images/keyboard.jpg); background-position: 50% -236px; min-height:650px;">

	<!-- Heading -->
	<div class="hero-content container" style="margin-top: 280px;">
		<h1>Oops. You seem lost.</h1>
		<a class="button white" href="/">Get back home</a>
	</div><!-- END -->

</section>
	<!-- End Small Hero Block -->

<?php get_footer(); ?>