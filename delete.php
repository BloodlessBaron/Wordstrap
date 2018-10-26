<?php wp_nav_menu( array(
'theme_location' => 'header-menu',
'depth' => 1,
'menu_id' => 'navbar-nav mr-auto',
'items_wrap'     => '<ul class="navbar-nav mr-auto" class="%2$s">%3$s</ul>',
'container' => false,
'walker' => new WPDocs_Walker_Nav_Menu()
) ); ?>
