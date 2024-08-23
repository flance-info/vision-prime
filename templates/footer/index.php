<?php
$socials_twitter_url         = get_theme_mod( 'ms_lms_starter_socials_twitter' );
$socials_facebook_url        = get_theme_mod( 'ms_lms_starter_socials_facebook' );
$socials_instagram_url       = get_theme_mod( 'ms_lms_starter_socials_instagram' );
$socials_youtube_url         = get_theme_mod( 'ms_lms_starter_socials_youtube' );

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
