<?php
$custom_logo_id         = $logo_image = starter_get_option( 'logo_image', '' );
$logo_image             = wp_get_attachment_image_src( $custom_logo_id, 'full' );
$customizer_logo_width  = get_theme_mod( 'ms_lms_starter_logo_width' ) ? get_theme_mod( 'ms_lms_starter_logo_width' ) : '226';
$customizer_logo_height = get_theme_mod( 'ms_lms_starter_logo_height' ) ? get_theme_mod( 'ms_lms_starter_logo_height' ) : '40';


	if ( ! empty( $custom_logo_id ) ) {
		?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="starter-logo">
			<img src="<?php echo esc_url( $logo_image[0] ); ?>" alt="<?php echo esc_html( get_the_title( $custom_logo_id ) ); ?>">
		</a>
	<?php } else { ?>
		<a href="<?php echo esc_url( site_url( '/' ) ); ?>" class="starter-logo">
			<img width="<?php echo esc_attr( $customizer_logo_width ); ?>" height="<?php echo esc_attr( $customizer_logo_height ); ?>" src="
			<?php
			echo esc_url(
				get_template_directory_uri() . '/assets/images/base/logo-default.png'
			);
			?>
			" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" />
		</a>
		<?php
	}

