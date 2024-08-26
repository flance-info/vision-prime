<?php
$menu_args = array(
	'depth'          => 3,
	'container'      => false,
	'items_wrap'     => '%3$s',
	'fallback_cb'    => false,
	'theme_location' => 'ms-lms-starter-theme-main-menu',
);


?>
<header
		class="self-stretch bg-general-white flex flex-row items-center justify-center py-[15px] box-border top-[0] z-[99] sticky max-w-full gap-5 text-right text-base text-general-8-secondary font-subtitles-16  lg:box-border  mq450:box-border mq850:box-border"
>
	<div class="w-[1170px] flex flex-row items-end justify-between max-w-full ">
		<div class="flex flex-row items-center justify-center py-0 px-[3px]">
			<?php get_template_part( 'templates/header/parts/logo' ); ?>
		</div>
		<div
				class="flex flex-row items-center justify-center py-5 px-0 box-border gap-[39.3px] max-w-full lg:hidden mq850:gap-5"
		>
			<div class="flex flex-row items-center justify-start gap-1.5">
				<a
						class="[text-decoration:none] relative tracking-[0.04em] leading-[18px] uppercase font-medium text-[inherit] whitespace-nowrap"
				>Business Setup Services</a
				>
				<img
						class="h-[18px] w-[18px] relative overflow-hidden shrink-0 min-h-[18px]"
						alt=""
						src="/wp-content/themes/vision-prime/web/public/feather-iconschevrondown.svg"
				/>
			</div>
			<div class="flex flex-row items-center justify-start gap-2.5">
				<a
						class="[text-decoration:none] relative tracking-[0.04em] leading-[18px] uppercase font-medium text-[inherit] whitespace-nowrap"
				>Financial Services</a
				>
				<img
						class="h-[18px] w-[18px] relative overflow-hidden shrink-0 min-h-[18px]"
						alt=""
						src="/wp-content/themes/vision-prime/web/public/feather-iconschevrondown.svg"
				/>
			</div>
			<div class="flex flex-row items-center justify-start gap-2.5">
				<div
						class="relative tracking-[0.04em] leading-[18px] uppercase font-medium whitespace-nowrap"
				>
					Complex Business Support
				</div>
				<img
						class="h-[18px] w-[18px] relative overflow-hidden shrink-0 min-h-[18px]"
						alt=""
						src="/wp-content/themes/vision-prime/web/public/feather-iconschevrondown.svg"
				/>
			</div>
			<a
					class="[text-decoration:none] relative tracking-[0.04em] leading-[18px] uppercase font-medium text-[inherit] inline-block min-w-[58px]"
			>About</a
			>
			<a
					class="[text-decoration:none] relative tracking-[0.04em] leading-[18px] uppercase font-medium text-[inherit] inline-block min-w-[85px] whitespace-nowrap"
			>Contact
			</a>
		</div>
	</div>
</header>
<div class="navigation-menu">
	<ul class="starter-menu menu">
		<?php wp_nav_menu( $menu_args ); ?>
	</ul>

	<div class="mobile-switcher">
		<span></span> <span></span> <span></span>
	</div>
</div>
