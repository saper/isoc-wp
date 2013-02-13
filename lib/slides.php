<?php
add_action( 'init', 'create_my_post_types' );

function create_my_post_types() {
	register_post_type( 'homepage_slide',
		array(
			'labels' => array(
				'name' => __( 'Homepage Slides','isoc-wp' ),
				'singular_name' => __( 'Homepage Slide','isoc-wp' )
			),
			'public' => true,
			'show_ui' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => true,
			'has_archive' => true,
			'supports' => array( 'title', 'editor','thumbnail','custom-fields','revisions'),
			'register_meta_box_cb' => 'add_events_metaboxes',
			'query_var' => 'homepage_slide'
		)
	);
}

// Add the Events Meta Boxes
function add_events_metaboxes() {
    add_meta_box('slide_info', 'Additional Information', 'slide_information', 'homepage_slide', 'normal', 'high');
}

function slide_information() {
    global $post;
    // Noncename needed to verify where the data originated
    echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' .
    wp_create_nonce( plugin_basename(__FILE__) ) . '" />';
    // Get the location data if its already been entered
    $subtitle = get_post_meta($post->ID, '_pre_title', true);
    $readmore = get_post_meta($post->ID, '_read_more', true);
	$readmoretext = get_post_meta($post->ID, '_read_more_text', true);
	
    // Echo out the field
        echo '<p>Sub-Title:</p>';
    	echo '<input type="text" name="_pre_title" value="' . $subtitle  . '" class="widefat" />';
        echo '<p>Read More Link:</p>';
        echo '<input type="text" name="_read_more" value="' . $readmore  . '" class="widefat" />';
        echo '<p>Read More Text:</p>';
        echo '<input type="text" name="_read_more_text" value="' . $readmoretext  . '" class="widefat" />';
}


// Save the Metabox Data
function wpt_save_events_meta($post_id, $post) {
    // verify this came from the our screen and with proper authorization,
    // because save_post can be triggered at other times
    if ( !wp_verify_nonce( $_POST['eventmeta_noncename'], plugin_basename(__FILE__) )) {
    return $post->ID;
    }
    // Is the user allowed to edit the post or page?
    if ( !current_user_can( 'edit_post', $post->ID ))
        return $post->ID;
    // OK, we're authenticated: we need to find and save the data
    // We'll put it into an array to make it easier to loop though.
    $events_meta['_pre_title'] = $_POST['_pre_title'];
    $events_meta['_read_more'] = $_POST['_read_more'];
    $events_meta['_read_more_text'] = $_POST['_read_more_text'];
	
    // Add values of $events_meta as custom fields
    foreach ($events_meta as $key => $value) { // Cycle through the $events_meta array!
        if( $post->post_type == 'revision' ) return; // Don't store custom data twice
        $value = implode(',', (array)$value); // If $value is an array, make it a CSV (unlikely)
        if(get_post_meta($post->ID, $key, FALSE)) { // If the custom field already has a value
            update_post_meta($post->ID, $key, $value);
        } else { // If the custom field doesn't have a value
            add_post_meta($post->ID, $key, $value);
        }
        if(!$value) delete_post_meta($post->ID, $key); // Delete if blank
    }
}
add_action('save_post', 'wpt_save_events_meta', 1, 2); // save the custom fields

?>