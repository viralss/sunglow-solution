<?php global $env;

/**

 * The template for displaying the footer.

 *

 *

 * @package _s

 */

?>

	<!-- Begin Footer -->

	<footer>

		<div class="container">

			<div class="row">



				<!-- Contact List -->

				<ul class="contact-list col-md-9">

					<li><i class="fa fa-envelope-o"></i><a href="mailto:hello@ajackus.com">hello@ajackus.com</a></li>

					<li><i class="fa fa-phone"></i><a href="#">+ 91 9820 790 760</a></li>

					<li><i class="fa fa-map-marker footer-address"></i><a href="https://www.google.com/maps/place/AJACKUS+%7C+Print.+Web.+Social.+Infra./@19.122737,72.83829,17z/data=!3m1!4b1!4m2!3m1!1s0x3be7c9d9eb370109:0x5215b594a174231d?hl=en" target="_blank">B/39, Ila Darshan, Gilbert Hill Rd, Andheri(W), Mumbai -58</a></li>

				</ul><!-- END -->



				<!-- Social List -->

				<ul class="social-list col-md-3">

					<li><a href="http://www.linkedin.com/company/ajackus" target="_blank"><i class="fa fa-linkedin"></i></a></li>

					<li><a href="http://twitter.com/ajackus" target="_blank"><i class="fa fa-twitter"></i></a></li>

					<li><a href="http://facebook.com/ajackus" target="_blank"><i class="fa fa-facebook"></i></a></li>

					<li class="copyright">©&nbsp;&nbsp;2015&nbsp;&nbsp;AJACKUS</li>

				</ul><!-- END -->



			</div>

		</div>

	</footer>

	<!-- End Footer -->



	<?php if($env == 'DEV') { ?>

		<script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery.js"></script>

		<script src="<?php bloginfo('template_url'); ?>/js/vendor/royal_preloader.min.js"></script>

		<script src="<?php bloginfo('template_url'); ?>/js/vendor/bootstrap/tooltip.js"></script>

	    <script src="<?php bloginfo('template_url'); ?>/js/retina.js"></script>

	    <script src="<?php bloginfo('template_url'); ?>/js/backgroundcheck.js"></script>

	    <script src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>

	    <script src="<?php bloginfo('template_url'); ?>/js/template.js"></script>

	    <script src="<?php bloginfo('template_url'); ?>/js/404.js"></script>

	    <script type="text/javascript">

	    less = {

	        env: "development", // or "production"

	        async: false,       // load imports async

	        fileAsync: false,   // load imports async when in a page under

	                            // a file protocol

	        poll: 1000,         // when in watch mode, time in ms between polls

	        functions: {},      // user functions, keyed by name

	        dumpLineNumbers: "comments", // or "mediaQuery" or "all"

	        relativeUrls: false,// whether to adjust url's to be relative

	                            // if false, url's are already relative to the

	                            // entry less file

	        rootpath: ""// a path to add on to the start of every url

	                            //resource

	    };

	    </script>

	    <script src="<?php bloginfo('template_url'); ?>/js/vendor/less-1.7.0.js" type="text/javascript"></script>

	    <script src="<?php bloginfo('template_url'); ?>/js/main.js" type="text/javascript"></script>

	    <script type="text/javascript">localStorage.clear();</script>

	<?php } else { ?>

	    <script src="<?php bloginfo('template_url') ?>/js/main.min.js"></script>

	<?php } ?>

	<?php wp_footer(); ?> 

	<script>

	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');



	  ga('create', 'UA-12823615-2', 'auto');

	  ga('require', 'displayfeatures');

	  ga('send', 'pageview');



	</script>

</body>



</html>