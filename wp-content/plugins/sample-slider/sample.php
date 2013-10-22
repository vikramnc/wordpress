<?php
/*
Plugin Name: Sample
Plugin URI: https://github.com/sunanda0101/Sample
Description: Very basic full width responsive carousel/image-slider plugin using Slides JS (http://www.slidesjs.com/)
Version: 0.1 
Author: Cyrus
Author URI: http://mitalicyrus.blogspot.in
License: GPL2
*/
?>
<?php
function sample_install(){
    //Do some installation work
}
register_activation_hook(__FILE__,'sample_install');

function sample_uninstall() {
	//Do some uninstallation work
}

register_deactivation_hook(__FILE__, 'sample_uninstall');

//SCRIPTS
function sample_scripts(){
	/*jQuery is by comes with wordpress, so we just have to enque ti here
	We need not REGISTER it. Enqueing it will include the latest version of jQuery. 
	As author quotes it.. (http://www.1stwebdesigner.com/wordpress/wordpress-plugin-development-course-designers-2/)
	"jQuery is one of the libraries which comes in-built with WordPress and 
	hence we can include it directly as shown in the code. 
	Latest version of jQuery will be included in this technique."
	*/
	wp_enqueue_script('jquery');

	//-----------------SAMPLE.js-----------------------
    wp_register_script('sample_script',plugins_url( __FILE__ ).'js/sample.js');
    wp_enqueue_script('sample_script');
    
    //-----------------slidejs.js-----------------------
	wp_register_script('slidesjs_core', plugins_url('js/jquery.slides.min.js', __FILE__),array("jquery"));
	wp_enqueue_script('slidesjs_core');

	//----------------Slidejs initialization, just in order to follow the tut properly------
	wp_register_script('slidesjs_init', plugins_url('js/slidesjs.initialize.js', __FILE__));
  	wp_enqueue_script('slidesjs_init');

}
add_action('wp_enqueue_scripts','sample_scripts');

//STYLES
add_action('wp_enqueue_scripts', 'sample_styles');
function sample_styles() {
	//------------------SLIDEJS PLUGIN EXAMPLE CSS----------------

	//-----------------------slidejs.css--------------------
	wp_register_style('style_css', plugins_url('css/styles.css', __FILE__));
	wp_enqueue_style('style_css');

	//-----------------------slidejs.css--------------------
	wp_register_style('slidesjs_css', plugins_url('css/slidesjs.css', __FILE__));
	wp_enqueue_style('slidesjs_css');
	//----------------------font-awesome.min.css-----------
	wp_register_style('slidesjs_fonts', plugins_url('css/font-awesome.css', __FILE__));
	wp_enqueue_style('slidesjs_fonts');
}



//------------------------------ADMIN SECTION----------------------------------------------
//1 - Create a function to register the menu
function sample_menu(){
    	add_options_page('Sample Options', 'Sample', 'manage_options', 'sample-menu', 'sample_options');
}

//2 - Create an action hook to trigger the registration
add_action('admin_menu','sample_menu');



//3 - Create a function to build the HTML for the page
function sample_options(){
    	include('admin/sample-admin.php');
}

//call register settings function
add_action( 'admin_init', 'register_mysettings' );

function register_mysettings() {
//register our settings
/*register_setting( 'sample-settings-group', 'name' );
register_setting( 'sample-settings-group', 'age' );
register_setting( 'sample-settings-group', 'nickname' );*/
}


add_shortcode("sample_slider", "sample_slider_function");

function sample_slider_function($atts, $content = null) {

	$plugins_url= plugins_url();
	return '<div class="container">
		<div id="sample-slides">'
		.$content.
		'<a href="#" class="slidesjs-previous slidesjs-navigation"><i class="icon-chevron-left icon-large"></i></a>
		<a href="#" class="slidesjs-next slidesjs-navigation"><i class="icon-chevron-right icon-large"></i></a>
	    </div>
  	</div><br>';

}













?>