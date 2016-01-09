<?php
/**
 * Template Name: Product
 *
 * @package _s
 */

get_header(); ?>

<!-- Begin Large Hero Block -->
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
	<section class="hero work small accent parallax top-bg" style="background-image: url(<?php echo $image[0]; ?>);">

		<!-- Heading -->
		<div class="hero-content container">
			<h1>Our Products.</h1>
		</div><!-- END -->

		<!-- Button -->
		<div class="sub-hero container">
			<span class="line"></span>
		</div><!-- END -->

	</section>
	<!-- End Large Hero Block -->

	<!-- Begin Gallery Portfolio Block -->
	<section class="portfolio-block">

		<ul class="portfolio-grid">
			<?php $args =array('post_type' => 'product' ,'posts_per_page' => '-1');
				$query = new WP_Query( $args );
					if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); { ?>
						
						<li class="thumbnail mix mix_all">
							<a href="<?php the_permalink() ?>/" >
								<?php the_post_thumbnail('project-thumb'); ?>
								<div class="projectinfo">
									<div class="meta">
										<h4><?php the_title(); ?></h4>
									</div>
								</div>
							</a>
						</li>
						<?php } ?>    

                      <?php endwhile; endif;
                      wp_reset_query();
                    ?>  
					
		</ul><!-- END -->
		
		
	</section>
	<!-- End Gallery Portfolio Block -->

<?php get_footer(); ?>