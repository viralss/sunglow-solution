<?php
/**
 * Template Name: Project
 *
 * @package _s
 */

get_header(); ?>

<!-- Begin Small Hero Block -->
	<section class="hero small accent parallax" style="background-image: url(<?php bloginfo('template_url'); ?>/images/keyboard.jpg);">

		<!-- Heading -->
		<div class="hero-content container">
			<h1>Project Name.</h1>
		</div><!-- END -->

		<!-- Navigation -->
		<div class="sub-hero container">
			<ul class="project-nav">
				<li class="prev-project clearfix"><a href="#">Previous</a></li>
				<li class="all-project clearfix"><a href="portfolio.html"><i class="icon keypad white"></i></a></li>
				<li class="next-project clearfix"><a href="#">Next</a></li>
			</ul>
		</div><!-- END -->

	</section>
	<!-- End Small Hero Block -->

	<!-- Begin Overview Block -->
	<section class="center-mobile overview-block content container">
		<div class="row">

			<div class="col-sm-4">
				<h2>Challange.</h2>
				<p>Vivamus iaculis metus eget nibh dapibus fringilla. Duis vel justo venenatis ligula bibendum vulputate et et tellus.</p>
			</div>
			<div class="col-sm-4">
				<h2>Solution.</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed nunc risus, ac vehicula turpis. Duis fringilla fringilla lorem, at ultricies tortor.</p>
			</div>
			<div class="col-sm-4">
				<h2>Result.</h2>
				<p>Duis fringilla fringilla lorem, at ultricies tortor. Et harum quidem rerum facilis est et expedita distinctio.</p>
			</div>

		</div>

		<!-- Button -->
		<div class="row">
			<div class="center padded col-sm-12">
				<a href="#" class="button accent">View online</a>
			</div>
		</div><!-- END -->
	</section>
	<!-- End Overview Block -->

	<!-- Begin Project Slider Block -->
	<section class="project-gallery">
		<ul class="project-slider">
			<li><img class="bg-check" src="<?php bloginfo('template_url'); ?>/images/work/slide.jpg" alt=""></li>
			<li><img class="bg-check" src="<?php bloginfo('template_url'); ?>/images/work/slide.jpg" alt=""></li>
			<li><img class="bg-check" src="<?php bloginfo('template_url'); ?>/images/work/slide.jpg" alt=""></li>
			<li><img class="bg-check" src="<?php bloginfo('template_url'); ?>/images/work/slide.jpg" alt=""></li>
		</ul>
		<div class="project-prev"></div>
		<div class="project-next"></div>
		<div class="project-controls"></div>
	</section>
	<!-- End Project Slider Block -->

	<!-- Begin Milestone Block -->
	<section class="container">
		<div class="row">

			<!-- Milestone -->
			<div class="milestone col-sm-4">
				<span class="timer value" data-from="0" data-to="5" data-speed="1000" data-refresh-interval="100">0</span>
				<h6>Propositions</h6>
			</div><!-- END -->

			<!-- Milestone -->
			<div class="milestone col-sm-4">
				<span class="timer value" data-from="0" data-to="100" data-speed="1000" data-refresh-interval="100">0</span>
				<h6>Hours</h6>
			</div><!-- END -->

			<!-- Milestone -->
			<div class="milestone col-sm-4">
				<span class="timer value" data-from="0" data-to="90" data-speed="1000" data-refresh-interval="100">0</span>
				<h6>Coffees</h6>
			</div><!-- END -->

		</div>
	</section>
	<!-- End Milestone Block -->

	<!-- Begin Absolute Feature Block -->
	<section class="feature-box light absolute clearfix">
		
		<div class="center-mobile content container">

			<!-- Title -->
			<div class="row">
				<div class="title col-sm-6 col-sm-push-6">
					<h2>What we did.</h2>
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium dolores et quas molestias..</p>
				</div>
			</div><!-- END-->

			<!-- Features -->
			<div class="row">
				<div class="feature col-sm-6 col-sm-push-6 clearfix">
					<i class="icon gray albums"></i><h3>Wireframing.</h3>
					<p class="small">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium molestias.</p>
				</div>
			</div><!-- END -->

			<!-- Features -->
			<div class="row">
				<div class="feature col-sm-6 col-sm-push-6 clearfix">
					<i class="icon gray repeat"></i><h3>Revisions.</h3>
					<p class="small">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium lorem ipsum.</p>
				</div>
			</div><!-- END -->

			<!-- Features -->
			<div class="row">
				<div class="feature col-sm-6 col-sm-push-6 clearfix">
					<i class="icon gray mouse"></i><h3>Design.</h3>
					<p class="small">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.</p>
				</div>
			</div><!-- END -->

			<!-- Features -->
			<div class="row">
				<div class="feature col-sm-6 col-sm-push-6 clearfix">
					<i class="icon gray browser"></i><h3>Development.</h3>
					<p class="small">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium molestias.</p>
				</div>
			</div><!-- END -->
		
		</div>

		<div class="image-absolute"></div>
	</section>
	<!-- End Feature Block -->

	<!-- Begin Share Block -->
	<section class="share-block container">

		<!-- Title -->
		<div class="row">
			<div class="title col-sm-12">
				<h2>Sharing makes you an awesome human being.</h2>
				<p>A selection of hand-picked share buttons. Super-easy to include or remove from your designs.</p>
			</div>
		</div><!-- END-->

		<!-- Share Buttons -->
		<div class="row">
			<div class="col-sm-12">
				<!-- AddThis Button BEGIN -->
				<ul class="addthis_toolbox addthis_default_style">
				<li><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a></li>
				<li><a class="addthis_button_tweet"></a></li>
				<li><a class="addthis_button_pinterest_pinit" pi:pinit:layout="horizontal" pi:pinit:url="http://www.addthis.com/features/pinterest" pi:pinit:media="http://www.addthis.com/cms-content/<?php bloginfo('template_url'); ?>/images/features/pinterest-lg.png"></a>
				<li><a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				<li><a class="addthis_counter addthis_pill_style"></a>
				</ul>
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
					<a class="button accent-alt" href="#">Contact us</a>
					<span class="choice">or</span>
					<a class="button gray" href="#">View Blog</a>
				</div>
			</div><!-- END -->
		</div>
	</section>
	<!-- End Call to Action Block -->

<?php get_footer(); ?>