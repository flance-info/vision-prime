<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Register the widget
function register_custom_banner_widget() {

	if ( did_action( 'elementor/loaded' ) ) {
		require_once( get_stylesheet_directory() . '/elementor-widgets/class-fractal-base-elementor.php' );
		$widgets_directory = get_stylesheet_directory() . '/elementor-widgets/';
		$widget_files      = glob( $widgets_directory . '*.php' );
		foreach ( $widget_files as $file ) {
			require_once( $file );
		}

	}
}

add_action( 'elementor/widgets/widgets_registered', 'register_custom_banner_widget' );
function register_fractal_category_on_top( $elements_manager ) {

	$elements_manager->add_category(
		'vision-prime',
		[
			'title' => __( 'Vision Prime Widgets', 'vision-prime' ),
			'icon'  => 'fa fa-plug',
		],
		0 // Priority: setting it to a lower number moves it to the top
	);

}

add_action( 'elementor/elements/categories_registered', 'register_fractal_category_on_top', 5 );
function move_fractal_category_to_top( $categories ) {

	if ( isset( $categories['vision-prime'] ) ) {
		$fractal_category = $categories['vision-prime'];
		unset( $categories['vision-prime'] );
		$categories = array_merge( [ 'vision-prime' => $fractal_category ], $categories );
	}

	return $categories;
}

add_filter( 'elementor/widgets/categories', 'move_fractal_category_to_top' );


