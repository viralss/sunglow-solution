<?php
/**
 * Template Name: Contact
 *
 * @package _s
 */

get_header(); ?>

<!-- Begin Small Hero Block -->
	<section class="hero small accent parallax top-bg" style="background-image: url(<?php bloginfo('template_url'); ?>/images/keyboard.jpg); background-position: 50% -236px;">

		<!-- Heading -->
		<div class="hero-content container">
			<h1>Get in touch.</h1>
		</div><!-- END -->

		<!-- Button -->
		<div class="sub-hero container">
			<span class="line"></span>
		</div><!-- END -->

	</section>
	<!-- End Small Hero Block -->

	<!-- Begin Contact Form Block -->
	<section class="container content">

		<!-- Title -->
		<div class="row">
			<div class="center title col-sm-12">
				<h2>Contact us.</h2>
				<p>Want to make your brand awesome? Just get in touch we don't bite.</p>
			</div>
		</div><!-- END-->
		
		<div class="contact-form">
			<?php 
			if (have_posts()) :
			   	while (have_posts()) :
			    	the_post();
			         the_content();
			   	endwhile;
			endif;
			?>
		</div>
		
	</section>
	<!-- End Contact Form Block -->

	<!-- Begin Map Block -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script type="text/javascript">
            function initialize() {
			  var myLatlng = new google.maps.LatLng(19.122621,72.838023);
			  var mapOptions = {
			    zoom: 13,
			    scrollwheel: false,
			    center: myLatlng,
			    styles: [{"stylers":[{"hue": "#2db4d8", "lightness" : 100}]}]
			  }
			  var map = new google.maps.Map(document.getElementById('map'), mapOptions);

			  var marker = new google.maps.Marker({
			      position: myLatlng,
			      map: map,
			      title: 'Form'
			  });
			}

			google.maps.event.addDomListener(window, 'load', initialize);
			google.maps.event.addDomListener(window, 'resize', initialize);
	</script>
	<section id="map" class="clearfix">
		
	</section>
	<!-- End Map Block -->

<?php get_footer(); ?>