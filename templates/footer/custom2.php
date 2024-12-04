<?php

$socials_twitter_url   = get_theme_mod( 'ms_lms_starter_socials_twitter' );
$socials_facebook_url  = get_theme_mod( 'ms_lms_starter_socials_facebook' );
$socials_instagram_url = get_theme_mod( 'ms_lms_starter_socials_instagram' );
$socials_youtube_url   = get_theme_mod( 'ms_lms_starter_socials_youtube' );
?>

<section
		class="flex flex-row items-start justify-start py-0 pl-0
			gap-20 w-full text-center text-base text-general-1-primary font-subtitles-16
			mq450:gap-5 mq850:gap-10 mq1500:flex-wrap"
>
	<div class="ml-[5%] lg:ml-[0px] w-full bg-cover bg-no-repeat flex flex-row self-stretch items-center justify-center bg-[url('/wp-content/themes/vision-prime/web/public/form-builder-background@2x.png')]">
		<div class="w-full max-w-[1170px] flex-row flex mr-[5%] justify-between lg:mr-[0px] lg:ml-[20px] mq850:flex-col mq850:gap-[30px] mq850:justify-center mq850:items-center mq650:ml-[0px]">
			<div
					class="max-w-[650px] w-full flex flex-col items-start justify-start  w-full mq650:px-[20px] "
			>
				<div class="h-[120px] border-general-1-primary border-solid  border-l-[1px]"></div>
				<div
						class="max-w-full h-[200px] flex flex-col items-start justify-start relative gap-[21px] w-full z-[1]"
				>

					<div
							class="max-w-full !m-[0] absolute top-[22px] left-[0px] flex flex-col items-start justify-start gap-[21px] w-full"
					>
						<div
								class="relative tracking-[0.4em] leading-[36px] uppercase font-medium"
						>
							Feedback Form
						</div>
						<h2
								class="m-0 self-stretch relative text-35xl text-left  leading-[60px] font-normal font-heading-1-72 text-general-white mq450:text-13xl mq450:leading-[36px] mq850:text-24xl mq850:leading-[48px]"
						>
							<?php echo esc_html(get_theme_mod('footer_2_heading', 'Default Footer 1 Heading')); ?>
						</h2>
					</div>
				</div>
				<div
						class="self-stretch relative leading-[30px] font-paragraph-16 text-general-white text-left z-[1]"
				>
					<?php echo esc_html(get_theme_mod('footer_2_description', 'Default Footer 1 Description')); ?>
				</div>
			</div>
			<div
					class="max-w-[440px] w-full flex flex-row items-start justify-start relative  text-left text-gray-200 font-paragraph-16 mq650:justify-center"
			>
				<?php echo do_shortcode('[contact-form-7 id="b2b5601" title="Untitled"]'); ?>

			</div>
		</div>
	</div>
</section>
<footer
		class="self-stretch bg-general-8-secondary flex flex-col items-center justify-start pt-20 px-0 pb-0 box-border relative gap-[58px] max-w-full text-left text-lg text-general-white font-button-dm-sans-16 mq450:pt-[52px] mq450:box-border mq850:gap-[29px]"
