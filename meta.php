<?php
/*
 * Internet Society WordPress Template 
 *
 * A template for displaying meta information about a post.
 *
 */
 ?>

<div class="meta">

	<?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?> |
	Posted in <?php the_category(', ') ?> | 
    <?php the_tags('Tags: ', ', ', ' | '); ?>
	<?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?>

</div>