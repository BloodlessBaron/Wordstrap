<?php get_header(); ?>
  <div class="row">
    <div class="col-sm-8 blog-main">
      <?php
      if ( have_posts() ) {
        while ( have_posts() ) : the_post();
      ?><?php if ( is_sticky() ) { echo '<div class="sticky">'; } ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class( 'class-name' ); ?>>
          <h2 class="blog-post-title"><?php if ( is_sticky() ) { echo '<span class="badge badge-light">Sticky </span>&nbsp;'; } ?><?php the_title(); ?></h2>
          <p class="text-muted"><?php the_date(); ?> by <?php the_author(); ?> in <cite title="The Category"><?php the_category(', '); ?></p>
          <?php the_content( '', FALSE ); ?>
          <?php echo '<a class="read-more" href="'. get_permalink( get_the_ID() ) . '"><button type="button" class="btn btn-primary">' . __('Read More', 'your-text-domain') . '</button></a><p>&nbsp;</p>'; ?>
        </div><!-- /.blog-post -->
        <?php if ( is_sticky() ) { echo '</div>'; };
          endwhile;
        }
        ?>
    </div>
<?php get_footer(); ?>
