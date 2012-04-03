<?php

/*
 * Internet Society WordPress Template 
 *
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>

<?php get_sidebar(''); ?>


<div id="content">



		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>

				<h1>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h1>

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>

				<h1>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>

				<h1>Archive for <?php the_time('F jS, Y'); ?></h1>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>

				<h1>Archive for <?php the_time('F, Y'); ?></h1>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>

				<h1 class="pagetitle">Archive for <?php the_time('Y'); ?></h1>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>

				<h1 class="pagetitle">Author Archive</h1>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>

				<h1 class="pagetitle">Blog Archives</h1>

			<?php } ?>

 <!-- Start the Loop. -->

 <?php while ( have_posts() ) : the_post(); ?>

 <div class="post">

 <!-- Display the Title as a link to the Post's permalink. -->

 <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

 <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->

 <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>

 <!-- Display the Post's Content in a div box. -->

 <div class="entry">

   <?php the_excerpt(); ?>

 </div>

 <!-- Display a comma separated list of the Post's Categories. -->

 <p class="postmetadata">Posted in <?php the_category(', '); ?></p>

 </div> <!-- closes the first div box -->


 <!-- Stop The Loop (but note the "else:" - see next line). -->

 <?php endwhile; else: ?>


 <!-- The very first "if" tested to see if there were any Posts to -->
 <!-- display.  This "else" part tells what do if there weren't any. -->

 <p>Sorry, no posts matched your criteria.</p>


 <!-- REALLY stop The Loop. -->

  <div class="navigation"> <?php posts_nav_link('','','&laquo; Previous Page ') ?> | <?php posts_nav_link('',' Next Page &raquo;','') ?></div>
  
 <?php endif; ?>

			</div><!-- #content -->

<?php get_footer(); ?>

