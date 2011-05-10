<?php

if ( function_exists( 'register_nav_menu' ) ) {
	register_nav_menu( 'nav_main', 'Main Navigation' );
}

function widgets_init() {
	register_sidebar( array(
		'name' => 'Primary Sidebar',
		'id' => 'primary-sidebar',
		'description' => 'Primary blog sidebar area',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => 'Secondary Sidebar',
		'id' => 'secondary-sidebar',
		'description' => 'Secondary blog sidebar area',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => 'Page Sidebar',
		'id' => 'page-sidebar',
		'description' => 'Non-blog pages sidebar area',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
}

add_action( 'widgets_init', 'widgets_init' );

?>