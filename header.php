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

    <nav class="navbar navbar-default" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->

      <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo home_url(); ?>">
          <?php echo get_icon_svg( 'chevron_left', 22 ); ?>
          <?php bloginfo( 'name' ); ?> 
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse">
       <?php wp_nav_menu( array(
          'menu'        => 'Main', 
          'menu_class'  => 'nav navbar-nav navbar-right', 
          'depth'       => 3, 
          'container'   => false
        )); 
      ?>
      </div><!-- /.navbar-collapse -->
    </nav>

    <div id="main-container" class="container">