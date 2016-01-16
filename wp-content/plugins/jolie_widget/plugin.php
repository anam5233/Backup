<?php 
/*
* Plugin Name: Jolie Widget
* Plugin URI: anam.xyz
* Author Name: Anam
* Author URI: anam.xyz
* Description: A simple testing widget for practise
* Text Domain: jolie
* Version: 0.0.1
* Licence: GPLv2
*/

class jolie_widget extends WP_widget{
	function __construct(){
		parent::__construct(
			'jolie_widget',
			'jolie widget',
			array(
				'classname' 	=> 'jolie_widget',
				'description'	=> 'simple wordpress widget api testing....'
			)
		);
		// register stylesheets
		add_action('admin_print_styles', array($this, 'register_admin_styles'));
		add_action('wp_enqueue_scripts', array($this, 'register_widget_styles'));


		// register scripts
		add_action('admin_enqueue_scripts', array($this, 'register_admin_scripts'));
		add_action('wp_enqueue_scripts', array($this, 'register_widget_scripts'));


	}
	// function construct

	function form($instance){

	}
	// form instance

	function update($new_instance, $old_instance){

	}
	// update instance

	function widget($args, $instance){

	}
	// widget instance

	function register_admin_styles(){
		wp_enqueue_style('jolie-admin-style', plugins_url('jolie_widget/css/admin.css'));
	}
	function register_widget_styles(){
		wp_enqueue_style('jolie-widget-style', plugins_url('jolie_widget/css/widget.css'));
	}
	function register_admin_scripts(){
		wp_enqueue_script('jolie-admin-script', plugins_url('jolie_widget/js/admin.js'));
	}
	function register_widget_scripts(){
		wp_enqueue_script('jolie-widget-script', plugins_url('jolie_widget/js/widget.js'));
	}
}
add_action('widgets_init', function(){
	register_widget('jolie_widget');
});

 ?>