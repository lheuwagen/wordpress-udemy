<section class="<?php post_class(); ?>">

	<?php if ( is_page( 3575)  || is_front_page() || is_archive() ) { ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<?php } else { ?>
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<?php } ?>
    <p class="post-meta"> Veröffentlicht am: <?php the_time( 'd.m.Y' ); ?> von: <?php the_author();?> <br>Kategorie: <?php the_category(', ');?> <?php the_tags();?></p>
    <p><?php the_content(); ?></p>


</section>