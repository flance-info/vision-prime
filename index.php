<?php get_header(); ?>
	<div id="wrapper" class="wrapper">
		<div class="container">
			<?php if ( have_posts() ) : ?>
				<div class="pages-template">
					<?php
					while ( have_posts() ) {
						the_post();
						?>
						<section class="page-content">
							<div class="entry-content">
								<?php
								// Render the content, including Elementor if applicable
								the_content();
								?>
							</div>
						</section>
					<?php } ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
<?php get_footer(); ?>
