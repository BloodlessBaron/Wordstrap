<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <?php wp_nav_menu( array(
          'theme_location' => 'header-menu',
          'depth' => 1,
          'items_wrap'     => '<ul class="navbar-nav mr-auto %2$s">%3$s</ul>',
          'container' => false,
          'walker' => new WPDocs_Walker_Nav_Menu()
          ) ); ?>

          <form role="search" method="get" id="searchform" class="form-inline mt-2 mt-md-0 searchform" action="<?php echo home_url( '/' ); ?>">
            <input class="form-control mr-sm-2" type="search" name="s" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="searchsubmit">Search</button>
          </form>
        </div>
      </nav>

        <div class="col-lg-12 col-md-7 col-sm-6 page-header">
          <p class="lead"><?php echo get_bloginfo( 'description' ); ?></p>
        </div>
    </header>

<!-- Begin page content -->
<main class="container">
      <div class="page-header" id="banner">
        <div class="row">
        </div>
        <div class="row">
          <div class="col-lg-12">
            <hr />
          </div>
        </div>
      </div>

      <div class="row">
        <?php if ( is_active_sidebar( 'sidebar' ) ) { ?>
          <div class="col-sm-8 blog-main">
        <?php } else { ?>
          <div class="col-lg-12 blog-main">
        <?php } ?>
