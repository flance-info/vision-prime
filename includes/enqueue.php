<?php
// phpcs:ignoreFile

if ( ! function_exists( 'vcn_starter_styles_and_scripts' ) && ! is_admin() ) {
	function vcn_starter_styles_and_scripts() {

		/*Styles*/
		wp_enqueue_style( 'starter-style', get_stylesheet_uri(), array(), VCN_THEME_VERSION );
		wp_enqueue_style( 'starter-base', VCN_TEMPLATE_URI . '/assets/css/style.css', array(), VCN_THEME_VERSION );
		//wp_enqueue_style( 'google-fonts', starter_theme_fonts(), array(), VCN_THEME_VERSION );

	}
}

add_action( 'wp_enqueue_scripts', 'vcn_starter_styles_and_scripts' );

