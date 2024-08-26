<?php

$socials_twitter_url   = get_theme_mod( 'ms_lms_starter_socials_twitter' );
$socials_facebook_url  = get_theme_mod( 'ms_lms_starter_socials_facebook' );
$socials_instagram_url = get_theme_mod( 'ms_lms_starter_socials_instagram' );
$socials_youtube_url   = get_theme_mod( 'ms_lms_starter_socials_youtube' );
?>

<footer class="footer">
	<div class="container">
		<div class="copyright">

		</div>
		<ul class="social-list">
			<?php
			$socials = array(
					'twitter'   => array(
							'url'  => $socials_twitter_url,
							'icon' => 'fab fa-twitter',
					),
					'facebook'  => array(
							'url'  => $socials_facebook_url,
							'icon' => 'fab fa-facebook',
					),
					'instagram' => array(
							'url'  => $socials_instagram_url,
							'icon' => 'fab fa-instagram',
					),
					'youtube'   => array(
							'url'  => $socials_youtube_url,
							'icon' => 'fab fa-youtube',
					),
			);
			foreach ( $socials as $network => $data ) :
				if ( $data['url'] ) :
					?>
					<li>
						<a href="<?php echo esc_url( $data['url'] ); ?>">
							<i aria-hidden="true" class="<?php echo esc_attr( $data['icon'] ); ?>"></i>
						</a>
					</li>
				<?php
				endif;
			endforeach;
			?>
		</ul>
		</ul>
	</div>
</footer>

<section
		class="flex flex-row items-start justify-start py-0 pl-0
			gap-20 w-full text-center text-base text-general-1-primary font-subtitles-16
			mq450:gap-5 mq850:gap-10 mq1500:flex-wrap"
