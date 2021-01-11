<!doctype html>
<html lang="<?php bloginfo( 'language' ); ?>">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=deice-width, initial-scale=1.0">

    <title> <?php wp_title( '' );
		bloginfo( 'name' ); ?> </title>

    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">

    <?php wp_head(); ?>
</head>

<body class="<?php body_class(); ?>">
<div class="container">
    <header class="site-header">
        <a href="<?php echo home_url( '/' ); ?>">
			<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>
        </a>

        <?php get_search_form(); ?>

        <nav>
            <ul>
				<?php
				$args = [
					title_li => '',
				];
				wp_list_pages( $args );
				?>
            </ul>
        </nav>
    </header>