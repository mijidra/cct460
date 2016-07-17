<?php
function child_enqueue_scripts(){
	wp_enque_style( 'parent-css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'child_enqueue_scripts' );
?>