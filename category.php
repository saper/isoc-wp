<?php

/*
 * Internet Society WordPress Template 
 *
 * The template for displaying Category Archive pages.
 *
 */

get_header(); ?>

<?php get_sidebar(); ?>

<div id="content">

				<?php

					$category_description = category_description();

					if ( ! empty( $category_description ) )

						echo '<div class="archive-meta">' . $category_description . '</div>';

				?>

			<h1 class="page-title"><?php
					printf( '%s', '<span>' . single_cat_title( '', false ) . '</span>' );
				?></h1>

				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>';
				?>

				<!-- Start the Loop. -->
				 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                 <div class="post">
                
                 <!-- Display the Title as a link to the Post's permalink. -->
                 <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        
                 <!-- Display the Post's Excerpt in a div box. -->
                 <div class="entry">
                 
                   <?php include (TEMPLATEPATH . '/meta.php' ); ?>
                   <?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail(array(200,160), array("class" => "alignright post_thumbnail")); } ?>
                   <?php the_excerpt(); ?><br clear="all">
                          
				 </div>
                 </div> <!-- closes the first div box -->
                
                 <!-- Stop The Loop (but note the "else:" - see next line). -->
                 <?php endwhile; else: ?>
                
                 <!-- The very first "if" tested to see if there were any Posts to -->
                 <!-- display.  This "else" part tells what do if there weren't any. -->
                 <p>Sorry, no posts matched your criteria.</p>
                 <!-- REALLY stop The Loop. -->
                 <?php endif; ?>

    <!-- Navigation for pagination -->
    
    <div class="navigation">
     <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
     <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
    </div> 

	</div><!-- #content -->

<?php get_footer(); ?>

