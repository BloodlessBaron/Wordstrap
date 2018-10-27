<?php
get_header();
  if ( have_posts() ) {
  	while ( have_posts() ) {
  		the_post();
  		// Post Content here
      get_template_part( 'template-parts/content' );
  	} // end while
  } // end if
  else { // No posts were found
    echo '<div class="alert alert-warning">
      <h4 class="alert-heading">Warning!</h4>
      <p class="mb-0">Your query did not return any results.</p>
    </div>';
  }
  if ( !is_page() && !is_single() ) {
    get_template_part( 'template-parts/pagination' );
  }
  get_sidebar();
get_footer();
