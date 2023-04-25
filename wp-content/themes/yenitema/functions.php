<?php 
function addcss(){



wp_register_style('fonts','https://fonts.googleapis.com/css?family=Open+Sans:400,600',array(),1,'all');
wp_enqueue_style('fonts');

wp_register_style('webfont',get_template_directory_uri().'/fonts/beyond_the_mountains-webfont.css',array(),1,'all');
wp_enqueue_style('webfont');



wp_register_style('bootstrap',get_template_directory_uri().'/plugin-frameworks/bootstrap.min.css',array(),1,'all');
wp_enqueue_style('bootstrap');


wp_register_style('swiper',get_template_directory_uri().'/plugin-frameworks/swiper.css',array(),1,'all');
wp_enqueue_style('swiper');

wp_register_style('ionicons',get_template_directory_uri().'/fonts/ionicons.css',array(),1,'all');
wp_enqueue_style('ionicons');
     
wp_register_style('styles',get_template_directory_uri().'/common/styles.css',array(),1,'all');
wp_enqueue_style('styles'); 
}
add_action('wp_enqueue_scripts','addcss');

//add JS
function add_js(){
wp_register_script('jqueryx',get_template_directory_uri().'/plugin-frameworks/jquery-3.2.1.min.js',array(),1,1);
wp_enqueue_script('jqueryx');

wp_register_script('bootstrap',get_template_directory_uri().'/plugin-frameworks/bootstrap.min.js',array(),1,1);
wp_enqueue_script('bootstrap');

wp_register_script('swiper',get_template_directory_uri().'/plugin-frameworks/swiper.js',array(),1,1);
wp_enqueue_script('swiper');

wp_register_script('scripts',get_template_directory_uri().'/common/scripts.js',array(),1,1);
wp_enqueue_script('scripts');
}
add_action('wp_enqueue_scripts','add_js');

//Görünüm - Menüler 
add_theme_support('menus');
register_nav_menus(array(
	'ust-menu' =>__('Üst Menü','theme')
));

?>