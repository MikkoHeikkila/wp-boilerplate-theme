<!DOCTYPE html>

<html <?php language_attributes(); ?>>

  <head>

    <title><?php wp_title(); ?></title>

    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <?php wp_head(); ?>

	</head>

  <body <?php body_class(isset($class) ? $class : ''); ?>>

    <header>

      <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo home_url(); ?>">
          <?php bloginfo( 'name' ); ?> 
        </a>
      </div>

      <nav id="main-navigation"  role="navigation">
       <?php wp_nav_menu( array(
          'menu'        => 'Main', 
          'menu_class'  => 'nav', 
          'depth'       => 3, 
          'container'   => false
        )); 
      ?>
      </nav>

    </header>

    <div id="main-container" class="container">