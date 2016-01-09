<?php

// Shortcodes

function feature( $atts ) {
     extract( shortcode_atts( array(
	      'type' 	=> 'feature'
     ), $atts ) );

    if ($type == 'ecommerce') {
	     return '<div class="project-feature"><i class="icon gray cart"></i><div>Ecommerce</div></div>';
	}else if($type == 'cms') {
		return '<div class="project-feature"><i class="icon gray config"></i><div>CMS Powered</div></div>';
	}else if($type == 'payment') {
		return '<div class="project-feature"><i class="icon gray credit"></i><div>Payment Gateway Integration</div></div>';
	}else if($type == 'cdn') {
		return '<div class="project-feature"><i class="icon gray cloud"></i><div>CDN Powered</div></div>';
	}else if($type == 'responsive') {
		return '<div class="project-feature"><i class="icon gray phone"></i><div>Responsive Design</div></div>';
	}else if($type == 'seo') {
		return '<div class="project-feature"><i class="icon gray search"></i><div>Search Engine Optimised</div></div>';
	}else if($type == 'parallax') {
		return '<div class="project-feature"><i class="icon gray photo-gallery"></i><div>Parallax</div></div>';
	}else if($type == 'static') {
		return '<div class="project-feature"><i class="icon gray browser"></i><div>Static</div></div>';
	}else if($type == 'rsvp') {
		return '<div class="project-feature"><i class="icon gray mouse"></i><div>RSVP</div></div>';
	}else if($type == 'parallax-slider') {
		return '<div class="project-feature"><i class="icon gray photo-gallery"></i><div>Slider with Parallax Layer Effects</div></div>';
	}else if($type == 'fancy-gallery') {
		return '<div class="project-feature"><i class="icon gray photo-gallery"></i><div>Fancy Image Gallery with Infinite Scroll</div></div>';
	}else if($type == 'social-network') {
		return '<div class="project-feature"><i class="icon gray share"></i><div>Integration with Different Social Networks</div></div>';
	}else if($type == 'wedding') {
		return '<div class="project-feature"><i class="icon gray gift"></i><div>Wedding Website</div></div>';
	}else if($type == 'guestbook') {
		return '<div class="project-feature"><i class="icon gray notebook"></i><div>Guest Book</div></div>';
	}else if($type == 'webapp') {
		return '<div class="project-feature"><i class="icon gray phone"></i><div>Web Application</div></div>';
	}else if($type == 'forums') {
		return '<div class="project-feature"><i class="icon gray news-paper"></i><div>Web Forum</div></div>';
	}else if($type == 'smart scroll') {
		return '<div class="project-feature"><i class="icon gray mouse"></i><div>Smart Scrolling</div></div>';
	}else if($type == 'secured') {
		return '<div class="project-feature"><i class="icon gray lock"></i><div>Secured</div></div>';
	}else if($type == 'instagram') {
		return '<div class="project-feature"><i class="icon gray camera"></i><div>Instagram Integration with Blog</div></div>';
	}else if($type == 'salesforce') {
		return '<div class="project-feature"><i class="icon gray user"></i><div>Salesforce Integration</div></div>';
	}else if($type == 'vertical-menu') {
		return '<div class="project-feature"><i class="icon gray keypad"></i><div>Vertical Side Menu</div></div>';
	}else if($type == 'fancy-carousel') {
		return '<div class="project-feature"><i class="icon gray video"></i><div>Fancy Media Carousel Slider</div></div>';
	}else {
		return '<div class="project-feature"><i class="icon gray mouse"></i><div>CMS Powered</div></div>';
	}
}

add_shortcode( 'feature', 'feature' ); 

?>