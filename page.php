<?php get_header(); ?>
  <div class="row">
    <div class="col-sm-8 blog-main">
      <?php
      if ( have_posts() ) {
        while ( have_posts() ) : the_post();
      ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class( 'class-name' ); ?>>
          <?php the_content(); ?>
        </div><!-- /.blog-post -->
        <?php
          endwhile;
        }
        ?>
    </div>
<?php get_footer(); ?>
