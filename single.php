<?php
/*
 * Internet Society WordPress Template 
 *
 * The template for displaying single posts.
 *
 */
 
 get_header(); ?>
    
 
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<h1><?php the_title(); ?></h1>

			<div class="entry">

				<?php the_content(); ?>

			</div>

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		</div>

		<?php comments_template(); ?>
		
		<div class="navigation"> <?php previous_post_link('&laquo; %link'); ?>  <br>
<?php next_post_link('%link &raquo;'); ?></div>

		<?php endwhile; endif; ?>
    
		
		
<?php get_footer(); ?>
