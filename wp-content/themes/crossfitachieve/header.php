 <!DOCTYPE html>
<html lang="en"> 
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico"> 
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <title><?php wp_title();?></title>
    <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>>
  <div class="grayBorder">
    <div class="visible-xs">
      <nav id="myNavmenu" class="navbar navbar-default navmenu navmenu-default navmenu-fixed-left offcanvas desktopMenu" role="navigation">
        <?php
                $args = array(
                  'menu'      => 'menu-1',
                  'menu_class'      => 'nav navbar-nav mobile-nav',
                );
                wp_nav_menu( $args );
                ?>
      </nav>
      <div class="navbar navbar-default redColorBackground borderNone">
        <button type="button" class="navbar-toggle mobileMenuButton" data-toggle="offcanvas" data-target="#myNavmenu" data-canvas="body">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand text-center logoInMobileHeader navbarLogoMobile" href="<?php bloginfo( 'url' ); ?>">CROSSFIT <span>ACHIEVE</span></a>
        <button type="button" class="phoneButton visible-xs redColorBackground">
          <div class="navbar-phone navbarPhoneMobile">
              <a href="tel:832-675-6089"><i class="fa fa-phone fa-2x fa-flip-horizontal phoneIconMobile"></i></a>
          </div>
        </button>
      </div>
    </div>
    <div class="container">
      <a class="navbar-brand center-block hidden-xs navbar-brandLarge" href="<?php bloginfo( 'url' ); ?>">CROSSFIT<br /><span>ACHIEVE</span></a>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       <?php
            $args = array(
              'menu'      => 'menu-1',
              'menu_class'      => 'nav navbar-nav',
            );
            wp_nav_menu( $args );
            ?>
        <div class="navbar-phone row ">
          <a href="tel:832-675-6089" class="hidden-xs"><i class="fa fa-phone"></i> 832-675-6089</a>
        </div>
      </div>
    </div>
  </div>
