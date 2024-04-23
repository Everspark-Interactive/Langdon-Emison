<?php 


add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}
// Add inline CSS in the admin head with the style tag
function my_custom_admin_head() {
	$allthemeoptions = unserialize(get_option( 'allthemeoptions' ));
	echo '<style> #menu-posts-depositions > a, #menu-posts-webinars > a, #menu-posts-videogallery > a, #menu-posts-courtforms > a, #menu-posts-whitepapers > a, #menu-posts-guides > a, #menu-posts-ebooks > a, #menu-posts-todaystips > a, #menu-posts-form_pages > a {  border-top: 1px solid '. $allthemeoptions['themecolor1'].';  background: '. $allthemeoptions['themecolor1'].';
    color: #fff;}
	
	
	#toplevel_page_portaloptions > a{
		    background: '. $allthemeoptions['themecolor1'].';
    color: #fff;
	}
	#toplevel_page_portaloptions > a:hover{
		    background-color: #191e23;
    color: #fff;
	}
	#menu-posts-webinars > a{border-top:0;}
	.updatedsuccess{
		color: green;
    font-size: 16px;
    border-bottom: 1px solid;
    font-weight: bold;
    padding-bottom: 10px;
    margin-left: 13px;
    margin-bottom: 10px;
	}
	.textfieldlableportal{    padding-bottom: 10px;}
	.textfieldlableportal label{
		    font-size: 16px;
	}
	.textfieldportalmod input{
		    width: 100%;
    max-width: 600px;
	}
	.textfieldportalmod textarea{
		  width: 100%;
    max-width: 600px;
	height:200px;
	}
	.pmsubheading{
		font-size:20px;
	}
	#adminmenu #menu-posts-courtforms .wp-menu-image{
		height:54px;
	}
	#adminmenu #menu-posts-courtforms .wp-menu-name{
		
		padding-right:5px;
	}
	#adminmenu #menu-posts-guides .wp-menu-image{
		height:54px;
	}
	#adminmenu #menu-posts-guides .wp-menu-name{
		
		padding-right:5px;
	}
	
	
	</style>';
}
add_action( 'admin_head', 'my_custom_admin_head' );
function wpdocs_register_my_custom_menu_page(){
    add_menu_page( 
        __( 'Portal Options', 'textdomain' ),
        'Portal Options',
        'manage_options',
        'portaloptions',
        'portal_options_fun',
        '',
        6
    ); 
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_menu_page' );
 
/**
 * Display a custom menu page
 */
function portal_options_fun(){
	if(@$_POST['updateoptions']){
		
		$allcheckedvalues = $_POST['disablemodules'];
		//print_r($allcheckedvalues);
		
		$allthemeoptions = array();
		$allthemeoptions['loginpagelogo'] = $_POST['loginpagelogo'];
		$allthemeoptions['logininnerpageslogo'] = $_POST['logininnerpageslogo'];
		$allthemeoptions['themecolor1'] = $_POST['themecolor1'];
		$allthemeoptions['themecolor2'] = $_POST['themecolor2'];
		$allthemeoptions['textcolor1'] = $_POST['textcolor1'];
		$allthemeoptions['textcolor2'] = $_POST['textcolor2'];
		$allthemeoptions['innerbgcolor'] = $_POST['innerbgcolor'];
		$allthemeoptions['linkcolor'] = $_POST['linkcolor'];
		$allthemeoptions['linkcolorhover'] = $_POST['linkcolorhover'];
		
		$allthemeoptions['copyrighttext'] = $_POST['copyrighttext'];
		$allthemeoptions['facebookiconlink'] = $_POST['facebookiconlink'];
		$allthemeoptions['facebooklink'] = $_POST['facebooklink'];
		$allthemeoptions['twittericonlink'] = $_POST['twittericonlink'];
		$allthemeoptions['twitterlink'] = $_POST['twitterlink'];
		$allthemeoptions['instagramiconlink'] = $_POST['instagramiconlink'];
		$allthemeoptions['instagramlink'] = $_POST['instagramlink'];
		$allthemeoptions['linkediniconlink'] = $_POST['linkediniconlink'];
		$allthemeoptions['linkedinlink'] = $_POST['linkedinlink'];
		$allthemeoptions['webinaricon'] = $_POST['webinaricon'];
		$allthemeoptions['depositionsicon'] = $_POST['depositionsicon'];
		$allthemeoptions['videogalleryicon'] = $_POST['videogalleryicon'];
		$allthemeoptions['courtdocumenticon'] = $_POST['courtdocumenticon'];
		$allthemeoptions['whitepapersicon'] = $_POST['whitepapersicon'];
		$allthemeoptions['guidesicon'] = $_POST['guidesicon'];
		$allthemeoptions['ebooksicon'] = $_POST['ebooksicon'];
		$allthemeoptions['formicon'] = $_POST['formicon'];
		$allthemeoptions['searchboxbgcolor'] = $_POST['searchboxbgcolor'];
		$allthemeoptions['searchboxbordercolor'] = $_POST['searchboxbordercolor'];
		$allthemeoptions['todaystips'] = $_POST['todaystips'];
		
		$allthemeoptions['newuseremail'] = $_POST['newuseremail'];
		$allthemeoptions['emailsendername'] = $_POST['emailsendername'];
		$allthemeoptions['emailsenderemail'] = $_POST['emailsenderemail'];
		$allthemeoptions['preapprovedemails'] = $_POST['preapprovedemails'];
		
		
		update_option( 'allthemeoptions', serialize($allthemeoptions), false);
		update_option( 'portalmodules', serialize($allcheckedvalues), false);
	}
	?>
	<style>
	.wrapperformodules{padding:10px;}
	</style>
	<div id="wpbody" role="main">

<div id="wpbody-content" style="overflow: hidden;">

		<form method="post">		
		
<div class="wrap">
	<h1>Portal Settings</h1>


	<div id="welcome-panel" class="welcome-panel">
		<input type="hidden" id="welcomepanelnonce" name="welcomepanelnonce" value="b96a83d06a">		
		<?php
        $getallmodules = unserialize(get_option( 'portalmodules' ));
		$allthemeoptions = unserialize(get_option( 'allthemeoptions' ));
		if(@$_POST['updateoptions']){
			
			echo '<img style="
    max-width: 150px;
    margin: auto;
"  src="https://media.giphy.com/media/KUXrQAtpRgRlC/giphy.gif"/>
			<div class="updatedsuccess">Portal Module settings updated successfully, Changes are taking effect...</div><script>window.location = "'.get_bloginfo('url').'/wp-admin/admin.php?page=portaloptions";</script>';

		}
?>
			<div class="welcome-panel-content">
<h1 class="pmsubheading">Module/Content Type Settings</h1>
<div class="wrapperformodules">
<label><input type="checkbox" name="disablemodules[]" value="webinars" <?php if (in_array("webinars", $getallmodules)){ echo ' checked '; } ?>/> Disable Webinar Module </label>

</div>
<div class="wrapperformodules">
<label><input type="checkbox" name="disablemodules[]" value="depositions" <?php if (in_array("depositions", $getallmodules)){ echo ' checked '; } ?>/> Disable Deposition Module </label>

</div>
<div class="wrapperformodules">
<label><input type="checkbox" name="disablemodules[]" value="videogallery" <?php if (in_array("videogallery", $getallmodules)){ echo ' checked '; } ?>/> Disable Videos Gallery Module </label>

</div>
<div class="wrapperformodules">
<label><input type="checkbox" name="disablemodules[]" value="courtforms" <?php if (in_array("courtforms", $getallmodules)){ echo ' checked '; } ?>/> Disable Court Documents/Forms Module </label>

</div>
<div class="wrapperformodules">
<label><input type="checkbox" name="disablemodules[]" value="whitepapers" <?php if (in_array("whitepapers", $getallmodules)){ echo ' checked '; } ?>/> Disable Whitepaper Module </label>

</div>
<div class="wrapperformodules">
<label><input type="checkbox" name="disablemodules[]" value="guides" <?php if (in_array("guides", $getallmodules)){ echo ' checked '; } ?>/> Disable Guide Module </label>

</div>
<div class="wrapperformodules">
<label><input type="checkbox" name="disablemodules[]" value="ebooks" <?php if (in_array("ebooks", $getallmodules)){ echo ' checked '; } ?>/> Disable Ebook Module </label>

</div>
<div class="wrapperformodules">
<label><input type="checkbox" name="disablemodules[]" value="todaystips" <?php if (in_array("todaystips", $getallmodules)){ echo ' checked '; } ?>/> Disable Today’s Tip Module </label>

</div>
<div class="wrapperformodules" style="
    padding-bottom: 40px;
">
<label><input type="checkbox" name="disablemodules[]" value="form_pages" <?php if (in_array("form_pages", $getallmodules)){ echo ' checked '; } ?>/> Disable Form Page Module </label>

</div>
<hr>
<div id="publishing-action" style="
    width: 100%;
    padding-bottom: 8px;
	text-align:center;
">
<span class="spinner"></span>
			
		<input type="submit" name="publish" id="publish" class="button button-primary button-large" value="Update" style="
    min-width: 600px;
    /* width: 100%; */
">		</div>
		<hr style="clear:both;">
<h1 class="pmsubheading">Theme Settings</h1>
<div class="wrapperformodules">
<div class="textfieldlableportal">
<label><b>Login Page Logo Link</b> </label></div>
<div class="textfieldportalmod">
<input type="text" name="loginpagelogo" value="<?php echo $allthemeoptions['loginpagelogo']; ?>" />
</div>
</div>

<div class="wrapperformodules">
<div class="textfieldlableportal">
<label><b>Inner Page Logo Link</b> </label></div>
<div class="textfieldportalmod">
<input type="text" name="logininnerpageslogo" value="<?php echo $allthemeoptions['logininnerpageslogo']; ?>" />
</div>
</div>
<div class="wrapperformodules">
<div class="textfieldlableportal">
<label><b>Theme Primary Color (Hex Color Codes)</b> </label></div>
<div class="textfieldportalmod">
<input type="text" name="themecolor1" value="<?php echo $allthemeoptions['themecolor1']; ?>" />
</div>
</div>
<div class="wrapperformodules">
<div class="textfieldlableportal">
<label><b>Theme Secondary Color (Hex Color Codes)</b> </label></div>
<div class="textfieldportalmod">
<input type="text" name="themecolor2" value="<?php echo $allthemeoptions['themecolor2']; ?>" />
</div>
</div>
<div class="wrapperformodules">
<div class="textfieldlableportal">
<label><b>Primary text color (Hex Color Codes)</b> </label></div>
<div class="textfieldportalmod">
<input type="text" name="textcolor1" value="<?php echo $allthemeoptions['textcolor1']; ?>" />
</div>
</div>
<div class="wrapperformodules">
<div class="textfieldlableportal">
<label><b>Secondary text color (Hex Color Codes)</b> </label></div>
<div class="textfieldportalmod">
<input type="text" name="textcolor2" value="<?php echo $allthemeoptions['textcolor2']; ?>" />
</div>
</div>
<div class="wrapperformodules">
<div class="textfieldlableportal">
<label><b>Inner Pages Body Background color (Hex Color Codes)</b> </label></div>
<div class="textfieldportalmod">
<input type="text" name="innerbgcolor" value="<?php echo $allthemeoptions['innerbgcolor']; ?>" />
</div>
</div>
<div class="wrapperformodules">
<div class="textfieldlableportal">
<label><b>Link color (Hex Color Codes)</b> </label></div>
<div class="textfieldportalmod">
<input type="text" name="linkcolor" value="<?php echo $allthemeoptions['linkcolor']; ?>" />
</div>
</div>
<div class="wrapperformodules" style="
    padding-bottom: 40px;
">
<div class="textfieldlableportal">
<label><b>Link color on Hover (Hex Color Codes)</b> </label></div>
<div class="textfieldportalmod">
<input type="text" name="linkcolorhover" value="<?php echo $allthemeoptions['linkcolorhover']; ?>" />
</div>
</div>
<input type="hidden" value="1" name="updateoptions"/>
<hr>
<div id="publishing-action" style="
    width: 100%;
    padding-bottom: 8px;
	text-align:center;
">
<span class="spinner"></span>
			
		<input type="submit" name="publish" id="publish" class="button button-primary button-large" value="Update" style="
    min-width: 600px;
    /* width: 100%; */
">		</div>
		<hr style="clear:both;">
		<h1 class="pmsubheading">Header Settings</h1>
<div class="wrapperformodules">
<div class="textfieldlableportal">
<label><b>Search Box Background Color</b> </label></div>
<div class="textfieldportalmod">
<input type="text" name="searchboxbgcolor" value="<?php echo $allthemeoptions['searchboxbgcolor']; ?>" />
</div>
</div>
<div class="wrapperformodules">
<div class="textfieldlableportal">
<label><b>Search Box Border Color</b> </label></div>
<div class="textfieldportalmod">
<input type="text" name="searchboxbordercolor" value="<?php echo $allthemeoptions['searchboxbordercolor']; ?>" />
</div>
</div>

<hr>
<div id="publishing-action" style="
    width: 100%;
    padding-bottom: 8px;
	text-align:center;
">
<span class="spinner"></span>
			
		<input type="submit" name="publish" id="publish" class="button button-primary button-large" value="Update" style="
    min-width: 600px;
    /* width: 100%; */
">		</div>
		<hr style="clear:both;">
		<h1 class="pmsubheading">Footer Settings</h1>
<div class="wrapperformodules">
<div class="textfieldlableportal">
<label><b>Copyright Text</b> </label></div>
<div class="textfieldportalmod">
<input type="text" name="copyrighttext" value="<?php echo $allthemeoptions['copyrighttext']; ?>" />
</div>
</div>
<div class="wrapperformodules">
<div class="textfieldlableportal">
<label><b>Facebook Icon Link</b> </label></div>
<div class="textfieldportalmod">
<input type="text" name="facebookiconlink" value="<?php echo $allthemeoptions['facebookiconlink']; ?>" />
</div>
</div>
<div class="wrapperformodules">
<div class="textfieldlableportal">
<label><b>Facebook Link</b> </label></div>
<div class="textfieldportalmod">
<input type="text" name="facebooklink" value="<?php echo $allthemeoptions['facebooklink']; ?>" />
</div>
</div>
<div class="wrapperformodules">
<div class="textfieldlableportal">
<label><b>Twitter Icon Link</b> </label></div>
<div class="textfieldportalmod">
<input type="text" name="twittericonlink" value="<?php echo $allthemeoptions['twittericonlink']; ?>" />
</div>
</div>
<div class="wrapperformodules">
<div class="textfieldlableportal">
<label><b>Twitter Link</b> </label></div>
<div class="textfieldportalmod">
<input type="text" name="twitterlink" value="<?php echo $allthemeoptions['twitterlink']; ?>" />
</div>
</div>
<div class="wrapperformodules">
<div class="textfieldlableportal">
<label><b>Instagram Icon Link</b> </label></div>
<div class="textfieldportalmod">
<input type="text" name="instagramiconlink" value="<?php echo $allthemeoptions['instagramiconlink']; ?>" />
</div>
</div>
<div class="wrapperformodules">
<div class="textfieldlableportal">
<label><b>Instagram Link</b> </label></div>
<div class="textfieldportalmod">
<input type="text" name="instagramlink" value="<?php echo $allthemeoptions['instagramlink']; ?>" />
</div>
</div>
<div class="wrapperformodules">
<div class="textfieldlableportal">
<label><b>LinkedIn Icon Link</b> </label></div>
<div class="textfieldportalmod">
<input type="text" name="linkediniconlink" value="<?php echo $allthemeoptions['linkediniconlink']; ?>" />
</div>
</div>
<div class="wrapperformodules">
<div class="textfieldlableportal">
<label><b>LinkedIn Link</b> </label></div>
<div class="textfieldportalmod">
<input type="text" name="linkedinlink" value="<?php echo $allthemeoptions['linkedinlink']; ?>" />
</div>
</div>

<hr>
<div id="publishing-action" style="
    width: 100%;
    padding-bottom: 8px;
	text-align:center;
">
<span class="spinner"></span>
			
		<input type="submit" name="publish" id="publish" class="button button-primary button-large" value="Update" style="
    min-width: 600px;
    /* width: 100%; */
">		</div>
		<hr style="clear:both;">
		
	<h1 class="pmsubheading">Module Icon Settings</h1>
<div class="wrapperformodules">
<div class="textfieldlableportal">
<label><b>Webinars Icon</b> </label></div>
<div class="textfieldportalmod">
<input type="text" name="webinaricon" value="<?php echo $allthemeoptions['webinaricon']; ?>" />
</div>
</div>	

<div class="wrapperformodules">
<div class="textfieldlableportal">
<label><b>Depositions Icon</b> </label></div>
<div class="textfieldportalmod">
<input type="text" name="depositionsicon" value="<?php echo $allthemeoptions['depositionsicon']; ?>" />
</div>
</div>

<div class="wrapperformodules">
<div class="textfieldlableportal">
<label><b>Video Gallery Icon</b> </label></div>
<div class="textfieldportalmod">
<input type="text" name="videogalleryicon" value="<?php echo $allthemeoptions['videogalleryicon']; ?>" />
</div>
</div>

<div class="wrapperformodules">
<div class="textfieldlableportal">
<label><b>Court Documents/Forms Icon</b> </label></div>
<div class="textfieldportalmod">
<input type="text" name="courtdocumenticon" value="<?php echo $allthemeoptions['courtdocumenticon']; ?>" />
</div>
</div>

<div class="wrapperformodules">
<div class="textfieldlableportal">
<label><b>Whitepapers Icon</b> </label></div>
<div class="textfieldportalmod">
<input type="text" name="whitepapersicon" value="<?php echo $allthemeoptions['whitepapersicon']; ?>" />
</div>
</div>

<div class="wrapperformodules">
<div class="textfieldlableportal">
<label><b>Guides Icon</b> </label></div>
<div class="textfieldportalmod">
<input type="text" name="guidesicon" value="<?php echo $allthemeoptions['guidesicon']; ?>" />
</div>
</div>

<div class="wrapperformodules">
<div class="textfieldlableportal">
<label><b>Ebooks Icon</b> </label></div>
<div class="textfieldportalmod">
<input type="text" name="ebooksicon" value="<?php echo $allthemeoptions['ebooksicon']; ?>" />
</div>
</div>

<div class="wrapperformodules">
<div class="textfieldlableportal">
<label><b>Form Icon</b> </label></div>
<div class="textfieldportalmod">
<input type="text" name="formicon" value="<?php echo $allthemeoptions['formicon']; ?>" />
</div>
</div>
<hr>
<div id="publishing-action" style="
    width: 100%;
    padding-bottom: 8px;
	text-align:center;
">
<span class="spinner"></span>
			
		<input type="submit" name="publish" id="publish" class="button button-primary button-large" value="Update" style="
    min-width: 600px;
    /* width: 100%; */
">		</div>
		<hr style="clear:both;">
		
		<h1 class="pmsubheading">Today's Tips Settings</h1>
<div class="wrapperformodules">
<div class="textfieldlableportal">
<label><b>How many article to show on home?</b> </label></div>
<div class="textfieldportalmod">
<select name="todaystips" style="
    width: 100%;
    max-width: 600px;
">
<option value="0" >0</option>
<option value="1" <?php if($allthemeoptions['todaystips']==1){ echo ' selected="selected" '; } ?>>1</option>
<option value="2" <?php if($allthemeoptions['todaystips']==2){ echo ' selected="selected" '; } ?>>2</option>
<option value="3" <?php if($allthemeoptions['todaystips']==3){ echo ' selected="selected" '; } ?>>3</option>
<option value="4" <?php if($allthemeoptions['todaystips']==4){ echo ' selected="selected" '; } ?>>4</option>
<option value="5" <?php if($allthemeoptions['todaystips']==5){ echo ' selected="selected" '; } ?>>5</option>
<option value="6" <?php if($allthemeoptions['todaystips']==6){ echo ' selected="selected" '; } ?>>6</option>
<option value="7" <?php if($allthemeoptions['todaystips']==7){ echo ' selected="selected" '; } ?>>7</option>
<option value="8" <?php if($allthemeoptions['todaystips']==8){ echo ' selected="selected" '; } ?>>8</option>
<option value="9" <?php if($allthemeoptions['todaystips']==9){ echo ' selected="selected" '; } ?>>9</option>
<option value="10" <?php if($allthemeoptions['todaystips']==10){ echo ' selected="selected" '; } ?>>10</option>
</select>
</div>
</div>	
<hr>
<div id="publishing-action" style="
    width: 100%;
    padding-bottom: 8px;
	text-align:center;
">
<span class="spinner"></span>
			
		<input type="submit" name="publish" id="publish" class="button button-primary button-large" value="Update" style="
    min-width: 600px;
    /* width: 100%; */
">		</div>
		<hr style="clear:both;">
		
		
			<h1 class="pmsubheading">Email Settings</h1>
<div class="wrapperformodules">
<div class="textfieldlableportal">
<label><b>Email Address for recieving new user registration notification</b> </label></div>
<div class="textfieldportalmod">
<input type="text" name="newuseremail" value="<?php echo $allthemeoptions['newuseremail']; ?>" />
</div>
</div>	

<div class="wrapperformodules">
<div class="textfieldlableportal">
<label><b>Email Sender Name</b> </label></div>
<div class="textfieldportalmod">
<input type="text" name="emailsendername" value="<?php echo $allthemeoptions['emailsendername']; ?>" />
</div>
</div>	

<div class="wrapperformodules">
<div class="textfieldlableportal">
<label><b>Email Sender Email Address</b> </label></div>
<div class="textfieldportalmod">
<input type="text" name="emailsenderemail" value="<?php echo $allthemeoptions['emailsenderemail']; ?>" />
</div>
</div>	
<div class="wrapperformodules">
<div class="textfieldlableportal">
<label><b>Pre Approved Emails (Enter comma seperated Emails)</b> </label></div>
<div class="textfieldportalmod">
<textarea name="preapprovedemails">
<?php echo $allthemeoptions['preapprovedemails']; ?>
</textarea>

</div>
</div>
<hr>
<div id="publishing-action" style="
    width: 100%;
    padding-bottom: 8px;
	text-align:center;
">
<span class="spinner"></span>
			
		<input type="submit" name="publish" id="publish" class="button button-primary button-large" value="Update" style="
    min-width: 600px;
    /* width: 100%; */
">		</div>
		<hr style="clear:both;">
	</div>
	</form>
		</div>

	<!-- dashboard-widgets-wrap -->

</div><!-- wrap -->







	
<div class="clear"></div></div><!-- wpbody-content -->
<div class="clear"></div></div>
	<?php
     
}
function portal_delete_post_type(){
	$getallmodules = unserialize(get_option( 'portalmodules' ));
	foreach($getallmodules as $key => $value){
	unregister_post_type( $value );	
	}
    add_role( 'portal_user', 'Portal User', array( 'read' => true, 'level_0' => true ) );
}
add_action('init','portal_delete_post_type');

function custom_usercheck(){
	$registeremail = $_REQUEST['registeremail'];
	if(email_exists( $registeremail)){
		echo 'yes';
	}else{
		echo 'no';
	}
	
	wp_die();
}
add_action( 'wp_ajax_nopriv_custom_usercheck', 'custom_usercheck' );
add_action( 'wp_ajax_custom_usercheck', 'custom_usercheck' );



function custom_userregister(){
	$registeremail = $_REQUEST['registeremail'];
	if(email_exists( $registeremail)){
		echo 'error trr trr';
	}else{
		$allthemeoptions = unserialize(get_option( 'allthemeoptions' ));
		// make registration 
		$registername = $_REQUEST['registername'];
		$registerlawfirm = $_REQUEST['registerlawfirm'];
		$registerlawphone = @$_REQUEST['registerlawphone'];
		$registerpass = $_REQUEST['registerpass'];
		
	$name = trim($registername);
    $last_name = (strpos($name, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $name);
    $first_name = trim( preg_replace('#'.$last_name.'#', '', $name ) );
	
	$createduserid = 	wp_insert_user( array(
	
	'first_name'=>$first_name,
	'last_name'=>$last_name,
	'description'=>$registerlawfirm,
	'user_login'=>$registeremail,
	'role'=>'portal_user',
	'nickname'=>$registername,
	'user_email'=>$registeremail,
	'user_pass'=>$registerpass
	));
	//print_r($createduserid);
	//wp_die();
	if($createduserid){
		// user created
		
		// update user meta 
		
		$updated = update_user_meta( $createduserid, 'user_phone', $registerlawphone );
		$updated = update_user_meta( $createduserid, 'is_approved', 'no' );
		// send email that a new user has registered
		 wp_mail( $allthemeoptions['newuseremail'], 'A New User Has Registered To Portal', 'Email:'.$registeremail.'<br>
		 Name:'.$registername.'<br>
		 Firm Name:'.$registerlawfirm.'<br>
		 Phone:'.$registerlawphone.'<br>
		 To approve or deny this request, visit your admin panel in WordPress, or follow this link:<br>
		 https://langdonemison.wpengine.com/wp-admin/users.php?s='.$registeremail.'<br><br>
	Regards<br>
	<b>Langdon & Emison </b>
		 ',array('Content-Type: text/html; charset=UTF-8') );
		echo 'yes';
	}
	
	}
	
	wp_die();
}
add_action( 'wp_ajax_nopriv_custom_userregister', 'custom_userregister' );
add_action( 'wp_ajax_custom_userregister', 'custom_userregister' );
function new_modify_user_table( $column ) {
    $column['firmname'] = 'Firm Name';
    $column['phone'] = 'Phone';
	$column['approved'] = 'Approved';
    return $column;
}
add_filter( 'manage_users_columns', 'new_modify_user_table' );

function new_modify_user_table_row( $val, $column_name, $user_id ) {
    switch ($column_name) {
        case 'firmname' :
            return get_the_author_meta( 'description', $user_id );
			
        case 'phone' :
            return get_user_meta( $user_id, 'user_phone', true );
			
		case 'approved' :
		
		$approved ='';
		
		$approved = get_user_meta( $user_id, 'is_approved', true );
		
		if($approved=='yes'){
			 return 'Yes';
		}else{
			 return 'No';
		}
           
        default:
    }
    return $val;
}
add_filter( 'manage_users_custom_column', 'new_modify_user_table_row', 10, 3 );

add_filter( 'bulk_actions-users', 'register_my_bulk_actions' );
 
function register_my_bulk_actions($bulk_actions) {
  $bulk_actions['approve_users'] = __( 'Approve', 'approve_users');
  $bulk_actions['deny_users'] = __( 'Deny', 'deny_users');
  return $bulk_actions;
}

add_filter( 'handle_bulk_actions-users', 'my_bulk_action_handler', 10, 3 );
 
function my_bulk_action_handler( $redirect_to, $doaction, $post_ids ) {
  if ( $doaction == 'approve_users'  || $doaction == 'deny_users' ) {
     if ( $doaction == 'approve_users') {
		  foreach ( $post_ids as $post_id ) {
    // Perform action for each post.
	
	update_user_meta( $post_id, 'is_approved', 'yes' );
	
	$userobj = get_user_by('ID',$post_id);
	
	wp_mail( $userobj->user_email,
	'Your Account has been approved', 
	'Hello, '.$userobj->first_name.'<br>
	Your account has been approved.<br>
	You can login and explore.<br>
	<a href="'.get_bloginfo('url').'">Click Here To Login</a>
	<br><br>
	Regards<br>
	<b>Langdon & Emison </b>
	
	',
	array('Content-Type: text/html; charset=UTF-8') );
  }
		$redirect_to = add_query_arg( 'bulk_approved', count( $post_ids ), $redirect_to ); 
	 }
	 if ( $doaction == 'deny_users' ) {
		  foreach ( $post_ids as $post_id ) {
    // Perform action for each post.
	
	update_user_meta( $post_id, 'is_approved', 'no' );
	
	
		$userobj = get_user_by('ID',$post_id);
	
	wp_mail( $userobj->user_email,
	'Your Account has been Denied', 
	'Hello, '.$userobj->first_name.'<br>
	Your account has been Denied.<br>
	<br>
	Regards<br>
	<b>Langdon & Emison </b>
	
	',
	array('Content-Type: text/html; charset=UTF-8') );
  }
		 $redirect_to = add_query_arg( 'bulk_denied', count( $post_ids ), $redirect_to );
	 }
  }else{
	 return $redirect_to; 
  }
 
  
  return $redirect_to;
}

add_action( 'admin_notices', 'my_bulk_action_admin_notice' );
 
function my_bulk_action_admin_notice() {
  if ( ! empty( $_REQUEST['bulk_approved'] ) ) {
    $emailed_count = intval( $_REQUEST['bulk_approved'] );
    printf( '<div id="message" class="updated fade">' .
      _n( '%s Portal Users Approved.',
        '%s Portal Users Has Been Approved.',
        $emailed_count,
        'approve_users'
      ) . '</div>', $emailed_count );
  }
  
    if ( ! empty( $_REQUEST['bulk_denied'] ) ) {
    $emailed_count = intval( $_REQUEST['bulk_denied'] );
    printf( '<div id="message" class="updated fade">' .
      _n( '%s Portal Users Denied.',
        '%s Portal Users Has Been Denied.',
        $emailed_count,
        'deny_users'
      ) . '</div>', $emailed_count );
  }
}

 function wpse66094_no_admin_access() {
    $redirect =  home_url( '/' );
    global $current_user;
    $user_roles = $current_user->roles;
    $user_role = array_shift($user_roles);
    if($user_role === 'portal_user'){
        exit( wp_redirect( $redirect ) );
    }
 }

add_action( 'admin_init', 'wpse66094_no_admin_access', 100 );

function beetcore_change_from_email( $original ) {
	$allthemeoptions = unserialize(get_option( 'allthemeoptions' ));
	return $allthemeoptions['emailsenderemail'];
}
add_filter( 'wp_mail_from', 'beetcore_change_from_email' );

function beetcore_change_from_name( $original ) {
	$allthemeoptions = unserialize(get_option( 'allthemeoptions' ));
	return $allthemeoptions['emailsendername'];
}
add_filter( 'wp_mail_from_name', 'beetcore_change_from_name' );

add_action( 'user_register', 'myplugin_registration_save', 10, 1 );

function myplugin_registration_save( $user_id ) {
 if(is_admin()){
	  update_user_meta( $user_id, 'is_approved', 'yes' );
	  
 }
}
function my_pre_get_posts( $query )
{
    // validate
    if( is_admin() )
    {
        return $query;
    }


    if( isset($query->query_vars['post_type']) )
    {
        $query->set('orderby', 'title');
        
        $query->set('order', 'ASC');
    }

    // always return
    return $query;

}

add_action('pre_get_posts', 'my_pre_get_posts');
function wpa_cpt_tags( $query ) {
    if ( $query->is_tag() && $query->is_main_query() ) {
        $query->set( 'post_type', array( 'webinars', 'depositions','videogallery','courtforms','whitepapers','guides','ebooks' ) );
    }
}
add_action( 'pre_get_posts', 'wpa_cpt_tags' );