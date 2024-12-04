<?php
/* Template Name: Second Custom footer  */
	 get_header();

	 if ( have_posts() ) : ?>
			<?php
			while ( have_posts() ) {
				the_post();
				the_content();
				?>
			<?php } ?>

		<?php endif; ?>

	<?php include_once 'footer2.php'; ?>
</div>
