<?php
  /*
   * Internet Society WordPress Template 
   *
   * The template for the front page.
   *
   */

get_header(); ?>

<div id="slideshow">
	<div class="cycle">
    <?php
		// Pull up slideshow
		$args = array( 'post_type' => 'homepage_slide' );
		$loop = new WP_Query( $args );

		while ( $loop->have_posts() ) : $loop->the_post();
			print '<div>';
			//print $slide['id'];
			print get_the_post_thumbnail( $slide['id'] );
			print '<div class="slideshow-intro"><div class="slideshow-info">
			<div class="slideshow_pretitle">'.get_post_meta($post->ID, "_pre_title", true).'</div>
			<div class="slideshow_title">'.get_the_title($post->ID).'</div>
			<div class="slideshow_intro">';
			the_content();
			print '</div>
			<div class="view-footer"><a href="'.get_post_meta($post->ID, "_read_more", true).'" class="read-more">'.get_post_meta($post->ID, "_read_more_text", true).'</a></div></div></div>';
			 print '</div>';
		endwhile;
		
		wp_reset_query();
		
			
	?></div>
    
    <div class="views-slideshow-controls-bottom clearfix">

        <?php
		
		// Slideshow thumbnails
		$args = array( 'post_type' => 'homepage_slide' );
		$loop = new WP_Query( $args );

		while ( $loop->have_posts() ) : $loop->the_post();
			print '<div id="views_slideshow_pager_field_item_bottom_home_page_slideshow-block_0" class="views-slideshow-pager-field-item views_slideshow_pager_field_item views_slideshow_active_pager_field_item views-row-odd">
            	<div class="views-field-field-thumbnailpageriamge">
                	<div class="views-content-field-thumbnailpageriamge">';
			print get_the_post_thumbnail( $slide['id'], array(52,55) );
            print '</div></div></div>';
		endwhile;
		
		wp_reset_query();
		
		?>
    </div>
    
    <div class="widgets">
    <?php dynamic_sidebar( 'slideshow-widget-area' ); ?> 
    <?php dynamic_sidebar( 'slideshow-widget-area2' ); ?>  
    <?php dynamic_sidebar( 'slideshow-widget-area3' ); ?> 
    </div>
</div><!-- /end slideshow -->

<?php
$sidebars = 'left-center-right';
if (!is_active_sidebar('home_right-widget-area')): $sidebars = str_replace('-right','',$sidebars); endif;
if (!is_active_sidebar('home_left')): $sidebars = str_replace('left-','',$sidebars); endif;

?>
<?php if (is_active_sidebar('home_left')): ?>
<div class="home-left left-<?php print $sidebars; ?>">  
	<?php dynamic_sidebar( 'home_left' ); ?>
    <div class="view-footer"><p><a href="/events" title="View More Events">More Events &gt;</a></p></div>
</div>
<?php endif; ?>
    
<div class="home-center center-<?php print $sidebars; ?>">
	<h2>News</h2>
    <?php query_posts( array('category_name' => 'news', 'posts_per_page' => 4, 'order' => 'DESC') ); ?>
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" class="post post-page clearfix">
        	<div class="views-field views-field-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div> 
            <?php the_time('j F Y') ?>
  		</article>
	<?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
    <div class="view-footer"><a href="/news">More News &gt;</a></div>
</div>

<?php
    // Right Home Widget Area
    if ( is_active_sidebar( 'home_right-widget-area' ) ) : ?>
        <div class="home-right">
            <?php dynamic_sidebar( 'home_right-widget-area' ); ?>
        </div><!-- #home-right .widget-area -->
<?php endif; ?>

<div class="clear"></div>

<?php get_footer(); ?>