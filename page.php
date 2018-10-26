<?php get_header(); ?>
  <div class="row">
    <div class="col-sm-8 blog-main">
      <?php
      if ( have_posts() ) {
        while ( have_posts() ) : the_post();
      ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class( 'class-name' ); ?>>
          <h2 class="blog-post-title"><?php if ( is_sticky() ) { echo '<span class="sticky-tag">Sticky </span><br />&nbsp;'; } ?><?php the_title(); ?></h2>
          <p class="text-muted"><?php the_date(); ?> by <?php the_author(); ?></p>
          <?php the_content(); ?>
        </div><!-- /.blog-post -->
        <?php
          endwhile;
        }
        ?>
    </div>
<?php get_footer(); ?>
