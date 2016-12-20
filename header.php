<html>
<head>
  <?php wp_head(); ?>
</head>
<body>
  <nav>
    <?php
            $args = array (
              'menu'            => 'primary-menu',
              'theme_location'  => 'primary-menu',
              'depth'             => 2,
              'menu_class'      => 'nav navbar-nav navbar-right',
              'container'       => 'false'
            );
            wp_nav_menu( $args );
           ?>
  </nav>
