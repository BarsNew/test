</div>
</main>
</body>
<footer class="footer">
<div class="container c-footer">
    
<?php /*
    $args = array(
        'theme_location' => 'Footer',
        'menu' => 'Footer',
        'container' => 'nav',
        'container_class' => 'footer nav',
        'items_wrap' => '<ul>%3$s</ul>'
    );

    wp_nav_menu($args); */
?>



<?php if (is_active_sidebar('footer-sidebar')): ?>
<aside class="footer-sidebar">
    <ul><?php dynamic_sidebar( 'footer-sidebar' ); ?></ul>
</aside>
<?php endif; ?>


<?php wp_footer(); ?>
<p style="text-align: center; margin: 15px 0;">&#169; 2021 - <?php echo date("Y"); ?></p>

</footer>
</html>