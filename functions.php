<?php 
/*Theme Name: WP Test Theme
Theme URI: nickneden.com/WEB170/wordpress
Author: the Nick Nedev
Author URI: nicknedev.com
Description: This is the first test theme
Version: 1.0
*/

//Register Theme Menus

register_nav_menus( array(
                  'nav-main'=>__( 'Main Nav' ),
                  ) );

register_sidebar(array(
                 'name' => __('Main Sidebar'),
                 'id' => 'main-sidebar-id'
                
                
                ));


// Add thumbnail support
 add_theme_support( 'post-thumbnails' ); 

add_post_type_support('page', 'excerpt' );

function get_the_title_tag(){

global $post; //we need this outside of this function

if (is_front_page()) {
	bloginfo('description');
} elseif (is_page( ) || is_single( )) { // if it is a page or a post 
	the_title( ); // title of the page or posting
	} else {
		echo 'hahah';
	}

echo " | ";
bloginfo('name'); // the site name
echo " | ";
echo "Seattle, WA";

}



 ?>