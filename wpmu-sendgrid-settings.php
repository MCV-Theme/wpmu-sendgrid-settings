<?php
/*
Plugin Name: WPMU SendGrid Settings
Plugin URI: https://github.com/MCV-Theme/wpmu-sendgrid-settings
Description: Add global default settings to WordPress Multisite.
Version: 1.0.0
Author: Jason Jersey
Author URI: https://twitter.com/degersey
License: GNU General Public License v2
License URI: http://www.gnu.org/licenses/gpl-2.0.html
GitHub Plugin URI: https://github.com/MCV-Theme/wpmu-sendgrid-settings
GitHub Branch: master
*/


/* run on activation */
register_activation_hook( __FILE__, 'setup_subsite_sendgrid' );

/* default settings */
function setup_subsite_sendgrid() { 

    /* replace 'username' with your Sendgrid username */
    update_option("sendgrid_user", "username");

    /* replace 'password' with your Sendgrid username */
    update_option("sendgrid_pwd", "password");

    /* replace 'Comapny Name' with your comapny name */
    update_option("sendgrid_from_name", "Comapny Name");

    /* replace 'no-reply@example.com' with your sending email */
    update_option("sendgrid_from_email", "no-reply@example.com");
	
}