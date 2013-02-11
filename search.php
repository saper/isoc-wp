<?php

/*
 * Internet Society WordPress Template 
 *
 * The template for displaying search results.
 *
 */

get_header(); ?>

	<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <h2><span class=""><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></span></h2>

        <article id="post-<?php the_ID(); ?>" class="post post-page clearfix">

            <div class="content clearfix">

   				<?php get_template_part( 'meta' ); ?>

				<?php the_excerpt(''); ?>

			</div>
            
  		</article>

	<?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>