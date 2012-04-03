<?php
/*
 * Internet Society WordPress Template 
 *
 * The template for displaying the left sidebar.
 *
 */
 ?>
<aside id="aside-left">

<?php 	

	$ancestors = get_post_ancestors( $post->ID );
	if (!$ancestors) { $parent = $post->post_title; $pid = $post->ID; }
	else { $pid = $ancestors[0]; $parent = get_the_title($pid); }

	print '<div class="menu-sidebar">';
	$permalink = get_permalink( $pid ); 
    print '<h2><a href="'.$permalink.'">'.$parent.'</a></h2><ul class="menu">';
	wp_list_pages('child_of='.$pid.'&title_li=');
	print '</ul></div>';

// Primary Widget Area

if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>

		<?php dynamic_sidebar( 'primary-widget-area' ); ?>

<?php endif; ?>

</aside><!-- end aside-left -->