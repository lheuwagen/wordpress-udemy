<?php /* klatsch und tratsch */ ?>

<?php get_header(); ?>

<main class="site-main">
	<article class="site-content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template_parts/content', 'page' ); ?>
		<?php endwhile; else : ?>
			<?php get_template_part( 'template_parts/content', 'error' ); ?>
		<?php endif; ?>

		<?php
        /* build paginagion args */
        $number_of_posts = get_option('posts_per_page', 10);
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $offset = ($paged - 1) * $number_of_posts;

		$args = [
			post_type => 'post',
			posts_per_page => 3,
            offset => $offset,
            paged => $paged,
		];

		$loop2 = new WP_Query($args);

		if ( $loop2->have_posts() ) : while ( $loop2->have_posts() ) : $loop2->the_post(); ?>
			<?php get_template_part( 'template_parts/content' ); ?>
		<?php endwhile; else : ?>
			<?php get_template_part( 'template_parts/content', 'error' ); ?>
		<?php endif;
		previous_posts_link('<< Vorherige Seite');
		next_posts_link('Nächste Seite >>', $loop2->max_num_pages);

		wp_reset_postdata(); ?>

	</article>
	<?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>