>
	<div class="ml-[5%] lg:ml-[0px] w-full bg-cover bg-no-repeat flex flex-row self-stretch items-center justify-center bg-[url('/wp-content/themes/vision-prime/web/public/form-builder-background@2x.png')]">
		<div class="w-full max-w-[1170px] flex-row flex mr-[5%] justify-between lg:mr-[0px] lg:ml-[20px] mq850:flex-col mq850:gap-[30px] mq850:justify-center mq850:items-center">
			<div
					class="max-w-[650px] w-full flex flex-col items-start justify-start  w-full "
			>
				<div class="h-[120px] border-general-1-primary border-solid  border-l-[1px]"></div>
				<div
						class="max-w-[622px] h-[200px] flex flex-col items-start justify-start relative gap-[21px] w-full z-[1]"
				>

					<div
							class="max-w-[622px] !m-[0] absolute top-[22px] left-[0px] flex flex-col items-start justify-start gap-[21px] w-full"
					>
						<div
								class="relative tracking-[0.4em] leading-[36px] uppercase font-medium"
						>
							Feedback Form
						</div>
						<h1
								class="m-0 self-stretch relative text-35xl leading-[60px] font-normal font-heading-1-72 text-general-white mq450:text-13xl mq450:leading-[36px] mq850:text-24xl mq850:leading-[48px]"
						>
							Let’s Discuss Your Project
						</h1>
					</div>
				</div>
				<div
						class="self-stretch relative leading-[30px] font-paragraph-16 text-general-white text-left z-[1]"
				>
					By contacting us you can make a direct appointment with our agents
					in London or arrange your visit to our “Sales Office” and “Meeting
					Room” in the Emirate of Dubai. Our investors always have access to
					the support and assistance service for in-depth information
					on the investments and the conditions we can offer. It is also
					possible to book guided visits to construction sites or to buildings
					that have already been completed.
				</div>
			</div>
			<div
					class="max-w-[440px] w-full flex flex-row items-start justify-start relative  text-left text-gray-200 font-paragraph-16"
			>
				<div
						class="flex-1 bg-general-1-primary flex flex-col
						items-start justify-start py-[60px] pl-[60px] pr-[29px] box-border
						gap-5 max-w-full z-[1] mq450:pl-5 mq450:box-border mq850:pt-[39px] mq850:pb-[39px] mq850:box-border"
				>

					<input
							class="w-80 [border:none] [outline:none] bg-general-white flex flex-row items-start justify-start py-[15px] px-5 box-border font-paragraph-16 text-base text-gray-200 whitespace-nowrap z-[1]"
							placeholder="Full name *"
							type="text"
					/>

					<input
							class="w-80 [border:none] [outline:none] bg-general-white flex flex-row items-start justify-start py-[15px] px-5 box-border font-paragraph-16 text-base text-gray-200 whitespace-nowrap z-[1]"
							placeholder="Your E-mail *"
							type="text"
					/>

					<div
							class="w-80 bg-general-white overflow-x-auto flex flex-row items-start justify-start py-[15px] px-[11px] box-border gap-1.5 z-[1] text-general-8-secondary"
					>
						<div
								class="h-[60px] w-80 relative bg-general-white shrink-0 hidden"
						></div>
						<div
								class="flex flex-col items-start justify-start pt-[5px] pb-0 pl-0 pr-1"
						>
							<img
									class="w-7 h-5 relative z-[1]"
									loading="lazy"
									alt=""
									src="/wp-content/themes/vision-prime/web/public/flags--ae-united-arab-emirates.svg"
							/>
						</div>
						<a
								class="[text-decoration:none] relative leading-[30px] text-[inherit] inline-block min-w-[37px] whitespace-nowrap z-[1]"
						>+971</a
						>
						<div
								class="flex flex-col items-start justify-start pt-[8.4px] pb-0 pl-0 pr-[3px]"
						>
							<img
									class="w-3.5 h-3.5 relative z-[1]"
									alt=""
									src="/wp-content/themes/vision-prime/web/public/9-icons--arrow-1-down.svg"
							/>
						</div>
						<div
								class="flex flex-col items-start justify-start py-0 pl-0 pr-1"
						>
							<div class="w-px h-[30px] relative bg-silver z-[1]"></div>
						</div>
						<div
								class="relative leading-[30px] text-gray-200 inline-block min-w-[115px] z-[1]"
						>
							Phone number
						</div>
					</div>
					<div
							class="w-80 bg-general-white flex flex-row items-start justify-between py-[15px] pl-5 pr-[15px] box-border gap-5 z-[1]"
					>
						<div class="h-[60px] w-80 relative bg-general-white hidden"></div>
						<div class="relative leading-[30px] z-[1]">
							Select a service required
						</div>
						<div
								class="flex flex-col items-start justify-start pt-2 px-0 pb-0"
						>
							<img
									class="w-3.5 h-3.5 relative z-[1]"
									alt=""
									src="/wp-content/themes/vision-prime/web/public/9-icons--arrow-1-down-1.svg"
							/>
						</div>
					</div>
					<div class="self-stretch h-[140px] relative">
						<div
								class="absolute h-full top-[0px] bottom-[0px] left-[0px] bg-general-white w-80 z-[1]"
						></div>
						<div
								class="absolute top-[18px] left-[20px] leading-[30px] inline-block w-[331px] z-[2]"
						>
							Your request
						</div>
					</div>
					<button
							class="cursor-pointer [border:none] py-[21px] px-10 bg-general-8-secondary overflow-hidden flex flex-row items-start justify-start z-[1]"
					>
						<div
								class="relative text-base tracking-[0.4em] leading-[18px] uppercase font-medium font-subtitles-16 text-general-white text-center inline-block min-w-[91px]"
						>
							Submit
						</div>
					</button>
				</div>
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
			<div
					class="flex flex-row items-center justify-center py-0 px-[3px]"
			>
				<img
						class="h-[60px] w-[97.1px] relative"
						loading="lazy"
						alt=""
						src="/wp-content/themes/vision-prime/web/public/union.svg"
				/>
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

								<b class="self-stretch relative leading-[22px]"><a href="<?php echo $url ?>"> <?php echo $title ?></a></b>        <?php
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

								<b class="self-stretch relative leading-[22px]"><a href="<?php echo $url ?>"> <?php echo $title ?></a></b>        <?php
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
				<b class="relative leading-[24px] whitespace-nowrap"
				>800-LICENSE (542 3673)</b
				>
				<div
						class="self-stretch relative text-sm leading-[24px] font-body-b3-merriweather-14 text-gray-300"
				>
					If you are calling from outside the UAE, please contact us on
				</div>
			</div>
			<div
					class="self-stretch overflow-hidden flex flex-col items-start justify-start gap-2.5"
			>
				<b class="relative leading-[24px] whitespace-nowrap"
				>+971 4 567 7333</b
				>
				<div
						class="self-stretch relative text-sm leading-[24px] font-body-b3-merriweather-14 text-gray-300"
				>
					or email us at
				</div>
				<b class="relative leading-[24px] whitespace-nowrap"
				>hello@visionprime.ae</b
				>
			</div>
		</div>
		<div
				class="flex-1 flex flex-col items-start justify-start gap-[30px] min-w-[277px] max-w-full"
		>
			<div
					class="overflow-hidden flex flex-row items-center justify-start gap-2.5"
			>
				<img
						class="h-[33px] w-[33px] relative rounded min-h-[33px]"
						loading="lazy"
						alt=""
						src="/wp-content/themes/vision-prime/web/public/link--facebook.svg"
				/>

				<img
						class="h-[33px] w-[33px] relative rounded min-h-[33px]"
						loading="lazy"
						alt=""
						src="/wp-content/themes/vision-prime/web/public/link--twitter.svg"
				/>

				<img
						class="h-[33px] w-[33px] relative rounded min-h-[33px]"
						loading="lazy"
						alt=""
						src="/wp-content/themes/vision-prime/web/public/link--instagram.svg"
				/>

				<img
						class="h-[33px] w-[33px] relative rounded min-h-[33px]"
						loading="lazy"
						alt=""
						src="/wp-content/themes/vision-prime/web/public/link--pinterest.svg"
				/>
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

		<footer
				class="self-stretch flex flex-row items-center justify-center pt-0 px-[375px] pb-[26px] box-border max-w-full text-left text-xs text-gray-400 font-primary-paragraph-paragraph-5 lg:pl-[187px] lg:pr-[187px] lg:box-border mq850:pl-[93px] mq850:pr-[93px] mq850:box-border"
		>
			<div
					class="flex-1 flex flex-row items-center justify-center py-0 px-5 box-border gap-0.5 max-w-full mq450:flex-wrap"
			>
				<div class="w-11 relative leading-[22px] inline-block">
					© 2024
				</div>
				<div
						class="relative leading-[22px] text-general-white inline-block min-w-[69px]"
				>
					Vision Prime
				</div>
				<div
						class="relative leading-[22px] whitespace-pre-wrap inline-block min-w-[112px]"
				>
					| All rights reserved
				</div>
			</div>
		</footer>
	</div>
