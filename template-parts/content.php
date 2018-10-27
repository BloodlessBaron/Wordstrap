
          <div class="blog-post">
            <h1 class="blog-post-title"><?php if ( is_sticky() ) { echo '<span class="badge badge-light">Sticky: </span>&nbsp;'; } ?><?php the_title(); ?></h1>
            <?php if ( !is_page() ) { ?>
              <p class="blog-post-meta text-muted"><?php the_date(); ?> by <?php the_author(); ?></p>
            <?php } ?>

            <?php the_content(); ?>

          </div><!-- /.blog-post -->
