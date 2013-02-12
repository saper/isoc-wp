
    	
	<?php
	/*
     * Internet Society WordPress Template 
     *
     * The template for the footer of all pages.
     *
     */
	 
	 if (!is_front_page()):?></section><!-- /end section --><?php 
	 
		// Secondary Widget Area
		if (is_active_sidebar( 'secondary-widget-area' )) : ?>
			<aside id="aside-right">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
				<?php dynamic_sidebar( 'secondary-widget-area2' ); ?>
			</aside><!-- end aside-right -->
		<?php endif;
	endif; ?>

<div class="clear"></div></div><!-- end container -->

<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/cycle.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/util.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/dropdown.js"></script>	
<!--[if IE]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>

</body>
</html>