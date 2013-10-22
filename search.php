<?php

/*
 * Internet Society WordPress Template 
 *
 * The template for displaying search results.
 *
 */

get_header(); ?>

<div id="container">
<div id="content" role="main">

<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'isoc-wp' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

<!-- Start the Loop. -->
 <?php if ( have_posts() ) : ?>
 <ul>
 <?php while ( have_posts() ) : the_post(); ?>
 
  <div class="post">
  
 <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
  
 <div class="entry">

   <?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail(array(200,160), array("class" => "alignright post_thumbnail")); } ?>
   <?php the_excerpt(); ?><br style="clear:both;"/>
   <?php get_template_part( 'meta' ); ?>

 </div>
 
 </div> <!-- closes the first div box -->

 <!-- Stop The Loop (but note the "else:" - see next line). -->
 <?php endwhile; ?></ul><?php else: ?>

 <!-- The very first "if" tested to see if there were any Posts to -->
 <!-- display.  This "else" part tells what do if there weren't any. -->
 <p>Sorry, no posts matched your criteria.</p>

 <!-- REALLY stop The Loop. -->
 <?php endif; ?> 
 
<?php get_search_form( $echo ); ?>		

 <!-- Navigation for pagination -->
 
     <div class="navigation">
       <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
       <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
     </div> 

 </div><!-- #content -->

</div><!-- #container -->

<?php get_footer(); ?>