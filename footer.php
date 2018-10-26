<?php get_sidebar(); ?>
</div>
</main>

    <footer class="footer bg-dark">
      <div id="footer" class="container text-muted">
        <?php if ( is_active_sidebar( 'footer' ) ) {
          dynamic_sidebar( 'footer' );
        } else { ?>
        &copy; <?php echo date("Y"). ' ' . get_bloginfo('name'); ?>.
      <?php } ?>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
