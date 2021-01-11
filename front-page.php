<?php get_header(); ?>

<main class="site-main">
	<article class="site-content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template_parts/content', 'page'); ?>
		<?php endwhile; else : ?>
			<?php get_template_part( 'template_parts/content', 'error' ); ?>
		<?php endif; ?>

		<?php

		$args = [
			post_type => 'post',
			posts_per_page => 3,
		];
		$loop2 = new WP_Query($args);

		if ( $loop2->have_posts() ) : while ( $loop2->have_posts() ) : $loop2->the_post(); ?>
			<?php get_template_part( 'template_parts/content' ); ?>
		<?php endwhile; else : ?>
			<?php get_template_part( 'template_parts/content', 'error' ); ?>
		<?php endif; wp_reset_postdata(); ?>

	</article>
	<?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
