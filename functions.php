<?php
/*
Plugin Name: Global Favicon
Plugin URI: https://github.com/nwcybersolutions/Global-Favicon
Description: Use Favicon Globally throughout site, must set image path below. Also removes back to blog link
Author: Northwest Cyber Solutions
Author URI: https://nwcybersolutions.com
Version: 1.0.1
License: MIT
License URI: https://opensource.org/licenses/MIT
Text Domain: Global Favicon
Domain Path: /languages
*/
//Global Favicon
// First, create a function that includes the path to your favicon
function add_favicon() {
  	$favicon_url = '/Resources/Images/SET%20ICON%20HERE.png';
	echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
}
  
// Now, just make sure that function runs when you're on the login page and admin pages  
add_action('login_head', 'add_favicon');
add_action('admin_head', 'add_favicon');

//Now lets remove the login links.
function nwcs_remove_extra_login_link() { ?>
    <style type="text/css">
        .login #backtoblog, .login #nav {
    display: none;
}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'nwcs_remove_extra_login_link' );
