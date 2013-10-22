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
		$args = array( 'post_type' => 'homepage_slide', 'order' => 'ASC' );
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
		
		// Slideshow thumbnails - display in order slides were created.
		$args = array( 'post_type' => 'homepage_slide' , 'order' => 'ASC' );
		$loop = new WP_Query( $args );

		while ( $loop->have_posts() ) : $loop->the_post();
			print '<div class="views-slideshow-pager-field-item views_slideshow_pager_field_item views_slideshow_active_pager_field_item views-row-odd">
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
<?php 
    // Left Home Widget Area
    if (is_active_sidebar('home_left')): ?>
   
       <div class="home-left left-<?php print $sidebars; ?>">  
	        <?php dynamic_sidebar( 'home_left' ); ?>
       </div>
<?php endif; ?>
    
<?php
    // Center Home Widget Area
    if ( is_active_sidebar( 'home_center-widget-area' ) ) : ?>
        <div class="home-center center-<?php print $sidebars; ?>">
            <?php dynamic_sidebar( 'home_center-widget-area' ); ?>
        </div><!-- #home-right .widget-area -->
<?php endif; ?>

<?php
    // Right Home Widget Area
    if ( is_active_sidebar( 'home_right-widget-area' ) ) : ?>
        <div class="home-right">
            <?php dynamic_sidebar( 'home_right-widget-area' ); ?>
        </div><!-- #home-right .widget-area -->
<?php endif; ?>

<div class="clear"></div>

<?php get_footer(); ?>