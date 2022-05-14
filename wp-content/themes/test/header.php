<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8" />
    <?php wp_head(); ?>
    <!--<link rel="stylesheet" href="http://test/wp-content/themes/test/css/media.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body class="custom-background">

<div class="container">

    <div class="header_search_form"><?php get_search_form(); ?></div>

    <header class="header">

        
            <?php if( has_custom_logo() ): the_custom_logo(); ?>
                <?php else: ?>
                <a  href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
            <?php endif; ?>    
        
         

            <input type="checkbox" id="menu-checkbox">
       
 

            <?php
                $args = array(
                    'theme_location' => 'Header',
                    'menu' => 'Main',
                    'container' => 'nav',
                    'container_class' => 'navigation',
                    'items_wrap' => '<ul>%3$s</ul>'
                );

                wp_nav_menu($args);
            ?>
          
            <label for="menu-checkbox" class="toggle-button" data-open="МЕНЮ"></label>

            <input type="checkbox" id="check" onclick="document.getElementById('menu-checkbox').checked = false;">
            <div class="check_closing">
                <span></span>
                <span></span>
            </div>

    </header>

    <?php if (is_active_sidebar('main-sidebar')): ?>
    <aside class="sidebar">
        <ul><?php dynamic_sidebar( 'main-sidebar' ); ?></ul>
    </aside>
    <?php endif; ?>

    <main class="main">