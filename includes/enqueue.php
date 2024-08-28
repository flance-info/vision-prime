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
function vision_prime_enqueue_styles() {
	wp_enqueue_script(
		'homepage-script',
		get_template_directory_uri() . '/web/homepage.js',
		array( 'jquery' ),
		time(),
		true
	);

	wp_enqueue_script(
		'alpinejs-intersect',
		'https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js',
		array(),
		null,
		true
	);
	wp_enqueue_script(
		'alpinejs',
		'https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js',
		array(),
		null,
		true
	);

	wp_enqueue_style(
		'vision-prime-output',
		get_template_directory_uri() . '/web/output.css',
		array(),
		filemtime( get_template_directory() . '/web/output.css' )
	);
	// Enqueue Google Fonts
	wp_enqueue_style(
		'vision-prime-google-fonts-poppins',
		'https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap',
		array(),
		null
	);
	wp_enqueue_style(
		'vision-prime-google-fonts-merriweather',
		'https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;1,400&display=swap',
		array(),
		null
	);
	wp_enqueue_style(
		'vision-prime-google-fonts-dm-sans',
		'https://fonts.googleapis.com/css2?family=DM+Sans:wght@500;700&display=swap',
		array(),
		null
	);
	wp_enqueue_style(
		'vision-prime-google-fonts-playfair',
		'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap',
		array(),
		null
	);
	wp_enqueue_style(
		'vision-prime-google-fonts-montserrat',
		'https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap',
		array(),
		null
	);
	wp_enqueue_style(
		'vision-prime-google-fonts-open-sans',
		'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&display=swap',
		array(),
		null
	);
	// Add custom font-face CSS
	wp_add_inline_style(
		'vision-prime-output',
		"
        @font-face {
            font-family: 'Eudoxus Sans';
            src: url('" . get_template_directory_uri() . "/web/public/EudoxusSans-Regular-BF659b6cb1d4714.ttf') format('truetype');
            font-weight: 400;
        }
        @font-face {
            font-family: 'Eudoxus Sans';
            src: url('" . get_template_directory_uri() . "/web/public/EudoxusSans-Medium-BF659b6cb1c14cb.ttf') format('truetype');
            font-weight: 500;
        }
        @font-face {
            font-family: 'Eudoxus Sans';
            src: url('" . get_template_directory_uri() . "/web/public/EudoxusSans-Bold-BF659b6cb1408e5.ttf') format('truetype');
            font-weight: 700;
        }
        "
	);

	wp_register_style( 'starter-navigation', get_template_directory_uri() . '/assets/css/components/header/navigation.css', array(), time() );
		wp_enqueue_script( 'starter-header', get_template_directory_uri() . '/assets/js/components/header/header.js', array( 'jquery' ), time(), true );
		wp_enqueue_style( 'starter-navigation' );
}

add_action( 'wp_enqueue_scripts', 'vision_prime_enqueue_styles' );
