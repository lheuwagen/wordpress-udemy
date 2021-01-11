<?php if ( is_search() ) { ?>

    <section class="<?php post_class(); ?>">
        <h1>Mist!</h1>
        <p><?php esc_html_e( 'Leider nichts gefunden!' ); ?></p>
    </section>

<?php } else { ?>

    <section class="<?php post_class(); ?>">
        <h1>Error 404</h1>
        <p><?php esc_html_e( 'Diese Seite existiert nicht!' ); ?></p>
    </section>

<?php } ?>