>
	<img
			class="w-full h-full absolute !m-[0] top-[0px] right-[0px] bottom-[1px] left-[0px] max-w-full overflow-hidden max-h-full object-contain hidden z-[0]"
			alt=""
			src="/wp-content/themes/vision-prime/web/public/transparentgreencreativitymodernartinkcolorsareamazinglybrightluminoustranslucentfreeflowingdryquicklynaturalpatternluxuryabstractartworktrendystyle@2x.png"
	/>

	<div
			class="w-[1210px] flex flex-row items-start justify-start flex-wrap content-start py-0 px-5 box-border gap-[30px] max-w-full"
	>
		<div
				class="flex-1 flex flex-col items-start justify-start relative gap-[22px] min-w-[277px] max-w-full text-base text-gray-400"
		>
			<div class="flex flex-row items-center justify-center py-0 px-[3px]">

				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img
							class="h-[60px] w-[97.1px] relative"
							loading="lazy"
							alt=""
							src="https://b2bconsulty.com/wp-content/uploads/2024/11/Frame-6.png"
					/>
				</a>
			</div>
			<div
					class="self-stretch flex flex-row items-center justify-center py-0 pl-0 pr-[30px] gap-[30px] mq450:gap-[15px] mq450:flex-wrap"
			>

				<?php
				$menu_name = 'footer-one'; // The theme location you specified
				$locations = get_nav_menu_locations();
				if ( isset( $locations[ $menu_name ] ) ) {
					$menu_id    = $locations[ $menu_name ];
					$menu_items = wp_get_nav_menu_items( $menu_id );
					if ( $menu_items ) { ?>
						<div class="flex-1 flex flex-col items-start justify-start gap-2.5 min-w-[101px]">
							<?php
							foreach ( $menu_items as $menu_item ) :
								$title = esc_html( $menu_item->title );
								$url = esc_url( $menu_item->url );
								?>

								<b class="self-stretch relative leading-[22px] hover:text-general-white hover:[text-decoration:underline]"><a href="<?php echo $url ?>"> <?php echo $title ?></a></b>        <?php
							endforeach;
							?>

						</div>
						<?php
					}
				}
				?>
				<?php
				$menu_name = 'footer-two'; // The theme location you specified
				$locations = get_nav_menu_locations();
				if ( isset( $locations[ $menu_name ] ) ) {
					$menu_id    = $locations[ $menu_name ];
					$menu_items = wp_get_nav_menu_items( $menu_id );
					if ( $menu_items ) { ?>
						<div class="flex-1 flex flex-col items-start justify-start py-0 pl-0 pr-0.5 box-border gap-2.5 min-w-[180px]">
							<?php
							foreach ( $menu_items as $menu_item ) :
								$title = esc_html( $menu_item->title );
								$url = esc_url( $menu_item->url );
								?>

								<b class="self-stretch relative leading-[22px]   hover:text-general-white hover:[text-decoration:underline]"><a href="<?php echo $url ?>"> <?php echo $title ?></a></b>        <?php
							endforeach;
							?>

						</div>
						<?php
					}
				}
				?>

			</div>
			<div
					class="w-[62.97%] h-[22.05%] absolute !m-[0] top-[86.8%] right-[37.03%] bottom-[-8.85%] left-[0%] overflow-hidden hidden z-[2]"
			>
				<img
						class="absolute h-full w-[29.4%] top-[0%] right-[70.6%] bottom-[0%] left-[0%] max-w-full overflow-hidden max-h-full"
						alt=""
						src="/wp-content/themes/vision-prime/web/public/twitter.svg"
				/>

				<img
						class="absolute h-full w-[29.4%] top-[0%] right-[35.32%] bottom-[0%] left-[35.28%] max-w-full overflow-hidden max-h-full"
						alt=""
						src="/wp-content/themes/vision-prime/web/public/facebook-1.svg"
				/>

				<img
						class="absolute h-full w-[29.4%] top-[0%] right-[0.04%] bottom-[0%] left-[70.56%] max-w-full overflow-hidden max-h-full"
						alt=""
						src="/wp-content/themes/vision-prime/web/public/youtube-1.svg"
				/>
			</div>
		</div>
		<div
				class="flex-1 flex flex-col items-start justify-start gap-5 min-w-[277px] max-w-full"
		>
			<div
					class="self-stretch overflow-hidden flex flex-col items-start justify-start gap-2.5"
			>
					<a href="tel:+97145677333" class="relative leading-[24px] whitespace-nowrap font-bold hover:[text-decoration:underline]">800-LICENSE (542 3673)</a>
				<div
						class="self-stretch relative text-sm leading-[24px] font-body-b3-merriweather-14 text-gray-300"
				>
					If you are calling from outside the UAE, please contact us on
				</div>
			</div>
			<div
					class="self-stretch overflow-hidden flex flex-col items-start justify-start gap-2.5"
			>
				<a href="tel:+971585167702" class="relative leading-[24px] whitespace-nowrap font-bold hover:[text-decoration:underline]">
					+971 58 516 7702
				</a>

				<div
						class="self-stretch relative text-sm leading-[24px] font-body-b3-merriweather-14 text-gray-300"
				>
					or email us at
				</div>
				<a href="mailto:info@b2bconsulty.com" class="relative leading-[24px] font-bold whitespace-nowrap hover:[text-decoration:underline]">info@b2bconsulty.com</a>

			</div>
		</div>


		<div
				class="flex-1 flex flex-col items-start justify-start gap-[30px] min-w-[277px] max-w-full"
		>
			<?php
			// Get the social media URLs from the Customizer settings, or assign null if not set
			$twitter_url   = get_theme_mod( 'ms_lms_starter_socials_twitter', null );
			$facebook_url  = get_theme_mod( 'ms_lms_starter_socials_facebook', null );
			$instagram_url = get_theme_mod( 'ms_lms_starter_socials_instagram', null );
			$youtube_url   = get_theme_mod( 'ms_lms_starter_socials_youtube', null );
			?>

			<div class="social-icons flex flex-row gap-4">
					<a href="<?php echo esc_url( $facebook_url ); ?>" target="_blank" rel="noopener noreferrer">
					<img class="h-[33px] w-[33px] relative rounded min-h-[33px]" loading="lazy" alt="Facebook" src="/wp-content/themes/vision-prime/web/public/link--facebook.svg"/>
				</a>
				<a href="<?php echo esc_url( $twitter_url ); ?>" target="_blank" rel="noopener noreferrer">
					<img class="h-[33px] w-[33px] relative rounded min-h-[33px]" loading="lazy" alt="Twitter" src="/wp-content/themes/vision-prime/web/public/link--twitter.svg"/>
				</a>


				<a href="<?php echo esc_url( $instagram_url ); ?>" target="_blank" rel="noopener noreferrer">
					<img class="h-[33px] w-[33px] relative rounded min-h-[33px]" loading="lazy" alt="Instagram" src="/wp-content/themes/vision-prime/web/public/link--instagram.svg"/>
				</a>

				<a href="<?php echo esc_url( $youtube_url ); ?>" target="_blank" rel="noopener noreferrer">
					<img class="h-[33px] w-[33px] relative rounded min-h-[33px]" loading="lazy" alt="YouTube" src="/wp-content/themes/vision-prime/web/public/link--pinterest.svg"/>
				</a>
			</div>

			<b
					class="self-stretch h-[72px] relative leading-[24px] inline-block"
			>Office 105, Level 1, Emaar Square – Building 4, Sheikh Mohammed
				Bin Rashid Boulevard Downtown Dubai, United Arab Emirates</b
			>
		</div>
	</div>
	<div
			class="self-stretch flex flex-col items-center justify-start gap-[25px] max-w-full"
	>
		<img
				class="w-[1170px] relative max-h-full max-w-full"
				loading="lazy"
				alt=""
				src="/wp-content/themes/vision-prime/web/public/rectangle-691.svg"
		/>

		<copyright
				class="self-stretch flex flex-row items-center justify-center pt-0 px-[375px] pb-[26px] box-border max-w-full text-left text-xs text-gray-400 font-primary-paragraph-paragraph-5 lg:pl-[187px] lg:pr-[187px] lg:box-border mq850:pl-[93px] mq850:pr-[93px] mq850:box-border"
		>
			<div
					class="flex-1 flex flex-row items-center justify-center py-0 px-5 box-border gap-0.5 max-w-full mq450:flex-wrap"
			>
				<div class="w-11 relative leading-[22px] inline-block">
					© 2024
				</div>
				<div
						class="relative leading-[22px] text-general-white inline-block min-w-[69px] mr-[3px]"
				>
					B2B Consulty
				</div>
				<div
						class="relative leading-[22px]  inline-block min-w-[112px]"
				>
					| All rights reserved | Powered by <a style="color: #fff;" href="https://codico.io" title="CodiCo - Web Development Expert" target="_blank">CodiCo.io</a>
				</div>
			</div>
		</copyright>
	</div>
</footer>
<div class="relative z-[11111111111111] stm-f" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="myModal" style="display: none;">
  <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
  <div class="fixed inset-0 z-10 overflow-y-auto">
    <div class="flex items-start justify-center min-h-full p-4 pt-[40px] text-center sm:items-center sm:p-0">
      <div class="relative bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
        <div class="bg-general-1-primary ">
          <div class="sm:flex sm:items-start ">
<?php echo do_shortcode('[contact-form-7 id="b2b5601" title="Untitled"]'); ?>

          </div>
        </div>
       <button type="button" class="absolute top-4 right-4 text-white hover:text-gray-300 focus:outline-none" onclick="closeModal()">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </button>
      </div>
    </div>
  </div>
</div>
