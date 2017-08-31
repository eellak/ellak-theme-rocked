<?php

/**
 * enqueue parent style and child scripts for rocked-ellak child theme
 */

function rocked_ellak_enqueue_parent_style(){
	wp_enqueue_style('rocked-ellak-parent-style', get_template_directory_uri().'/style.css');
	
	wp_enqueue_script('rocked-ellak-child-scripts', get_stylesheet_directory_uri().'/js/eellak-scripts.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'rocked_ellak_enqueue_parent_style');

/**
 * enqueue custom style for diadose bar
 */
function ellak_diadose_style_rocked() {
    wp_register_style('ellak-diadose-css-rocked', get_stylesheet_directory_uri() . '/css/diadose_css.css');
    wp_enqueue_style('ellak-diadose-css-rocked');
    
    wp_enqueue_style('ellak-duckduckgo-search-box', get_stylesheet_directory_uri().'/css/duck-duck-style.css');
    
    wp_enqueue_style('rocked-ellak-extra-css', get_stylesheet_directory_uri().'/css/extra-css-rules.css');
}
add_action('wp_enqueue_scripts', 'ellak_diadose_style_rocked');

//add_action('wp_enqueue_scripts', 'rocked_enqueue_bootstrap', 9);

// load the ellak news bar if available
// add_action( 'wp_head', 'rocked_load_newsbar' );
// function rocked_load_newsbar() {
// 	if( function_exists( 'ellak_newsbar' ) ) {
// 		ellak_newsbar();
// 	}
// }

/*
 * Remove the search icon from admin bar if user is not admin
 */
function ellak_remove_search_icon($wp_admin_bar){
    $wp_admin_bar->remove_node('search');
}
add_action('admin_bar_menu', 'ellak_remove_search_icon');

// The additional breadcrumbs navigation menu location for rocked child.
register_nav_menus( array(
	'usermenu' => esc_html__( 'Navigation Menu', 'rocked' ),
) );

