<?php get_header(); ?>
    <?php
            $args = array (
              'menu'            => 'sub-menu',
              'theme_location'  => 'sub-menu',
              'depth'             => 2,
              'menu_class'      => 'nav navbar-nav navbar-right',
              'container'       => 'false'
            );
            wp_nav_menu( $args );
           ?>

<h1>YO</h1>

<?php get_footer(); ?>
