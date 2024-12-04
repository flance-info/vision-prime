<?php

function starter_customize_register( $wp_customize ) {

	// Add a section for the theme options
	$wp_customize->add_section( 'starter_theme_options_section', array(
		'title'    => __( 'Vision Prime Theme Options', 'starter' ),
		'priority' => 30,
	) );
	// Add a setting for the logo image (storing the media ID)
	$wp_customize->add_setting( 'stm_theme_settings[logo_image]', array(
		'default'           => '',
		'type'              => 'option',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'absint', // Store the media ID as an integer
	) );
	$wp_customize->add_setting( 'stm_theme_settings[logo_image_white]', array(
		'default'           => '',
		'type'              => 'option',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'absint', // Store the media ID as an integer
	) );
	// Add a control for the logo image
	$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'starter_logo_image', array(
		'label'       => __( 'Logo Image', 'starter' ),
		'section'     => 'starter_theme_options_section',
		'settings'    => 'stm_theme_settings[logo_image]',
		'mime_type'   => 'image', // Restrict to images only
		'description' => __( 'Upload your logo here. The media ID will be stored.', 'starter' ),
	) ) );
	// Add a control for the logo image
	$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'starter_logo_image_white', array(
		'label'       => __( 'White Logo Image', 'starter' ),
		'section'     => 'starter_theme_options_section',
		'settings'    => 'stm_theme_settings[logo_image_white]',
		'mime_type'   => 'image', // Restrict to images only
		'description' => __( 'Upload your White logo here. The media ID will be stored.', 'starter' ),
	) ) );
	// Add a setting for the logo width
	$wp_customize->add_setting( 'ms_lms_starter_logo_width', array(
		'default'           => '226',
		'sanitize_callback' => 'absint',
	) );
	// Add a control for the logo width
	$wp_customize->add_control( 'ms_lms_starter_logo_width_control', array(
		'label'       => __( 'Logo Width (px)', 'starter' ),
		'section'     => 'starter_theme_options_section',
		'settings'    => 'ms_lms_starter_logo_width',
		'type'        => 'number',
		'input_attrs' => array(
			'min'  => 1,
			'max'  => 1000,
			'step' => 1,
		),
		'description' => __( 'Set the width of your logo in pixels.', 'starter' ),
	) );
	// Add a setting for the logo height
	$wp_customize->add_setting( 'ms_lms_starter_logo_height', array(
		'default'           => '40',
		'sanitize_callback' => 'absint',
	) );
	// Add a control for the logo height
	$wp_customize->add_control( 'ms_lms_starter_logo_height_control', array(
		'label'       => __( 'Logo Height (px)', 'starter' ),
		'section'     => 'starter_theme_options_section',
		'settings'    => 'ms_lms_starter_logo_height',
		'type'        => 'number',
		'input_attrs' => array(
			'min'  => 1,
			'max'  => 1000,
			'step' => 1,
		),
		'description' => __( 'Set the height of your logo in pixels.', 'starter' ),
	) );
	// Add a setting for Twitter URL
	$wp_customize->add_setting( 'ms_lms_starter_socials_twitter', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	// Add a control for Twitter URL
	$wp_customize->add_control( 'ms_lms_starter_socials_twitter_control', array(
		'label'       => __( 'Twitter URL', 'starter' ),
		'section'     => 'starter_theme_options_section',
		'settings'    => 'ms_lms_starter_socials_twitter',
		'type'        => 'url',
		'description' => __( 'Enter the URL for your Twitter profile.', 'starter' ),
	) );
	// Add a setting for Facebook URL
	$wp_customize->add_setting( 'ms_lms_starter_socials_facebook', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	// Add a control for Facebook URL
	$wp_customize->add_control( 'ms_lms_starter_socials_facebook_control', array(
		'label'       => __( 'Facebook URL', 'starter' ),
		'section'     => 'starter_theme_options_section',
		'settings'    => 'ms_lms_starter_socials_facebook',
		'type'        => 'url',
		'description' => __( 'Enter the URL for your Facebook profile.', 'starter' ),
	) );
	// Add a setting for Instagram URL
	$wp_customize->add_setting( 'ms_lms_starter_socials_instagram', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	// Add a control for Instagram URL
	$wp_customize->add_control( 'ms_lms_starter_socials_instagram_control', array(
		'label'       => __( 'Instagram URL', 'starter' ),
		'section'     => 'starter_theme_options_section',
		'settings'    => 'ms_lms_starter_socials_instagram',
		'type'        => 'url',
		'description' => __( 'Enter the URL for your Instagram profile.', 'starter' ),
	) );
	// Add a setting for YouTube URL
	$wp_customize->add_setting( 'ms_lms_starter_socials_youtube', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	// Add a control for YouTube URL
	$wp_customize->add_control( 'ms_lms_starter_socials_youtube_control', array(
		'label'       => __( 'YouTube URL', 'starter' ),
		'section'     => 'starter_theme_options_section',
		'settings'    => 'ms_lms_starter_socials_youtube',
		'type'        => 'url',
		'description' => __( 'Enter the URL for your YouTube channel.', 'starter' ),
	) );

}

add_action( 'customize_register', 'starter_customize_register' );

function theme_customize_register($wp_customize) {
    // Footer 1 Section
    $wp_customize->add_section('footer_1_section', array(
        'title'    => __('Footer 1', 'vision-prime'),
        'priority' => 30,
    ));

    // Footer 1 Heading
    $wp_customize->add_setting('footer_1_heading', array(
        'default'           => __('Let’s Discuss Your Project', 'vision-prime'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_1_heading', array(
        'label'    => __('Footer 1 Heading', 'vision-prime'),
        'section'  => 'footer_1_section',
        'type'     => 'text',
    ));

    // Footer 1 Description
    $wp_customize->add_setting('footer_1_description', array(
        'default'           => __('By contacting us you can make a direct appointment with our agents in London or arrange your visit to our “Sales Office” and “Meeting Room” in the Emirate of Dubai. Our investors always have access to the support and assistance service for in-depth information on the investments and the conditions we can offer. It is also possible to book guided visits to construction sites or to buildings that have already been completed.', 'vision-prime'),
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('footer_1_description', array(
        'label'    => __('Footer 1 Description', 'vision-prime'),
        'section'  => 'footer_1_section',
        'type'     => 'textarea',
    ));

    // Footer 2 Section
    $wp_customize->add_section('footer_2_section', array(
        'title'    => __('Footer 2', 'vision-prime'),
        'priority' => 31,
    ));

    // Footer 2 Heading
    $wp_customize->add_setting('footer_2_heading', array(
        'default'           => __('Let’s Discuss Your Project', 'vision-prime'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_2_heading', array(
        'label'    => __('Footer 2 Heading', 'vision-prime'),
        'section'  => 'footer_2_section',
        'type'     => 'text',
    ));

    // Footer 2 Description
    $wp_customize->add_setting('footer_2_description', array(
        'default'           => __('By contacting us you can make a direct appointment with our agents in London or arrange your visit to our “Sales Office” and “Meeting Room” in the Emirate of Dubai. Our investors always have access to the support and assistance service for in-depth information on the investments and the conditions we can offer. It is also possible to book guided visits to construction sites or to buildings that have already been completed.', 'vision-prime'),
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('footer_2_description', array(
        'label'    => __('Footer 2 Description', 'vision-prime'),
        'section'  => 'footer_2_section',
        'type'     => 'textarea',
    ));
}
add_action('customize_register', 'theme_customize_register');


