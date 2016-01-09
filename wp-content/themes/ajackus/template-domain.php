<?php
/**
 * Template Name: Domain
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

	<!-- Begin Gallery Portfolio Block -->
	<section class="portfolio-block">

		<div class="container">
			<!-- Filters -->
			
			<?php $id=get_the_ID(); 

				$post = get_post($id); 
				$slug = $post->post_name;

			?> 

			<?php $args =array('post_type' => 'project' ,'project-category' => $slug ,'posts_per_page' => '-1');

				$wp_query = new WP_Query( $args );

					if ( $wp_query->have_posts() ){ ?>
	
			<div class="row">
			<?php $slug = basename(get_permalink());?>
			<?php $cat_id=get_cat_ID( $slug );?>
			<?php 
				global $post;
				$post_slug=$post->post_name;
			?>	
				  <ul class="filtering col-lg-12">
						<li class="filter" data-filter="all">All</li>
						<?php
							if($post_slug == 'web'){
	   						$args = array('hide_empty'	=> true);}
	   						else{
	   							$args = array('hide_empty'	=> true, 
	   							'exclude' => '55');
	   						} 
	   						$terms = get_terms("project-industry" , $args); 	   						

							foreach ( $terms as $term ) { 
							?>
								<li class="filter" data-filter="<?php echo $term->slug ?>"><?php echo $term->name; ?></li>
							<?php
							}
						?> 
			        </ul>
			    </div><!-- END -->
			</div>
		<!-- Thumbnails -->


		<ul class="portfolio-grid">
			 <?php $id=get_the_ID(); 
				$post = get_post($id);
				$slug = $post->post_name;
			?> 
			<?php 
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

				$args =array('post_type' => 'project' ,'project-category' => $slug ,'posts_per_page' => '9','paged' => $paged,'post_status' => 'publish');
				$wp_query = new WP_Query( $args );
					while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
						<!-- Thumbnail -->
						<?php
							$project_cat = '';
							$terms = get_the_terms( get_the_ID(), 'project-industry' );
							if ( $terms && ! is_wp_error( $terms ) ) :
							   	$project_cats = array();
								foreach ( $terms as $term ) {
									$project_cats[] = $term->slug;
								}
						   	$project_cat = join(' ', $project_cats );
						?>
						<?php endif; ?>
						<li class="thumbnail mix <?php echo $project_cat; ?> mix_all">
							<a href="<?php the_permalink() ?>" >
								<?php the_post_thumbnail('project-thumb'); ?>
								<div class="projectinfo">
									<div class="meta">
										<h4><?php the_title(); ?></h4>
									</div>
								</div>
							</a>
						</li>
					<?php endwhile; ?>
		</ul><!-- END -->
		<div class="spinner-parent">
			<div class="spinner">
			  <div class="cube1"></div>
			  <div class="cube2"></div>
			</div>
		</div>
		<?php }else {
				echo "<h2>We are updating our Portfolio. Please check back later.</h2>";
		} ?>
	</section>
	
	<!-- End Gallery Portfolio Block -->

<?php get_footer(); ?>