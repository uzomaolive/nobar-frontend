<?php
/**
 * Plugin Name: NoBar Frontend
 * Description: A lightweight plugin that hides the admin bar from the frontend for logged-in users.
 * Version: 1.0.0
 * Author: Olive Uzoma
 * Author URI: https://oliveuzoma.com
 */

// Hide admin bar from the frontend for logged-in users
add_filter( 'show_admin_bar', '__return_false' );
 