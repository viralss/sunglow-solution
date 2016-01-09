<?php
/**
 * Template Name: Infra
 *
 * @package _s
 */

get_header(); ?>

<!-- Begin Large Hero Block -->
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
	<section class="hero work small accent parallax top-bg" style="background-image: url(<?php echo $image[0]; ?>);">

		<!-- Heading -->
		<div class="hero-content container">
			<h1>Our work / <?php the_title();?>.</h1>
		</div><!-- END -->

		<!-- Button -->
		<div class="sub-hero container">
			<span class="line"></span>
		</div><!-- END -->

	</section>
	<!-- End Large Hero Block -->
	<div class="comingsoon-image">
		<img src="<?php echo get_bloginfo("template_url"); ?>/images/deskstop.jpg" style="width:100%">
	</div>



<?php get_footer(); ?>