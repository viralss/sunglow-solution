<?php global $env, $post;
/**
 * The Header for our theme.
 *
 *
 * @package _s
 */
?>
<!doctype html>
<!--[if IE 8 ]><html class="ie no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if IE 9]> <html class="ie9 no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html  class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US" itemscope itemtype="http://schema.org/Website"><!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="Cache-Control" content="max-age=3600, must-revalidate">
	<title>

	<?php
	 	if ( get_post_type() == 'project' ) {

			wp_title( '| Work |', true, 'right' );	

        } else {

	 	wp_title( '|', true, 'right' ); 

	} ?>

	</title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<meta name="description" content="We offer simple & modern digital solutions for better brand communication.">
	<meta name="keywords" content="">
	<meta name="author" content="AJACKUS">
	<meta name="theme-color" content="#27a9e1">

	 <!-- Google Authorship and Publisher Markup --> 
    <link rel="author" href=" https://plus.google.com/106335757388292247473/posts"/>
    <link rel="publisher" href="https://plus.google.com/106335757388292247473"/>
	<meta name="google-site-verification" content="EPedjLkGiM6smyoOpVw3YnL7sG3M90A4I5bqYMTL1T4" />
	<meta property="fb:admins" content="100000036646958" />

	<?php if ( has_post_thumbnail() ) {

        $thumb_id = get_post_thumbnail_id();
        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large', true);
        $meta_image_src = $thumb_url_array[0];
    	} else {
        $meta_image_src = get_bloginfo('template_url').'/css/images/logo-about.jpg';

    } ?>

	  <!-- Twitter Card data --> 

	   <meta name="twitter:card" content="summary"> 
	   <meta name="twitter:title" content="<?php wp_title( '|', true, 'right' ); ?>"> 
	   <meta name="twitter:creator" content="@ajackus"> 

	    <?php if ( get_post_type() == 'project' ) {

	    	$args = array(

						'output' => 'raw' 
			
					); 

	    ?>

	    	<meta name="twitter:description" content="<?php $description = types_render_field("sp-challenge",$args);$stripped_description = strip_tags($description); echo $stripped_description;?>">	    	
	   		<meta name="twitter:image:src" content="<?php echo  $meta_image_src; ?>">

     	<?php } else { ?>

     		 <meta name="twitter:description" content="We offer simple & modern digital solutions for better brand communication."> 

    	<?php } ?>

    <!-- Schema.org markup for Google+ --> 

    	<meta itemprop="name" content="<?php wp_title( '|', true, 'right' ); ?>"> 
    	<meta itemprop="image" content="<?php echo $meta_image_src; ?>">
	    
	    <?php if ( get_post_type() == 'project' ) { 

        ?>
	    	<meta itemprop="description" content="<?php $description = types_render_field("sp-challenge",$args);$stripped_description = strip_tags($description); echo $stripped_description;?>"> 

    	<?php } else { ?>

       		<meta itemprop="description" content="We offer simple & modern digital solutions for better brand communication." />
       
    	<?php } ?>

    <!-- Open Graph data --> 
    	
	    <meta property="og:url" content="<?php echo get_permalink() ?>" />
	    <meta property="og:site_name" content="<?php echo get_bloginfo(strip_tags('name')) ?>" />
	    <meta property="og:type" content="website" /> 
  
    	<?php if ( get_post_type() == 'project' ) { 

        ?>

      	<meta property="og:title" content="<?php wp_title( '|', true, 'right' ); ?>" /> 
	    <meta property="og:description" content="<?php $description = types_render_field("sp-challenge",$args);$stripped_description = strip_tags($description); echo $stripped_description;?>" />
	    <meta property="og:image" content="<?php echo  $meta_image_src; ?>" />

    	<?php } else { ?>

       <meta property="og:description" content="We offer simple & modern digital solutions for better brand communication." />
       

    	<?php } ?>


		<link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/images/favicon.png">
		<link rel="apple-touch-icon" href="<?php bloginfo('template_url') ?>/images/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url') ?>/images/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url') ?>/images/apple-touch-icon-114x114.png">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php if($env == 'DEV') { ?>
		<link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_url') ?>/style/main.less">
	<?php } else { ?>
		<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style/main.min.css">
	<?php } ?>

	<script type="text/javascript">
	    var templateUrl = '<?php echo get_bloginfo("template_url"); ?>',
	        wpUrl = '<?php echo get_bloginfo("wpurl"); ?>',
	        homeUrl = '<?php echo home_url(); ?>',
	        env = '<?php echo $env ?>';
	        pageTitle = '<?php echo get_the_title(); ?>',
	        isFrontPage = '<?php echo is_front_page(); ?>',
	        isAboutPage = '<?php echo $post->post_title == "About"; ?>',
	        cdnImagesUrl = 'http://cdn.ajackus.com/securewp/wp-content/themes/ajackus/images';
	</script>


	<?php wp_head(); ?>

</head>

<body <?php body_class('royal_loader'); ?>>
	<!-- Begin Navigation -->
	
	<nav class="mobile clearfix">

		<!-- Search -->
		<div class="search-trigger"></div>
		<div class="search-form disabled">
			<?php get_search_form(); ?>
		</div><!-- END -->
		<a class="fa fa-login" href="http://me.ajackus.com/" target="_blank">Login</a>
		<a class="fa fa-envelope-o" data-toggle="tooltip" data-placement="bottom" title="hello@ajackus.com" href="mailto:hello@ajackus.com"></a>
		<a class="fa fa-phone" data-toggle="tooltip" data-placement="bottom" title="Maulik Bengali : +91 9820 790 760" href="tel:+919820790760"></a>
		<?php wp_nav_menu( array(
			'menu' 			 	=> 'Primary Menu',
			'theme_location' 	=> 'primary',
			'menu_class'      	=> 'nav-content clearfix',
			'items_wrap'      	=> '<ul id="%1$s" class="%2$s"><li id="magic-line"></li>%3$s</ul>',
			'depth'           	=> 0
		) ); ?>
		<div class="fa fa-login mob-menu">
			<a class="login" href="http://me.ajackus.com/" target="_blank">Login</a>
		</div> 
		<a class="fa fa-envelope-o mob-menu" href="mailto:hello@ajackus.com">hello@ajackus.com</a>
		<a class="fa fa-phone mob-menu" href="tel:+919820790760">+91 9820 790 760</a>
	</nav>



	<header class="mobile">
 
		<!-- Logo -->
		<a href="<?php echo home_url(); ?>"><img class="logo" src="<?php bloginfo('template_url') ?>/images/ajackus-logo-new.svg" alt="Ajackus" /></a>

		<!-- Menu Button -->
		<div class="nav-button">
		  <div class="button-bars"></div>
	    </div><!-- END -->

	</header>

	<div class="sticky-head"></div>
	<!-- End Navigation -->