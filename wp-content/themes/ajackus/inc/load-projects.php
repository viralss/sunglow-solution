<?php

	global $post;

	function wp_infinite_scroll_project(){

		$paged = $_POST['page_no'];

		$filterName = $_POST['filter_name'];

		$current_url = $_POST['current_url'];

		$page_url = basename($current_url);



			$args =array(

				'post_type' => 'project' ,

				'project-category' => $page_url ,

				'posts_per_page' => '9',

				'paged' => $paged,

				'post_status' => 'publish'

			);

			$wp_query = new WP_Query( $args );

			$page_id = $wp_query->get_queried_object_id();

			//var_dump($page_id);

				if ( $wp_query->have_posts() ) :

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

					<?php endif; 

					if (!empty($terms)) {

						if (is_array ($project_cats) && in_array ($filterName,$project_cats) || $filterName == 'all') { ?>

							<li class="thumbnail mix <?php echo $project_cat; ?> mix_all" style="opacity: 1; display: block;">

								<a href="<?php the_permalink() ?>" >

									<?php the_post_thumbnail('project-thumb'); ?>

									<div class="projectinfo">

										<div class="meta">

											<h4><?php the_title(); ?></h4>

										</div>

									</div>

								</a>

							</li>

						<?php } else { ?>

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

						<?php } 

					} ?>	

			<?php endwhile; else: ?>

			

			<!-- The very first "if" tested to see if there were any Posts to -->

			<!-- display.  This "else" part tells what do if there weren't any. -->

			<div class="no-more hidden">No More Posts To Display</div>

			

		<!--End the loop -->

		<?php endif; ?>

		<?php wp_reset_query();

		

		exit;

	}



	add_action('wp_ajax_infinite_scroll_project', 'wp_infinite_scroll_project');   

	add_action('wp_ajax_nopriv_infinite_scroll_project', 'wp_infinite_scroll_project');    // if user not logged in



?>