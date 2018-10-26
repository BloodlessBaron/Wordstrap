<?php if ( is_active_sidebar( 'sidebar' ) ) { ?>
<div class="col-sm-4 col-sm-offset-1 blog-sidebar">
  <div id="sidebar-module" class="jumbotron">
     <?php dynamic_sidebar( 'sidebar' ); ?>
  </div>
</div><!-- /.blog-sidebar -->
<?php } ?>
