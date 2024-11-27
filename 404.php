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
	<script type="text/javascript" src="/wp-content/themes/vision-prime/assets/js/components/header/header.js?ver=1725194558" id="starter-header-js"></script>
</head>
<body <?php body_class(); ?>>
<div class="w-full">

<img
			class="absolute inset-0 w-full h-full object-cover"
			alt=""
			src="/wp-content/themes/vision-prime/web/404/public/desert1654439-1920@2x.png"
	/>
<?php
wp_body_open();
get_template_part( 'templates/header/index404' );
?>

<div class="w-full relative bg-general-white overflow-hidden flex flex-col items-start justify-start pt-[0px] px-[0px] pb-[249px] box-border gap-[17.5px] leading-[normal] tracking-[normal] text-right text-sm text-general-1-secondary-variant font-body-b3-merriweather-14">
      <img class="w-full h-full absolute !m-[0] top-[0px] right-[0px] bottom-[0px] left-[0px] max-w-full overflow-hidden max-h-full object-cover" alt="" src="/wp-content/themes/vision-prime/web/404/public/desert1654439-1920@2x.png">

      <section class="self-stretch flex flex-col items-start justify-start max-w-full">
        <header class="self-stretch flex flex-row items-center justify-between py-[15px] px-[375px] box-border max-w-full gap-[20px] z-[2] text-right text-base text-general-white font-subtitles-16 mq450:pl-[20px] mq450:pr-[20px] mq450:box-border mq750:pl-[93px] mq750:pr-[93px] mq750:box-border mq1225:pl-[187px] mq1225:pr-[187px] mq1225:box-border">

        </header>
        <img class="self-stretch relative max-w-full overflow-hidden max-h-full z-[1] mt-[-40px]" alt="" src="/wp-content/themes/vision-prime/web/404/public/mask-group.svg">
      </section>
      <div class="self-stretch bg-general-white hidden flex-col items-center justify-start max-w-full z-[2]">
        <div class="self-stretch flex flex-row items-center justify-between py-[25px] px-[375px] gap-[-109px] [row-gap:20px] mq1050:flex-wrap">
          <div class="hidden flex-row items-center justify-end gap-[7.5px] z-[1] text-smi mq1050:flex-wrap">
            <img class="h-[22px] w-[22px] relative overflow-hidden shrink-0 min-h-[22px]" alt="" src="/wp-content/themes/vision-prime/web/404/public/feather-iconsglobe.svg">

            <div class="h-[22px] relative leading-[22px] inline-block">
              English
            </div>
            <img class="h-[22px] w-[22px] relative min-h-[22px]" alt="" src="/wp-content/themes/vision-prime/web/404/public/iconssmall-iconsarrowchevrondown.svg">
          </div>
          <div class="h-[24px] flex flex-row items-center justify-end gap-[8px] z-[2] text-elements-neutral-2">
            <img class="h-[22px] w-[22px] relative overflow-hidden shrink-0" alt="" src="/wp-content/themes/vision-prime/web/404/public/feather-iconsphone.svg">

            <div class="self-stretch relative leading-[24px]">212-714-0177</div>
          </div>
          <div class="flex flex-row items-center justify-start gap-[2px] z-[3] mq1050:flex-wrap">
            <img class="h-[36px] w-[36px] relative" alt="" src="/wp-content/themes/vision-prime/web/404/public/logomark.svg">

            <img class="h-[27.8px] w-[131px] relative" alt="" src="/wp-content/themes/vision-prime/web/404/public/logotype.svg">
          </div>
          <div class="flex flex-row items-start justify-start gap-[30px] z-[4] mq1050:flex-wrap">
            <div class="h-[24px] flex flex-row items-center justify-start gap-[8px]">
              <img class="h-[22px] w-[22px] relative overflow-hidden shrink-0" alt="" src="/wp-content/themes/vision-prime/web/404/public/feather-iconssearch.svg">

              <div class="self-stretch relative leading-[24px]">Search</div>
            </div>
            <div class="h-[24px] flex flex-row items-center justify-start gap-[8px]">
              <img class="h-[22px] w-[22px] relative overflow-hidden shrink-0" alt="" src="/wp-content/themes/vision-prime/web/404/public/feather-iconsshoppingcart.svg">

              <div class="self-stretch relative leading-[24px]">Cart</div>
            </div>
          </div>
        </div>
        <img class="w-[1170px] relative max-h-full max-w-full" alt="" src="/wp-content/themes/vision-prime/web/404/public/shape-4.svg">

        <div class="self-stretch flex flex-row items-center justify-center pt-[21px] px-[375px] pb-[20px] gap-[33px] text-base text-general-1-secondary font-button-dm-sans-16 mq1225:flex-wrap mq1225:justify-start">
          <div class="h-[22px] flex flex-row items-center justify-start gap-[4px] text-general-1-primary">
            <b class="self-stretch relative leading-[22px] uppercase">Home</b>
            <div class="flex flex-col items-start justify-start">
              <img class="w-[16px] h-[16px] relative" alt="" src="/wp-content/themes/vision-prime/web/404/public/iconssmall-iconsarrowchevrondown-1.svg">
            </div>
          </div>
          <div class="h-[22px] flex flex-row items-center justify-start gap-[4px]">
            <b class="self-stretch relative leading-[22px] uppercase">Pages</b>
            <div class="flex flex-col items-start justify-start">
              <img class="w-[16px] h-[16px] relative" alt="" src="/wp-content/themes/vision-prime/web/404/public/iconssmall-iconsarrowchevrondown-2.svg">
            </div>
          </div>
          <div class="h-[22px] flex flex-row items-center justify-start gap-[4px]">
            <b class="self-stretch relative leading-[22px] uppercase">Portfolio</b>
            <div class="flex flex-col items-start justify-start">
              <img class="w-[16px] h-[16px] relative" alt="" src="/wp-content/themes/vision-prime/web/404/public/iconssmall-iconsarrowchevrondown-2.svg">
            </div>
          </div>
          <div class="h-[22px] hidden flex-row items-center justify-start gap-[4px] text-general-white">
            <b class="self-stretch relative leading-[22px] uppercase">Blog</b>
            <div class="flex flex-col items-start justify-start">
              <img class="w-[16px] h-[16px] relative" alt="" src="/wp-content/themes/vision-prime/web/404/public/iconssmall-iconsarrowchevrondown-4.svg">
            </div>
          </div>
          <div class="h-[22px] flex flex-row items-center justify-start gap-[4px]">
            <b class="self-stretch relative leading-[22px] uppercase">Shop</b>
            <div class="flex flex-col items-start justify-start">
              <img class="w-[16px] h-[16px] relative" alt="" src="/wp-content/themes/vision-prime/web/404/public/iconssmall-iconsarrowchevrondown-2.svg">
            </div>
          </div>
          <div class="h-[22px] hidden flex-row items-center justify-start gap-[4px] text-general-white">
            <b class="self-stretch relative leading-[22px] uppercase">Elements</b>
            <div class="flex flex-col items-start justify-start">
              <img class="w-[16px] h-[16px] relative" alt="" src="/wp-content/themes/vision-prime/web/404/public/iconssmall-iconsarrowchevrondown-4.svg">
            </div>
          </div>
          <div class="h-[22px] flex flex-row items-center justify-start gap-[3px]">
            <b class="self-stretch relative leading-[22px] uppercase">Support</b>
            <div class="flex flex-col items-start justify-start">
              <img class="w-[16px] h-[16px] relative" alt="" src="/wp-content/themes/vision-prime/web/404/public/iconssmall-iconsarrowchevrondown-2.svg">
            </div>
          </div>
        </div>
      </div>
      <section class="self-stretch flex flex-row items-start justify-center py-[0px] px-[20px] box-border max-w-full text-center text-41xl text-general-white font-heading-1-72">
        <div class="w-[652px] flex flex-col items-center justify-start gap-[60px] max-w-full mq750:gap-[30px]">
          <h1 class="m-[0px] h-[132px] relative text-inherit tracking-[-0.03em] leading-[66px] font-bold font-inherit inline-block z-[1] mq450:text-17xl mq450:leading-[40px] mq750:text-29xl mq750:leading-[53px]">
            <p class="m-[0px]">We couldn’t find the page</p>
            <p class="m-[0px]">you’re looking for</p>
          </h1>
          <div class="self-stretch flex flex-row items-start justify-center py-[0px] px-[20px]">
            <button class="cursor-pointer [border:none] py-[14px] px-[50px] bg-general-8-secondary overflow-hidden flex flex-row items-start justify-start relative gap-[10px] whitespace-nowrap z-[1] hover:bg-darkslategray">
              <div class="h-full w-full absolute !m-[0] top-[0px] right-[0px] bottom-[0px] left-[0px]"></div>
              <b class="relative text-base leading-[22px] inline-block font-button-dm-sans-16 text-general-white text-center min-w-[70px] z-[1]">Go home</b>
            </button>
          </div>
        </div>
      </section>

      </div>
    </div>

</div>


