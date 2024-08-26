<header
		class="self-stretch bg-general-white flex flex-row items-center justify-center py-[15px] box-border top-[0] z-[99] sticky max-w-full gap-5 text-right text-base text-general-8-secondary font-subtitles-16  lg:box-border  mq450:box-border mq850:box-border"
>
	<div class="w-[1170px] flex flex-row items-end justify-between max-w-full ">
		<div class="flex flex-row items-center justify-center py-0 px-[3px]">
			<?php get_template_part( 'templates/header/parts/logo' ); ?>
		</div>
		<?php
		$menu_name = 'ms-lms-starter-theme-main-menu'; // The theme location you specified
		$locations = get_nav_menu_locations();
		if ( isset( $locations[ $menu_name ] ) ) {
			$menu_id    = $locations[ $menu_name ];
			$menu_items = wp_get_nav_menu_items( $menu_id );
			if ( $menu_items ) { ?>
				<div class="flex flex-row items-center justify-center py-5 px-0 box-border gap-[30px] max-w-full lg:hidden mq850:gap-5">
					<?php
					foreach ( $menu_items as $menu_item ) :
						$title = esc_html( $menu_item->title );
						$url = esc_url( $menu_item->url );
						?>
						<div class="flex flex-row items-center justify-start gap-1.5">
							<a class="[text-decoration:none] relative tracking-[0.04em] leading-[18px] uppercase font-medium text-[inherit] whitespace-nowrap" href="<?php echo $url ?>"> <?php echo $title ?> </a>
							<img class="h-[18px] w-[18px] relative overflow-hidden shrink-0 min-h-[18px]" src="/wp-content/themes/vision-prime/web/public/feather-iconschevrondown.svg"/>
						</div>
					<?php
					endforeach;
					?>

				</div>
				<?php
			}
		}
		?>

	</div>
</header>


