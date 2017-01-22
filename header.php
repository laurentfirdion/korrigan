<?php
/**
 * The template for displaying header
 */?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
	<?php 
		wp_head();
    ?>
        
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Pacifico" rel="stylesheet">
        <!--##############################################-->
        <!-- Site réalisé et développé par Laurent Firdion-->
    </head>
	<body <?php body_class();?>>
 <div class="container-fluid principal" id="top">       

<nav class="navbar-fixed-top"> 
  <div class="container-fluid haut"> 
      <div class="container">
          <div class="nav-haute">
            <?php
          $defaults = array(
	'theme_location'  => 'Menu haut',
	'menu'            => '',
	'container'       => '',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'menu',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul class="menuhaut">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);

wp_nav_menu( $defaults );

?>

 <?php
if ( is_user_logged_in() ) {
     $current_user = wp_get_current_user();
    echo '<span class="picto picto-user"></span><span class="name"> ' . $current_user->user_login . '</span>';
} 
?>
              <a id="espace" class="espace-membre" href="<?php bloginfo('url'); ?>/espace-membre">Espace membre</a>
              <a id="galerie" class="espace-membre" href="<?php bloginfo('url'); ?>/galerie">Galerie</a>
            </div>
     <br class="stopfloat"/>
      </div>
    </div>
<div class="container-fluid tete">  
<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
      
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <div class="navbar-header">
    
      <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
        Crêche des Korrigans
     </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
  
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      
        <?php

$defaults = array(
	'theme_location'  => 'Zone Principale',
	'menu'            => '',
	'container'       => '',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'menu',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul class="nav navbar-nav">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);

wp_nav_menu( $defaults );

?>
  
    </div><!-- /.navbar-collapse -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
        <?php

$defaults = array(
	'theme_location'  => 'Menu responsive',
	'menu'            => '',
	'container'       => '',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'menu',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul class="nav navbar-nav">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);

wp_nav_menu( $defaults );

?>
  
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>
    </div> 
     </nav>