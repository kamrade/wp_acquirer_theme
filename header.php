<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="site-header">
    <div class="container">

      <?php if (is_page('about')) { ?>
        <p>About page header addon</p>
      <?php } ?>

      <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
      <h5><?php bloginfo('description'); ?></h5>

      <nav class="site-nav">

        <div class="site-nav-overlay"></div>

        <div class="site-nav-control">
          <button class="btn btn-nav-toggler">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
          </button>
        </div>

        <div class="navigation-block">
          <?php $args = array( 'theme_location' => 'primary' ); ?>
          <?php wp_nav_menu( $args ); ?>
        </div>

      </nav>

    </div>
  </header>
