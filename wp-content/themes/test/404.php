<?php get_header(); ?>

    <h1><?php _e('The page is missing', 'lang'); ?></h1>

    <div class="container404">
        <a class="return" href="/"><?php _e('Go back to the main page', 'lang'); ?></a>

        <div class="numberError">
            <h2 class="error" data-text="404">404</h2>
        </div>
        <p class="notFound"><?php _e('Page not found', 'lang'); ?></p>
        

    </div>

<?php get_footer(); ?>