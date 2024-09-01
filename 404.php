<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Nexter
 * @since	1.0.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
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
		class="relative w-full bg-general-white overflow-hidden
 flex flex-col
		w-full relative bg-general-white overflow-hidden flex flex-col items-start
		justify-start leading-[normal] tracking-[normal] text-left text-xs text-general-1-primary
		font-button-dm-sans-16 wrapper flex flex-col pt-0 pb-[249px] gap-[17.5px] "
>

<img
			class="absolute inset-0 w-full h-full object-cover"
			alt=""
			src="/wp-content/themes/vision-prime/web/404/public/desert1654439-1920@2x.png"
	/>
<?php
wp_body_open();
get_template_part( 'templates/header/index404' );
?>


	<section class="flex items-start justify-center py-0 px-[20px] text-center text-41xl text-general-white font-heading-1-72">
		<div class="w-[652px] flex flex-col items-start gap-[60px] mq750:gap-[30px]">
			<h1 class="m-0 h-[132px] text-inherit tracking-[-0.03em] leading-[66px] font-bold z-1 mq450:text-17xl mq450:leading-[40px] mq750:text-29xl mq750:leading-[53px]">
				<p>We couldn’t find the page</p>
				<p>you’re looking for</p>
			</h1>
			<div class="w-full flex items-start justify-center py-0 px-[20px]">
				<button class="cursor-pointer border-none py-[14px] px-[50px] bg-general-8-secondary flex items-start gap-[10px] hover:bg-darkslategray">
					<b class="text-base leading-[22px] text-general-white text-center min-w-[70px] z-1">Go home</b>
				</button>
			</div>
		</div>
	</section>

</div>


