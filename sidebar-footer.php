<?php
/*
 * Internet Society WordPress Template 
 *
 * The template for displaying the sidebar footer.
 *
 */
 ?>

<footer id="footer">

	<?php wp_nav_menu( array( 'container_class' => 'menu-footer', 'theme_location' => 'footer_menu' ) ); ?>

    <?php

	if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>

		<div id="block-block-1" class="block block-block ">

			<ul><?php dynamic_sidebar( 'footer-widget-area' ); ?></ul>

		</div><!-- #footer-widget .widget-area -->

	<?php endif; ?>

</footer>