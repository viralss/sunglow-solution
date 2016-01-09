<?php

/**

 * Template Name: Career

 *

 * @package _s

 */



get_header(); ?>
	<section class="hero small accent parallax top-bg" style="background-image: url(<?php bloginfo('template_url'); ?>/images/keyboard.jpg); background-position: 50% -236px;">



		<!-- Heading -->

		<div class="hero-content container" style="margin-top: 280px;">

			<h1>Careers.</h1>

		</div><!-- END -->



		<!-- Button -->

		<div class="sub-hero container">

			<span class="line"></span>

		</div><!-- END -->



	</section>

	<!-- End Small Hero Block -->



	

	<!-- Begin Overview Block -->

	<section class="content container">
		<div class="row">
			<div class="career">
			<h2 class="title">Current Openings</h3>
						<?php 

						if (have_posts()) :

						   	while (have_posts()) :

						    	the_post();

						         the_content();

						   	endwhile;

						endif;

						?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>