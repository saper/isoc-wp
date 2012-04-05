<?php
/*
add_action('admin_menu', 'my_plugin_menu');

function my_plugin_menu() {
	add_theme_page('Add a Logo for your Theme', 'Logo', 'manage_options', 'theme-logo-uploader', 'logo_uploader');
}
function logo_uploader() {
	print '<table><tr valign="top">
	<th scope="row">Upload Image</th>
	<td><label for="upload_image">
	<input id="upload_image" type="text" size="36" name="upload_image" value="" />
	<input id="upload_image_button" type="button" value="Upload Image" />
	<br />Enter an URL or upload an image for the logo.
	</label></td>
	</tr></table>';
}*/

function my_admin_scripts() {
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_register_script('my-upload', get_bloginfo('template_directory').'/lib/logo.js', array('jquery','media-upload','thickbox'));
	wp_enqueue_script('my-upload');
}

function my_admin_styles() {
	wp_enqueue_style('thickbox');
}

if (isset($_GET['page']) && $_GET['page'] == 'theme-logo') {
	add_action('admin_print_scripts', 'my_admin_scripts');
	add_action('admin_print_styles', 'my_admin_styles');
}


function theme_logo(){
	$logo = get_option("tl_logo_src");
	if (!$logo) {
		$logo = get_bloginfo('template_url') . "/images/logo.png";
	}
	echo '<img src="'. $logo .'" alt="'.get_option("blogname").'" />';
}

function menu_item(){
	add_submenu_page("themes.php", "Theme Logo", "Theme Logo", 8, "theme-logo", "menu_page");
}

function menu_page(){
	?>
	<div id="theme-logo" class="wrap">
		<h2>Theme Logo</h2>
        
		<form action="options.php" method="post">
		<?php 
			if(function_exists('settings_fields')){
	            settings_fields('tl-options');
	        }else{
	        	wp_nonce_field('update-options');
	            ?>
	            <input type="hidden" name="action" value="update" />
	            <input type="hidden" name="page_options" value="tl_logo_src" />
	            <?php
	        }
		?>
			<table class="form-table">
				<tr>
					<td scope="row" valign="top">
						Logo Location
					</td>
					<td>
						<input type="text" value="<?php echo get_option("tl_logo_src"); ?>" name="tl_logo_src" id="tl_logo_src" />
                        <input id="upload_image_button" type="button" value="Upload Image" />
						<p>Ex.: http://domain.com/images/logo.png</p>
					</td>
					<td>
                    	Current Logo:<br />
						<?php theme_logo(); ?>
					</td>
				</tr>
			</table>
			<p class="submit">
            	<input type="submit" name="Submit" value="<?php _e('Save Changes') ?>" />
       		</p>
		</form>
		
	</div>
	<?php 
}

function tl_init(){
	if(function_exists(register_setting)){
		register_setting("tl-options", "tl_logo_src");
	}
}

function tl_activate(){
	add_option("tl_logo_src", "default");
}

function tl_deactivate(){
	delete_option("tl_logo_src");
}

if(is_admin()){
	add_action("admin_menu", "menu_item");
	add_action('admin_init', 'tl_init');
}

register_activation_hook(__FILE__, "tl_activate");
register_deactivation_hook(__FILE__, "tl_deactivate");

?>
