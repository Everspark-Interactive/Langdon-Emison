<?php
/**
 * Template Name: Make Portal Logout
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
    wp_destroy_current_session();
    wp_clear_auth_cookie();

    /**
     * Fires after a user is logged-out.
     *
     * @since 1.5.0
     */
    do_action( 'wp_logout' );
header('Location: '.get_bloginfo('url'));
