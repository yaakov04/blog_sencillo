<?php

function init_template()
{
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	register_nav_menus(
		array(
			'top_menu'=> 'Menu Principal'
		)
	);
}

add_action('after_setup_theme', 'init_template');

function assets()
{
	wp_register_style('fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@500&family=Urbanist:wght@300;400&display=swap','','1.0','all');
	wp_register_style('normalize', get_template_directory_uri() .'/assets/css/normalize.css','','8.0.1','all');
	wp_enqueue_style('style', get_stylesheet_uri(),array('normalize','fonts'),'1.0','all');
	wp_enqueue_script('js', get_template_directory_uri() .'assets/js/app.js',[],'1.0', true);
}

add_action('wp_enqueue_scripts', 'assets');
