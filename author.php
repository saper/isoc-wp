<?php

/*
 * Internet Society WordPress Template 
 *
 * The template for displaying author pages.
 *
 */

get_header(); ?>

<?php get_sidebar(''); ?>

<div id="content">		

<!-- This sets the $curauth variable -->

    <?php

    if(isset($_GET['author_name'])) :
        $curauth = get_userdatabylogin($author_name);
    else :
        $curauth = get_userdata(intval($author));
    endif;
    ?>

 <h1>Author Archives: <?php echo $curauth->nickname; ?></h1>

    <ul>

<!-- The Loop -->

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <li>

            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">

            <?php the_title(); ?></a>,

            <?php the_time('d M Y'); ?> in <?php the_category('&');?>
        </li>

    <?php endwhile; else: ?>

        <p><?php _e('No posts by this author.'); ?></p>

    <?php endif; ?>

<!-- End Loop -->

    </ul>
			</div><!-- #content -->

<?php get_footer(); ?>

