<?php 

/*
 * Internet Society WordPress Template 
 *
 * The template for displaying 404 error pages.
 *
 */
 
get_header(); ?>
 
<?php get_sidebar(''); ?>
<div id="content">
    	

		<h1>Page Cannot Be Found</h1>

    <p>We're sorry, but that page is not available.
		
	<p>Please choose from the following options:</p>
	<ul>
    <li>Go to our <a href="<?php bloginfo('siteurl'); ?>">Home Page</a></li>
    <li>Use the search box in the upper right to search our site.</li>
	</ul>

		</div> <!-- end content -->
		
<?php get_footer(); ?>
