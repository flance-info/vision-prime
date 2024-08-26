<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:url" content="<?php echo esc_url( get_post_permalink() ); ?>"/>
	<meta property="og:type" content="website"/>
	<meta property="og:title" content="<?php echo esc_html( get_the_title() ); ?>"/>
	<meta property="og:image" content="<?php the_post_thumbnail_url( 'full' ); ?>"/>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div
		class="w-full relative bg-general-white overflow-hidden flex flex-col items-start
		justify-start leading-[normal] tracking-[normal] text-left text-xs text-general-1-primary
		font-button-dm-sans-16 wrapper"
>
<?php
wp_body_open();
get_template_part( 'templates/header/index' );
