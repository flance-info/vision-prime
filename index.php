<div
		class="w-full relative bg-general-white overflow-hidden flex flex-col items-start
		justify-start leading-[normal] tracking-[normal] text-left text-xs text-general-1-primary
		font-button-dm-sans-16"
>
	<?php get_header(); ?>
	<div>
		<?php if ( have_posts() ) : ?>
			<?php
			while ( have_posts() ) {
				the_post();
				the_content();
				?>
			<?php } ?>

		<?php endif; ?>
	</div>
	<?php get_footer(); ?>
</div>
