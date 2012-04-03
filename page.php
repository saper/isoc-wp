<?php
/*
 * Internet Society WordPress Template 
 *
 * The template for displaying pages.
 *
 */

get_header(); ?>
        
	<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        
        <article id="post-<?php the_ID(); ?>" class="post post-page clearfix">
            <div class="content clearfix">
   				<?php the_content(''); ?>
			</div>
  		</article>
	<?php endwhile; ?>
	<?php comments_template(); ?>
	
	<div class="navigation"> <?php posts_nav_link('','','&laquo; Previous Page ') ?> | <?php posts_nav_link('',' Next Page &raquo;','') ?></div>
	
    <?php endif; ?>

<?php get_footer(); ?>