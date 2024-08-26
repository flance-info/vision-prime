<?php

$custom_logo_id         = $logo_image = starter_get_option( 'logo_image', '' );
$logo_image             = wp_get_attachment_image_src( $custom_logo_id, 'full' );
$customizer_logo_width  = get_theme_mod( 'ms_lms_starter_logo_width' ) ? get_theme_mod( 'ms_lms_starter_logo_width' ) : '226';
$customizer_logo_height = get_theme_mod( 'ms_lms_starter_logo_height' ) ? get_theme_mod( 'ms_lms_starter_logo_height' ) : '40';
?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="starter-logo">
	<img
			class="h-[60px] w-[97.1px] relative"
			loading="lazy"
			alt=""
			src="<?php echo esc_url( $logo_image[0] ); ?>"
	/>
</a>

