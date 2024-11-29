<div class="header-placeholder hidden h-[90px] mq950:block "></div>
<header
		class="stm-h self-stretch bg-general-white er-back-tr coltr
		flex flex-row items-center justify-center py-[15px] box-border
		top-[0] z-[11111] sticky mq950:fixed mq780: max-w-full gap-5 text-right text-base text-general-8-secondary font-subtitles-16  lg:box-border  mq450:box-border mq850:box-border"
>
	<div class="w-[1170px] flex flex-row items-end justify-between max-w-full mq650:pl-[20px] mq650:pr-[10px]
	mq950:pl-[20px] mq950:pr-[10px]
	mq850:items-center">
		<div class="flex flex-row items-center justify-center py-0 px-[3px]">
			<?php get_template_part( 'templates/header/parts/logo' ); ?>
		</div>
		<?php
		$menu_name = 'ms-lms-starter-theme-main-menu'; // The theme location you specified
		$locations = get_nav_menu_locations();
		if ( isset( $locations[ $menu_name ] ) ) {
			$menu_id    = $locations[ $menu_name ];
			$menu_items = wp_get_nav_menu_items( $menu_id );
			if ( $menu_items ) {
				// Create an array to hold the menu items by their parent IDs
				$menu_item_parents = [];
				foreach ( $menu_items as $menu_item ) {
					// Group menu items by their parent IDs
					$menu_item_parents[ $menu_item->menu_item_parent ][] = $menu_item;
				}
				echo '<div class="flex flex-row items-center justify-center py-5 px-0 box-border gap-[30px] max-w-full mq1024:hidden mq850:gap-5">';


				foreach ( $menu_item_parents[0] as $menu_item ) { // Start with the top-level items
					$title        = esc_html( $menu_item->title );
					$url          = esc_url( $menu_item->url );
					$has_children = isset( $menu_item_parents[ $menu_item->ID ] );
					?>

					<div class="relative flex flex-col items-end justify-start gap-1.5 <?php if ($has_children ): ?> group <?php endif ; ?> ">
						<a class="[text-decoration:none] relative tracking-[0.04em] leading-[18px] uppercase font-medium text-[inherit] whitespace-nowrap  hover:text-general-1-primary" href="<?php echo $url ?>">
							<?php echo $title ?>
							<?php if ( $has_children ): ?>
								<img class="inline-block h-[18px] w-[18px] relative overflow-hidden shrink-0 min-h-[18px]
transform transition-transform duration-300 group-hover:rotate-180" src="/wp-content/themes/vision-prime/web/public/feather-iconschevrondown.svg" alt="Submenu Icon"/>
							<?php endif ?>
						</a>
						<?php if ( $has_children ): ?>
							<div class="absolute right-[0px] hidden mt-2 bg-white shadow-lg rounded-md w-48 group-hover:block z-10 w-full text-left min-h-[100px] top-[8px] er-back-tr">
								<ul class="py-2">
									<?php foreach ( $menu_item_parents[ $menu_item->ID ] as $child ): ?>
										<li>
											<a href="<?php echo esc_url( $child->url ); ?>" class="block px-4 py-2  hover:bg-elements-neutral-4">
												<?php echo esc_html( $child->title ); ?>
											</a>
											<?php print_r($menu_item_parents[ $child->ID ]) ?>

										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						<?php endif; ?>
					</div>
					<?php
				}
				echo '</div>';
			}
		}
		?>

		<?php
		$menu_args = array(
				'depth'          => 3,
				'container'      => false,
				'items_wrap'     => '%3$s',
				'fallback_cb'    => false,
				'theme_location' => 'ms-lms-starter-theme-main-menu',
		);
		?>
		<div class="navigation mr-[20px] hidden mq1024:flex">
			<div class="navigation-menu">
				<ul class="starter-menu menu ">
					<?php wp_nav_menu( $menu_args ); ?>
				</ul>

				<div class="mobile-switcher">
					<span></span> <span></span> <span></span>
				</div>
			</div>
		</div>
	</div>


</header>


