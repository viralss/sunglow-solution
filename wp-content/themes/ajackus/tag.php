<?php

/**

 * The template for displaying Tag Result.

 *

 * @package _s

 */



get_header(); ?>

<div class="sticky-head" style="overflow: hidden; display: none;"></div>

	<section class="hero small accent parallax" style="background-image: url(<?php bloginfo('template_url') ?>/images/hero-blog.jpg); background-position: 50% 0px;">

		<div class="hero-content container" style="margin-top: 280px;">

			<h1>Tag Results.</h1>

		</div>

		<div class="sub-hero container">

			<span class="line"></span>

		</div>

	</section>



	<section class="content tag-results container">

	<div class="row">

		<div class="col-sm-offset-2 col-sm-8">

			<div class="search-tag">

				<h2>Tag Result For :&nbsp;<?php single_tag_title( ); ?></h2>

			</div>

			<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

				<div class="row">



					<div class="date">

						<?php echo str_replace(',','</strong><br />', the_date('M,Y','<p><strong>','</p>', FALSE)) ?>

					</div>



					<div class="project-title">

						<a href="<?php the_permalink(); ?>"><h2><?php the_title();?></h2></a>

						<h6>POSTED IN

							<?php

								$taxonomy = 'project-industry';

								$id=$post->ID;

								$tax_terms = get_the_terms($id , $taxonomy);

							?>

							<?php

								foreach ($tax_terms as $tax_term) {

									if ($tax_term->slug !== 'web' AND $tax_term->slug !== 'mobile' AND $tax_term->slug !== 'print' )

										echo '<li>' . '<a href="' . esc_attr(get_term_link($tax_term, $taxonomy)) . '" title="' . sprintf( __( "View all posts in %s" ), $tax_term->name ) . '" ' . '>' . $tax_term->name.'</a></li>';

								}

							?>

						</h6>

					</div>



				</div>

				<div class="row">

					<div class="featured-image">

						<?php the_post_thumbnail();?>

					</div>

				</div>

				<div class="row">

					<div class="view-project-parent">

						<div class="view-project">

							<p><a href="<?php the_permalink(); ?>">View Project</a></p>

						</div>

					</div>

				</div>

			<?php endwhile; ?>

			<?php else : ?>

				<p>Sorry, no posts matched your criteria.</p>

			<?php endif; ?>

		</div>

	</div>

</section>

<?php get_footer(); ?>