</footer>

<div
		class="flex-1 bg-general-1-primary flex flex-col hidden
						items-start justify-start py-[60px] pl-[60px] pr-[29px] box-border
						gap-5 max-w-full z-[1] mq450:pl-5 mq450:box-border mq850:pt-[39px] mq850:pb-[39px] mq850:box-border"
>

	<input
			class="w-80 [border:none] [outline:none] bg-general-white flex flex-row items-start justify-start py-[15px] px-5 box-border font-paragraph-16 text-base text-gray-200 whitespace-nowrap z-[1]"
			placeholder="Full name *"
			type="text"
	/>

	<input
			class="w-80 [border:none] [outline:none] bg-general-white flex flex-row items-start justify-start py-[15px] px-5 box-border font-paragraph-16 text-base text-gray-200 whitespace-nowrap z-[1]"
			placeholder="Your E-mail *"
			type="text"
	/>

	<div
			class="w-80 bg-general-white overflow-x-auto flex flex-row items-start justify-start py-[15px] px-[11px] box-border gap-1.5 z-[1] text-general-8-secondary"
	>
		<div
				class="h-[60px] w-80 relative bg-general-white shrink-0 hidden"
		></div>
		<div
				class="flex flex-col items-start justify-start pt-[5px] pb-0 pl-0 pr-1"
		>
			<img
					class="w-7 h-5 relative z-[1]"
					loading="lazy"
					alt=""
					src="/wp-content/themes/vision-prime/web/public/flags--ae-united-arab-emirates.svg"
			/>
		</div>
		<a
				class="[text-decoration:none] relative leading-[30px] text-[inherit] inline-block min-w-[37px] whitespace-nowrap z-[1]"
		>+971</a
		>
		<div
				class="flex flex-col items-start justify-start pt-[8.4px] pb-0 pl-0 pr-[3px]"
		>
			<img
					class="w-3.5 h-3.5 relative z-[1]"
					alt=""
					src="/wp-content/themes/vision-prime/web/public/9-icons--arrow-1-down.svg"
			/>
		</div>
		<div
				class="flex flex-col items-start justify-start py-0 pl-0 pr-1"
		>
			<div class="w-px h-[30px] relative bg-silver z-[1]"></div>
		</div>
		<div
				class="relative leading-[30px] text-gray-200 inline-block min-w-[115px] z-[1]"
		>
			Phone number
		</div>
	</div>
	<div
			class="w-80 bg-general-white flex flex-row items-start justify-between py-[15px] pl-5 pr-[15px] box-border gap-5 z-[1]"
	>
		<div class="h-[60px] w-80 relative bg-general-white hidden"></div>
		<div class="relative leading-[30px] z-[1]">
			Select a service required
		</div>
		<div
				class="flex flex-col items-start justify-start pt-2 px-0 pb-0"
		>
			<img
					class="w-3.5 h-3.5 relative z-[1]"
					alt=""
					src="/wp-content/themes/vision-prime/web/public/9-icons--arrow-1-down-1.svg"
			/>
		</div>
	</div>
	<div class="self-stretch h-[140px] relative">
		<div
				class="absolute h-full top-[0px] bottom-[0px] left-[0px] bg-general-white w-80 z-[1]"
		></div>
		<div
				class="absolute top-[18px] left-[20px] leading-[30px] inline-block w-[331px] z-[2]"
		>
			Your request
		</div>
	</div>
	<button
			class="cursor-pointer [border:none] py-[21px] px-10 bg-general-8-secondary overflow-hidden flex flex-row items-start justify-start z-[1]"
	>
		<div
				class="relative text-base tracking-[0.4em] leading-[18px] uppercase font-medium font-subtitles-16 text-general-white text-center inline-block min-w-[91px]"
		>
			Submit
		</div>
	</button>
</div>
