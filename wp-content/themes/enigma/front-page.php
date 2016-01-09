<?php get_header(); 
$wl_theme_options = weblizar_get_options();
$wl_theme_options['_frontpage'];
if ($wl_theme_options['_frontpage']=="1" && is_front_page())
{	get_template_part('home','slideshow');
$wl_theme_options = weblizar_get_options();
	get_template_part('home','services'); 
	$wl_theme_options = weblizar_get_options();
	if($wl_theme_options['fc_home'] == "1") {
	get_template_part('footer','callout');
	}
	get_footer();
}
 else 
{	
	if(is_page()){
	get_template_part('page');
	}else{
		get_template_part('index');
	}
}	?>