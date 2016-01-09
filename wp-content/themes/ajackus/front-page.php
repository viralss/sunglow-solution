<?php
/**
 * The main template file.
 *
 * @package _s
 */
get_header(); ?>
<!-- Begin Large Hero Block -->
	<section class="hero accent parallax top-bg" style="background-image: url(<?php bloginfo('template_url'); ?>/images/keyboard.jpg);">
		<!-- Heading -->
		<div class="hero-content container">
			<h1>Print. Web. Mobile.</h1>
		</div><!-- END -->
		<!-- Button -->
		<div class="sub-hero container">
			<span class="line"></span>
			<a class="button white learn-more" href="/about/#what">Learn More</a>
		</div><!-- END -->
	</section>
	<!-- End Large Hero Block -->
	<!-- Begin Testimonials Block -->
	<section class="content container">
		<!-- Title -->
		<div class="row">
			<div class="title center col-sm-12">
				<h2>What people are saying.</h2>
				<p>Don't trust what we say. Trust 'em!</p>
				<div class="testimonial-pager"></div>
			</div>
		</div><!-- END -->
		<!-- Testimonials -->
		<div class="row">
			<div class="col-sm-12 animated fade" data-appear-bottom-offset="100">
				<ul class="testimonials">
					<li><p class="testimonial">“Nice design! Looks great on our iPad too – and this is not the case with most websites honestly!”</p><p class="highlighted">Mihir Sheth <small>via EHO Designs</small></p></li>
					<li><p class="testimonial">Great work. Easy to navigate & super easy to understand. Well done!”</p><p class="highlighted">Shailesh Ratilal <small>via Divine Diamond</small></p></li>
				</ul>
			</div>
		</div><!-- END -->
		
	</section>
	<!-- End Testimonials Block -->
	<!-- Begin Recent Work Block -->
	<section class="recent-work content dark parallax" style="background-image: url(<?php bloginfo('template_url'); ?>/images/ipad-hands.jpg);">
			<!-- Title and Subtitle -->
			<div class="container">
				<div class="row">
				<div class="col-sm-12 center">
					<h2>Our featured work.</h2>
					<p>We are never at ease to ensure our clients are.</p>
				</div>
				</div>
			</div><!-- END -->
			<!-- Slider -->
			
			<div id="recent-gallery" class="royalSlider rsDefault visibleNearby">
			<?php $slug_name = get_term( 'slug' ,'project-industry') ?>
				<?php 
					$arg=array(
						'post_type' => 'project',
						'posts_per_page' => 5,
						'project-industry'=> 'featured'
						);
					$wp_query= new WP_Query($arg); ?>	
				<?php while ($wp_query->have_posts()): $wp_query->the_post(); ?>
				
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
  							 <?php the_post_thumbnail('project-thumb'); ?>
   						</a>
   					
				<?php endwhile; wp_reset_query(); ?>
				
				
			</div><!-- END -->
			<!-- Button -->
			<div class="container">
				<div class="center padded col-sm-12">
					<a href="<?php get_home_url(); ?>/web" class="button white">View all</a>
				</div>
			</div><!-- END -->
	</section>
	<!-- End Recent Work Block -->
	<!-- Begin Client Logos Block -->
	<section class="clients common-logo-styles container">
		<div class="row">
			<div class="logo animated fade" data-appear-bottom-offset="100">  
				<a href="http://www.hrxbrand.com/" target="_blank">
					<img id="client-1" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/hrx.png" alt="client"/>
					<img id="client-1" class="hover-img" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/hrx-new.png" alt="client"/>
				</a>
			</div>		
			<div class="logo animated fade" data-appear-bottom-offset="100">
				<a href="http://growhouse.in/" target="_blank">
					<img id="client-2" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/growhouse.png" alt="client"/>
					<img id="client-2" class="hover-img" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/growhouse-new.png" alt="client"/>
				</a>
			</div>
			<div class="logo animated fade" data-appear-bottom-offset="100">
				<a href="http://www.vogueweddingshow.in/" target="_blank" >
					<img id="client-3" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/vogue.png" alt="client" />
					<img id="client-3" class="hover-img" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/vogue-new.png" alt="client"/>
					
				</a>
			</div>
			<div class="logo animated fade" data-appear-bottom-offset="100">
				<a href="http://solgari.com/" target="_blank">
					<img id="client-4" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/solgari.png" alt="client" />
					<img id="client-4" class="hover-img" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/solgari-new.png" alt="client"/>
					
				</a>
			</div>
			<div class="logo animated fade" data-appear-bottom-offset="100">
				<a href="http://www.eden-festival.com/" target="_blank">
					<img id="client-5" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/eden.png" alt="client" />
					<img id="client-5" class="hover-img" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/eden-new.png" alt="client"/>
				</a>
			</div>
			<div class="logo animated fade" data-appear-bottom-offset="100">
				<a href="http://www.bhavishyavanifuturesoundz.com/" target="_blank">
					<img  id="client-6" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/bha.png" alt="client" />
					<img  id="client-6" class="hover-img" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/bha-new.png" alt="client" />
				</a>
			</div>
			<div class="logo animated fade" data-appear-bottom-offset="100">
				<a href="http://www.culturemachines.com/" target="_blank">
					<img id="client-7" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/cm.png" alt="client"/>
					<img  id="client-7" class="hover-img" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/cm-new.png" alt="client" />
				</a>
			</div>
			<div class="logo animated fade" data-appear-bottom-offset="100">
				<a href="http://www.wildeastgroup.com/" target="_blank">
					<img id="client-8" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/weg.png" alt="client" />
					<img  id="client-8" class="hover-img" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/weg-new.png" alt="client" />
				</a>
			</div>
			<div class="logo animated fade" data-appear-bottom-offset="100">
				<a href="https://www.instarem.com/" target="_blank">
					<img id="client-9" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/instarem.png" alt="client" />
					<img  id="client-9" class="hover-img" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/instarem-hover.png" alt="client" />
				</a>
			</div>
			<div class="logo animated fade" data-appear-bottom-offset="100">
				<a href="http://zoiro.com/" target="_blank">
					<img id="client-10" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/zoiro.png" alt="client" />
					<img  id="client-10" class="hover-img" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/zoiro-hover.png" alt="client" />
				</a>
			</div>	
			<div class="logo animated fade" data-appear-bottom-offset="100">
				<a href="http://pinax.co/" target="_blank">
					<img id="client-11" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/pinax.png" alt="client" />
					<img  id="client-11" class="hover-img" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/pinax-hover.png" alt="client" />
				</a>
			</div>
			<div class="logo animated fade" data-appear-bottom-offset="100">
				<a href="http://writercorporation.ajackus.com/" target="_blank">
					<img id="client-12" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/writer.png" alt="client" />
					<img  id="client-12" class="hover-img" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/writer-hover.png" alt="client" />
				</a>
			</div>		
		</div>
	</section>
	<!-- End Client Logos Block -->
	<!-- Begin Technologies Block -->
	<section class="technologies common-logo-styles container" style="display:none;">
		<h2>Technologies.</h2>
		<div class="row">
			<div class="logo animated fade" data-appear-bottom-offset="100">  
				<img id="technology-1" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/ajax.png" alt="Ajax"/>
			</div>		
			<div class="logo animated fade" data-appear-bottom-offset="100">
				<img id="technology-2" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/jquery.png" alt="jQuery"/>
			</div>
			<div class="logo animated fade" data-appear-bottom-offset="100">
				<img id="technology-3" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/html.png" alt="HTML" />
			</div>
			<div class="logo animated fade" data-appear-bottom-offset="100">
				<img id="technology-4" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/css.png" alt="CSS" />
			</div>
			<div class="logo animated fade" data-appear-bottom-offset="100">
				<img id="technology-5" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/php.png" alt="PHP" />
			</div>
			<div class="logo animated fade" data-appear-bottom-offset="100">
				<img id="technology-6" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/mysql-logo.png" alt="My SQL" />
			</div>
			<div class="logo animated fade" data-appear-bottom-offset="100">
				<img id="technology-7" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/backbone.png" alt="Backbone js" />
			</div>	
			<div class="logo animated fade" data-appear-bottom-offset="100">
				<img id="technology-8" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/angular.png" alt="Angular js" />
			</div>
			<div class="logo animated fade" data-appear-bottom-offset="100">
				<img id="technology-9" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/ember.jpg" alt="Ember js" />
			</div>		
		</div>
	</section>
	<!-- End Technologies Block -->
	<!-- Begin Technologies Block -->
	<section class="framework common-logo-styles container" style="display:none;">
		<h2>Frameworks.</h2>
		<div class="row">
			<div class="logo animated fade" data-appear-bottom-offset="100">  
				<img id="framework-1" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/bootstrap.png" alt="Bootstrap"/>
			</div>		
			<div class="logo animated fade" data-appear-bottom-offset="100">
				<img id="framework-2" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/foundation.png" alt="Foundation"/>
			</div>
			<div class="logo animated fade" data-appear-bottom-offset="100">
				<img id="framework-3" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/wordpress.png" alt="Wordpress"/>
			</div>
			<div class="logo animated fade" data-appear-bottom-offset="100">
				<img id="framework-4" src="<?php echo get_bloginfo("template_url"); ?>/images/logos/laravel.png" alt="laravel" />
			</div>
		</div>
	</section>
	<!-- End Technologies Block -->
	<!-- Begin Call to Action Block -->
	<section class="call-to-action content light">
		<div class="container">
			<!-- Title -->
			<div class="row">
				<div class="title col-lg-12">
					<h2>Are you impressed?</h2>
					<p>If so, why don’t you get in touch with us so we can talk about your projects.</p>
				</div>
			</div><!-- END -->
			<!-- Actions -->
			<div class="row">
				<div class="actions padded col-lg-12">
					<a class="button accent-alt" href="/contact">Contact us</a>
				</div>
			</div><!-- END -->
		</div>
	</section>
	<!-- End Call to Action Block -->
<?php get_footer(); ?>