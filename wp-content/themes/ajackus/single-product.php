<?php
/**
 * Template Name: Single-Project
 *
 * @package _s
 */
get_header(); ?>
		
	<div class="sticky-head" style="overflow: hidden; display: none;"></div>
	<!-- End Navigation -->
	<!-- Begin Small Hero Block -->
	<?php
		
		if (function_exists('has_post_thumbnail')) {
		    if ( has_post_thumbnail() ) {
		    	$post_thumbnail_id = get_post_thumbnail_id();
				$post_thumbnail_url = wp_get_attachment_image_src( $post_thumbnail_id , 'large' );
		    }
		}
	?>
	
	<section itemscope itemtype="http://schema.org/WebApplication" class="hero small accent parallax" style="background: url(<?php echo $post_thumbnail_url[0] ?>) no-repeat 50% 0px ; background-size: cover;" >
		<!-- Heading -->
		<div class="hero-content container col-xs-offset-3 col-xs-6" style="margin-top: 279.5px;">
			<div class="launch-date">
				<p itemprop="datePublished"><?php echo types_render_field("launch-date",'')?><p>
			</div>
			<h1 itemprop="name"><?php echo get_the_title(); ?>.</h1>
			<div class="domain-link">
				<?php $args = array(
					"output"=>"raw"
				); ?>
				<a itemprop="url" href="<?php echo types_render_field("product-url",$args)?>" target="_blank"><?php $sentence=types_render_field("product-url",$args);$sentence = preg_replace('(^https?://)', '', $sentence);echo $sentence?></a>
			</div>
			
			<div class="assigned-tags">
			
			<?php 
				$terms = wp_get_object_terms( $post->ID, 'post_tag', array('fields' => 'all') ); // get all the terms on that post
				$images = get_option('taxonomy_image_plugin'); 
				foreach($terms as $term) { 
				    $term_id = $term->term_taxonomy_id; ?>  
			
				    <li data-toggle="tooltip" data-placement="top" data-original-title="<?php echo $term->description; ?>" class="tag-description"><a href="/tag/<?php echo $term->slug;?>"><?php echo $term->name; ?></a></li>
			<?php	}
			?>
			</div>
		</div><!-- END -->
		<!-- Navigation -->
		<div class="sub-hero container">
			<?php if( 'product' == get_post_type() ) { ?>
				<ul class="project-nav">				
					<li class="prev-project clearfix nav-previous   col-xs-4"><div class="previous-center"><?php next_post_link('%link', 'Previous', FALSE); ?></div></li>
					<li class="all-project clearfix  col-xs-4"><div class="all-center"><a href="<?php get_home_url(); ?>/products"><i class="icon keypad white"></i></a></div></li>
					<li class="next-project clearfix nav-next  col-xs-4"><?php previous_post_link('%link', 'Next', FALSE); ?></li>			    
				</ul>
			<?php } ?>
			
			
		</div><!-- END -->
		
	</section>
	<!-- End Small Hero Block -->
	<!-- Begin Overview Block -->

	<section class="center-mobile overview-block content container">
		<div class="row">
			<div class="col-sm-12 center">
				<h2>About.</h2>
				<?php $args = array(
					"output"=>"raw"
				); ?>
				<div class="challenge-content">
					<?php echo types_render_field("product-description",$args); ?>
				</div>
				
			</div>
		</div>
		<!-- Button -->
		<div class="row">
			<div class="center padded col-sm-12">
				<?php $args = array(
					"output"=>"raw"
				); ?>
				<a href="<?php echo types_render_field("project-url",$args)?>"class="button accent" target="_blank">View online</a>
				
			</div>
		</div><!-- END -->
	</section>
	
	<!-- End Overview Block -->
	<!-- Begin Project Slider Block -->
	<section class="project-gallery">
		<div class="project-slider" style="width: 615%; position: relative; -webkit-transition: 0s; transition: 0s; -webkit-transform: translate3d(-1583px, 0px, 0px);">
					<?php
	   					$args = array(
						'class'	=> "bg-check" ); ?>
						<?php  
							echo types_render_field("product-image", array("output"=>"normal"));
						?>
				</div>
		
		<div class="project-prev">
			<!-- <a class="bx-prev" href="">Prev</a> -->
		</div>
		<div class="project-next">
			<!-- <a class="bx-next" href="">Next</a> -->
		</div>
		<div class="project-controls">
			<div class="bx-pager bx-default-pager">
				<div class="bx-pager-item">
					<a href="" data-slide-index="0" class="bx-pager-link active">1</a>
					</div>
				<div class="bx-pager-item">
					<a href="" data-slide-index="1" class="bx-pager-link">2</a>
				</div>
				<div class="bx-pager-item">
					<a href="" data-slide-index="2" class="bx-pager-link">3</a>
				</div>
				<div class="bx-pager-item">
					<a href="" data-slide-index="3" class="bx-pager-link">4</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End Project Slider Block -->
	<!-- Begin Milestone Block -->
	<section class="container">
		<div class="row">
			<!-- Milestone -->
			<div class="milestone center col-sm-12">
				<h6>Launched in </h6>
				<span class="value" data-from="0" data-to="5" data-speed="1000" data-refresh-interval="100"><?php echo types_render_field("number-of-weeks", '');?></span>
				<h6>Weeks</h6>
			</div><!-- END -->
		</div>
	</section>
	
	<!-- End Milestone Block -->
	<!-- Begin Absolute Feature Block -->
	
	<?php
		$args = array(
		'output' => 'raw' ); 
	?>
	<?php 
		$value = types_render_field('ipad-image', array('raw' => 'true'));
		$value1 = types_render_field('iphone-image', array('raw' => 'true'));
		if ( !empty($value) && !empty($value1) ) {
	?>
	<section class="feature-box light image-section absolute clearfix">
		<div class="col-md-7">
			<div class="dynamic-image clearfix">
				<div class="ipd-image">
					<img itemprop="image" class="ipad-bac" src="<?php bloginfo('template_url') ?>/images/ipad-back.png">
					<img itemprop="image" class="ipad" src="<?php echo types_render_field("ipad-image", $args);?>">
				</div>
				<div class="iph-image">	
					<img itemprop="image" class="iphone-bac" src="<?php bloginfo('template_url') ?>/images/iphone-back.png">	
					<img itemprop="image" class="iphone" src="<?php echo types_render_field("iphone-image", $args);?>">										
				</div>
				</div>
			</div>
			
		<div class="col-md-5">
			<!-- Features -->
			<div class="row">
				<div class="featured-single-project title col-md-10 col-sm-12">
					<h2 class="featured-title">Features.</h2>
					<div itemprop="description"  class="feature clearfix single-feature">
						<?php $stripped_text = str_replace(array('<p>','</p>'),'',types_render_field("design",'')); ?>
						<!--<?php echo $stripped_text; ?> -->
						<?php 
							$terms = wp_get_object_terms( $post->ID, 'post_tag', array('fields' => 'all') ); // get all the terms on that post
							$images = get_option('taxonomy_image_plugin'); 
							foreach($terms as $term) { 
							    $term_id = $term->term_taxonomy_id; 
							    if( array_key_exists( $term_id, $images ) ) { 
							        echo wp_get_attachment_image( $images[$term_id] , array(26,26) ); 
							    }
							    echo '<h3 class="features-align">'.$term->name . ' '.'</h3>'; 
							    echo "</br>";
							    echo '<p class="small">'.$term->description.'</p>';
							    echo "</br>";
							}
						?>
					</div>
				</div>
			</div><!-- END -->
		</div>		
	</section>
		
	<?php } else {?>
			<section class="feature-box light image-section absolute1 clearfix">
				<div class="col-md-6 col-md-offset-4 no">
					<!-- Features -->
					<div class="row">
						<div itemprop="description" class="title col-md-10 col-sm-12">
							<h2>Features.</h2>
							<div class="feature clearfix single-feature">
								<?php $stripped_text = str_replace(array('<p>','</p>'),'',types_render_field("design",'')); ?>
								<!--<?php echo $stripped_text; ?> -->
								<?php 
									$terms = wp_get_object_terms( $post->ID, 'post_tag', array('fields' => 'all') ); // get all the terms on that post
									$images = get_option('taxonomy_image_plugin'); 
									foreach($terms as $term) { 
									    $term_id = $term->term_taxonomy_id; 
									    if( array_key_exists( $term_id, $images ) ) { 
									        echo wp_get_attachment_image( $images[$term_id] , array(26,26) ); 
									    }
									    echo '<h3 class="features-align">'.$term->name . ' '.'</h3>'; 
									    echo "</br>";
									    echo '<p class="small">'.$term->description.'</p>';
									    echo "</br>";
									}
								?>
							</div>
						</div>
					</div><!-- END -->
				</div>
			</section>
	<?php } ?>

	<!-- End Feature Block -->
	<!-- Begin Share Block -->
	<section class="share-block container">
		<!-- Title -->
		<div class="row">
			<div class="title col-sm-12">
				<h2>Sharing makes you an awesome human being.</h2>
				<p>Be good. Be social.</p>
			</div>
		</div><!-- END-->
		<!-- Share Buttons -->
		<div class="row">
			<div class="col-sm-12">
				<!-- AddThis Button BEGIN -->
				<ul class="addthis_toolbox addthis_default_style">
				<li><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a></li>
				<li><a class="addthis_button_tweet"></a></li>
				<li><a class="addthis_button_pinterest_pinit" pi:pinit:layout="horizontal" pi:pinit:url="http://www.addthis.com/features/pinterest" pi:pinit:media="http://www.addthis.com/cms-content/images/features/pinterest-lg.png"></a>
				</li><li><a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</li><li><a class="addthis_counter addthis_pill_style"></a>
				</li></ul>
				<script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
				<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52e6e19374a8b484"></script>
				<!-- AddThis Button END -->
			</div>
		</div><!-- END -->
		
	</section>
	<!-- End Share Block -->
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
	<!-- Begin Footer -->
	<?php get_footer(); ?>
