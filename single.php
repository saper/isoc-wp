<?php
/*
 * Internet Society WordPress Template 
 *
 * The template for displaying single posts.
 *
 */
 
 get_header(); ?>
    
 
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div class="navigation">
		  <table width="100%">
		    <tr>
             <td><div class="navleft"><?php previous_post_link('&laquo; %link'); ?></div></td>
             <td>&nbsp;</td>
		     <td><div class="navright"><?php next_post_link('%link &raquo;'); ?></div></td>
            </tr>
          </table>
		  <hr/>
	   </div>
			
		<div class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<h1><?php the_title(); ?></h1>

			<div class="entry">

				<?php the_content(); ?>

			</div>

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			
			<?php get_template_part( 'meta' ); ?>
			<hr>

		</div>

		<?php comments_template(); ?>

		<?php endwhile; endif; ?>
    
<?php get_footer(); ?>
