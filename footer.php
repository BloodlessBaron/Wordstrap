<?php get_sidebar(); ?>
</div>
</main>
<div class="row">
  <div class="col-lg-12">
    <p>&nbsp;</p>
  </div>
</div>

    <footer class="footer bg-dark">
      <div id="footer" class="container">
        <?php if ( is_active_sidebar( 'footer' ) ) {
          dynamic_sidebar( 'footer' );
        } else { ?>
        <span class="text-muted">&copy; <?php echo date("Y"). ' ' . get_bloginfo('name'); ?>.</span>
      <?php } ?>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
