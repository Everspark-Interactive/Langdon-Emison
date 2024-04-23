<?php
/**
 * Template Name: Make Portal Login
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

$emailaddress = $_POST['emailaddress'];
$loginpassword = $_POST['loginpassword'];

if($emailaddress && $loginpassword){
	// check if user in database
	$user = wp_authenticate( $emailaddress, $loginpassword );
	if(array_key_exists("errors",$user)){
		header('Location: '.get_bloginfo('url').'/?er=1');
	}else{
		$userid = $user->data->ID;
		$usernow = get_userdata( $userid );

// Get all the user roles as an array.
$user_roles = $usernow->roles;
if ( in_array( 'portal_user', $user_roles, true ) ) {
    // Do something.
    // get approved meta 
	$approved = get_user_meta( $userid, 'is_approved', true );
	
	// check if we need to bypass the aprroval for this emailaddress
	global $wpdb;
	$results_match_email = $wpdb->get_row( 'SELECT * FROM wp_approvedmails where email="'.$emailaddress.'"');
	if(count($results_match_email) > 0){
	$approved 	='yes';	
	}
	$allthemeoptions = unserialize(get_option( 'allthemeoptions' ));

		if($approved=='yes'){
			// user is approved make login
 wp_clear_auth_cookie();
 wp_set_current_user ( $userid );
 wp_set_auth_cookie  ( $userid );
	
	
header('Location: '.get_bloginfo('url'));
		}else{
			// user is not approved
			header('Location: '.get_bloginfo('url').'/?er=3');
		}
}else{
	// not portal user dont login 
	header('Location: '.get_bloginfo('url').'/?er=2');
}
	}
}else{
	header('Location: '.get_bloginfo('url'));
}
