<html <?php language_attributes(); ?>>
    <head>
        <title><?php wp_title('-', true, 'right');  ?></title>

        <!-- STYLE SHEETS -->
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <!-- CONTENT -->
        <div class="navBar">
            <div class="logo">
                <img src="<?php header_image(); ?>">
            </div>

            <?php
            wp_nav_menu(array(
               'menu' => '',
               'container' => 'div',
               'container_class' => '',
               'container_id' => '',
               'fallback_cb' => 'null',
               'items_wrap' => '<div class="links">%3$s</div>',
               'depth' => 0,
               'walker' => '',
               'theme_location' => 'main-menu')
            );

            ?>
        </div>


        <div class="wrapper">
