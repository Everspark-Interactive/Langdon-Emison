<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
$allowportalaccess = false;

if(is_user_logged_in()){
$user = wp_get_current_user();
$roles = ( array ) $user->roles;
if($roles[0]=="administrator" || $roles[0]=="portal_user" ){
	
$allowportalaccess =true;	
}
}
?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">
       <link href="https://fonts.googleapis.com/css2?family=Quattrocento+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
		<?php wp_head(); $allthemeoptions = unserialize(get_option( 'allthemeoptions' )); ?>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('url'); ?>/wp-content/themes/twentytwenty-child/fancybox/jquery.fancybox.min.css">
<style>
<?php if($allowportalaccess){?>
body{background:<?php echo $allthemeoptions['innerbgcolor']; ?>; font-family: 'Quattrocento Sans', sans-serif; }
<?php }else{ ?>
body{background:<?php echo $allthemeoptions['themecolor1']; ?>; font-family: 'Quattrocento Sans', sans-serif; }
<?php } ?>

.wrapperlogin{
	width: 90%;
    max-width: 1100px;
    margin: auto;
}
.innerlogincontainer{
	
	background: <?php echo $allthemeoptions['themecolor2']; ?>;
    
   padding: 70px;
    margin-top: 90px;
    float: left;
}
.logincontainerleft{
	width: 50%;
    float: left;
}
.darklogo{
	margin-bottom: 45px;
}
.darklogo img{
	    max-width: 218px;
}
.webtitle{
	color: <?php echo $allthemeoptions['textcolor1']; ?>;
    font-family: 'Quattrocento Sans', sans-serif;
    font-weight: 700;
    font-size: 24px;
    text-transform: UPPERCASE;
    letter-spacing: -1px;
    margin-bottom: 10px;
}
.webtagline{
	    font-family: 'Quattrocento Sans', sans-serif;
    font-size: 18px;
    font-weight: 400;
    margin-bottom: 20px;
	color: <?php echo $allthemeoptions['themecolor1']; ?>;
}
.webdesc{
	color: <?php echo $allthemeoptions['textcolor1']; ?>;
	font-family: 'Quattrocento Sans', sans-serif;
    font-size: 14px;
    line-height: 24px;
}
.logincontainerright{
	width: 50%;
    float: left;
    padding-left: 120px;
	padding-right: 20px;
}
.loginboxtitle{
	font-size: 24px;
    font-weight: bold;
    margin-bottom: 10px;
    letter-spacing: -1px;
	color: <?php echo $allthemeoptions['textcolor1']; ?>;
}
.loginboxtitleborder{
	    height: 2px;
    background:  <?php echo $allthemeoptions['themecolor1']; ?>;
    width: 36px;
    margin-bottom: 20px;
}
.loginboxcontainer{
	    padding-top: 10px;
}
.loginboxcontainer .loginfirldcontainer{position: relative;
    margin-bottom: 15px;}
.loginboxcontainer .loginfirldcontainer svg{
	position: absolute;
    top: 16px;
    left: 20px;
}
.loginboxcontainer .loginfirldcontainer  input{
	border-radius: 7px;
    font-size: 15px;
    color:<?php echo $allthemeoptions['textcolor1']; ?>;
    font-family: 'Quattrocento Sans', sans-serif;
    padding-left: 50px;
    border-color: #b3b0b0bd;
}
.loginboxcontainer .loginfirldcontainer  input:focus, .loginboxcontainer .loginfirldcontainer  input:active{
	border-radius: 7px;
	box-shadow:none;
	border: 1px solid <?php echo $allthemeoptions['themecolor1']; ?>;
}
.loginboxcontainer .forgotcontainer{
	text-align: right;
}
 a{
	    font-size: 14px;
    font-weight: bold;
    color: <?php echo $allthemeoptions['linkcolor']; ?>;
    text-decoration: none;
}
 a:hover{ color: <?php echo $allthemeoptions['linkcolorhover']; ?>; }
 .loginboxcontainer .loginfirldcontainer.submitform{
	    padding-top: 25px; 
 }
.loginboxcontainer .loginfirldcontainer.submitform input {
	 color: <?php echo $allthemeoptions['themecolor2']; ?>;
    font-size: 16px;
    font-weight: 400;
    text-transform: none;
    width: 100%;
    padding-top: 15px;
    padding-bottom: 14px;
    padding-left: 0;
    padding-right: 0;
    background: <?php echo $allthemeoptions['themecolor1']; ?>;
 }
::-webkit-input-placeholder { /* Chrome/Opera/Safari */
 color:<?php echo $allthemeoptions['textcolor1']; ?>;
    font-family: 'Quattrocento Sans', sans-serif;
	font-size: 15px;
}
::-moz-placeholder { /* Firefox 19+ */
   color:<?php echo $allthemeoptions['textcolor1']; ?>;
    font-family: 'Quattrocento Sans', sans-serif;
	font-size: 15px;
}
:-ms-input-placeholder { /* IE 10+ */
  color:<?php echo $allthemeoptions['textcolor1']; ?>;
    font-family: 'Quattrocento Sans', sans-serif;
	font-size: 15px;
}
:-moz-placeholder { /* Firefox 18- */
   color:<?php echo $allthemeoptions['textcolor1']; ?>;
    font-family: 'Quattrocento Sans', sans-serif;
	font-size: 15px;
}
.registercontainer{    text-align: center;
    font-size: 18px;
    font-weight: bold;
    padding-top: 5px;
	color:<?php echo $allthemeoptions['textcolor1']; ?>;
	}
.registercontainer a{
	    font-size: 18px;
}
*:focus {
    outline: none;
}
.loginboxcontainer .loginfirldcontainer.submitform input:hover, .loginboxcontainer .loginfirldcontainer.submitform input:focus, .loginboxcontainer .loginfirldcontainer.submitform input:active{
	text-decoration:none;
}
h1,h2,h3,h4,h5,h6{
	margin-top:10px;
	color:<?php echo $allthemeoptions['textcolor1']; ?>;
	margin-bottom:15px;
}
#register h2{
	text-align:center;
	    font-size: 28px;
    margin-top: 0;
    margin-bottom: 15px;
}
#register .loginboxcontainer .loginfirldcontainer.submitform {
    padding-top: 0;
}
.formerror{font-size: 14px;
    padding-top: 0;
    padding-bottom: 15px;
margin-bottom: 0;
color:<?php echo $allthemeoptions['textcolor1']; ?>;
}
.registerstarted{
	color: <?php echo $allthemeoptions['textcolor1']; ?>;
    font-size: 16px;
}
.registerstarted, .registerfailed, .registersuccessfull{
	color: <?php echo $allthemeoptions['textcolor1']; ?>;
    font-size: 16px;
	
    text-align: center;
    line-height: 26px;
}
.loginerror{
	    font-size: 16px;
    padding-bottom: 10px;
    color: red;
}
.sitecontainer{
	    max-width: 1140px;
    margin: auto;
	width:90%;
}
header{
	  background: <?php echo $allthemeoptions['themecolor1']; ?>;
	      padding-top: 0;
    padding-bottom: 0;
	    float: left;
    width: 100%;
}
footer{
	  background: <?php echo $allthemeoptions['themecolor1']; ?>;
	      
    padding-top: 20px;
    padding-bottom: 20px;
    float: left;
    width: 100%;
}
.headerwrapper{
	
	width: 100%;
    float: left;
}
.headerwrapper .logo{
	    float: left;
    width: 50%;
	padding-top: 2px;
    padding-bottom: 2px;
}
.headerwrapper .searchandlogout{
	    width: 50%;
    float: right;
	    padding-top: 30px;
}
.headerwrapper .logo img{
	
	    max-width: 196px;
}
.headerwrapper .searchandlogout .sitesearchbox{
	width: 370px;
    float: left;
    position: relative;
}
.headerwrapper .searchandlogout .sitesearchbox svg{
font-size: 17px;
	    position: absolute;
    right: 18px;
    top: 11px;
	cursor:pointer;}
.headerwrapper .searchandlogout .sitesearchbox input{
	background: <?php echo $allthemeoptions['searchboxbgcolor']; ?>;
    color: <?php echo $allthemeoptions['themecolor2']; ?>;
    border-radius: 7px;
	border: 1px solid <?php echo $allthemeoptions['searchboxbordercolor']; ?>;
    padding: 11px;
    padding-left: 18px;
    padding-right: 18px;
	font-size:14px;
	font-family: 'Quattrocento Sans', sans-serif;
}
.headerwrapper .searchandlogout .logoutbox{
	float: right;
	padding-top: 9px;
}
.headerwrapper .searchandlogout .logoutbox a{    color: <?php echo $allthemeoptions['themecolor2']; ?>;
    font-size: 16px;
    font-weight: bold;}
	.headerwrapper .searchandlogout .logoutbox a span{
		    padding-right: 5px;
	}
.headerwrapper .searchandlogout .logoutbox svg{ display: inline;}

.headerwrapper .searchandlogout .sitesearchbox ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
 color:<?php echo $allthemeoptions['themecolor2']; ?>;
    font-family: 'Quattrocento Sans', sans-serif;
	font-size: 14px;
}
.headerwrapper .searchandlogout .sitesearchbox ::-moz-placeholder { /* Firefox 19+ */
   color:<?php echo $allthemeoptions['themecolor2']; ?>;
    font-family: 'Quattrocento Sans', sans-serif;
	font-size: 14px;
}
.headerwrapper .searchandlogout .sitesearchbox :-ms-input-placeholder { /* IE 10+ */
  color:<?php echo $allthemeoptions['themecolor2']; ?>;
    font-family: 'Quattrocento Sans', sans-serif;
	font-size: 14px;
}
.headerwrapper .searchandlogout .sitesearchbox :-moz-placeholder { /* Firefox 18- */
   color:<?php echo $allthemeoptions['themecolor2']; ?>;
    font-family: 'Quattrocento Sans', sans-serif;
	font-size: 14px;
}
.mainbody{
	padding-top: 70px;
    clear: both;
    padding-bottom: 70px;
	 float: left;
    width: 100%
}
footer .copyrightbox{    float: left;
    width: 50%; padding-top: 9px;
    font-size: 14px;
    color: <?php echo $allthemeoptions['themecolor2']; ?> ;}
	   
footer .socialiconbox{
float: right;
    width: 50%;
    text-align: right;	}
	footer .socialiconbox .extcontainer{    float: right;
    margin: 0;
    min-width: 100px;
    height: 32px;}
	footer .socialiconbox .extcontainer span{display: inline-block;}
	footer .socialiconbox .extcontainer span a{}
	footer .socialiconbox .extcontainer span a img{}
	
.moduleboxes{
	    width: 33.33%;
    float: left;
}
.moduleboxes .moduleboxcontainer{
	    text-align: center;
    background: <?php echo $allthemeoptions['themecolor2']; ?>;
    padding: 60px;
    border-radius: 50%;
    width: 270px;
    height: 270px;
    margin: auto;
    margin-bottom: 20px;
	 margin-top: 20px;
}
.moduleboxes .moduleboxcontainer img{    margin: auto;
    max-height: 58px;}
.moduleboxes .moduleboxcontainer .iconholderm{
	height: 120px;
    width: 120px;
    border: 4px solid <?php echo $allthemeoptions['themecolor1']; ?>;
    border-radius: 50%;
    margin: auto;
    padding-top:27px;
}
.moduleboxes .moduleboxcontainer .moduleboxtitle{
	color: <?php echo $allthemeoptions['textcolor1']; ?>;
    font-size: 20px;
    font-weight: bold;
    padding-top: 12px;
}
.innerpagecontainer{
	    float: left;
    width: 100%;
}
.innerpagecontainer .archivetitle{
	   font-size: 38px;
    font-weight: bold;
    text-align: center;
    margin-bottom: 6px;
    color: <?php echo $allthemeoptions['themecolor1']; ?>;
}
.innerpagecontainer .archivetitleborder{
	background: <?php echo $allthemeoptions['themecolor1']; ?>;
    height: 3px;
    width: 50px;
    margin: auto;
    margin-bottom: 30px;
}
.innerpagecontainer .leftsidebar{
	float: left;
    width: 30%;
    padding-right: 40px;
}
.leftsidebar #openmenuicon{display:none !important;}
.leftsidebar #openmenuicon svg{    background: <?php echo $allthemeoptions['themecolor1']; ?>;
    border-radius: 7px;     cursor: pointer;}
.leftsidebar .modulemenucont{    display: block;
    border-top: 5px solid #822327;}
.leftsidebar .modulemenucont ul{
	margin: 0;
    list-style: none;
    margin-top: 0;
    margin-bottom: 10px;
    background: transparent;
	}
.leftsidebar .modulemenucont ul li{
	    margin: 0;
    padding-top: 10px;
    padding-bottom: 10px;
    border-bottom: 1px solid <?php echo $allthemeoptions['themecolor1']; ?>;
    padding-left: 10px;
    padding-right: 10px;
}
.leftsidebar .modulemenucont ul li:last-child {
  border-bottom:0;
}
.leftsidebar .modulemenucont ul li a{
	color:<?php echo $allthemeoptions['textcolor1']; ?>;
}
.leftsidebar .modulemenucont ul li a:hover{
	color:<?php echo $allthemeoptions['themecolor1']; ?>;
}
 .rightsidecontent{
	    float: right;
    width: 70%;
}
.rightsidecontent .singlecontentbox{
	        margin: 0 10px 20px 10px !important;
    width: calc( 33.33% - 20px );
    float: left;
    background: #fff;
    height: 405px; 
    position: relative;
	transition: .5s ease;
}
.rightsidecontent .singlecontentbox:hover{box-shadow: 0 0 0 5px #bf9b60;
transition: .5s ease;}
.rightsidecontent .singlecontentbox.videogallery{
    height: 305px;	
}
.tag .rightsidecontent .singlecontentbox.videogallery, .search .rightsidecontent .singlecontentbox.videogallery{ height: 405px;}
.videothumbimage img{    max-width: 100% !important;}
.rightsidecontent .thumbimage{
	      width: 100%;
    background-position: top !important;
    background-size: contain !important;
    background-repeat: no-repeat !important;
    background-color: #827d7d !important;
}
.rightsidecontent .singlecontentbox .itemtitle{
	  margin: 15px 20px;
    font-size: 20px;
    text-transform: capitalize;
    /* margin-bottom: 10px; */
    line-height: 1.2em;
}
.rightsidecontent .singlecontentbox.videogallery .itemtitle{
	margin-bottom:5px;
}
.rightsidecontent .singlecontentbox .itemtitle a{
	    color: <?php echo $allthemeoptions['textcolor1']; ?>;
    font-size: 18px;
    font-weight: bold;
}
.rightsidecontent .singlecontentbox .itemtitle a:hover{
	color:<?php echo $allthemeoptions['themecolor1']; ?>;
}
.rightsidecontent .singlecontentbox .dateadded{
	display:none;
	    font-size: 14px;
    margin-bottom: 10px;
    color: <?php echo $allthemeoptions['textcolor1']; ?>;
}
.rightsidecontent .singlecontentbox img{
	    max-width: 400px;
}
.leftsidebar .archivetypeswidget h3{
	font-size: 22px;
    
    margin-top: 30px;
     color: <?php echo $allthemeoptions['textcolor1']; ?>;
}
.leftsidebar .archivetypeswidget ul{
	margin-left: 0;
}
.rightsidecontent .singlecontentbox:last-child{
	margin-bottom:0;
}
 .innerpagecontainer .rightsidecontent .archivetitle{
	 text-align: left;
 }
  .innerpagecontainer .rightsidecontent .archivetitleborder{
	  height: 2px;
	  margin-left: 0;
	  width:100%;
  }
  .rightsidecontent .contentbox{ font-size: 16px;}
  .rightsidecontent .contentbox p{
	  font-size: 16px;
    color: <?php echo $allthemeoptions['textcolor1']; ?>;
    margin-bottom: 30px;
  }
  .rightsidecontent .singlecontentbox .downloadfiles{
	         margin: 15px 20px;
    cursor: pointer;
    position: absolute;
    bottom: 0;
    right: -20px;
    width: 100%;
    margin-bottom: 0;
  }
  .rightsidecontent .singlecontentbox .downloadfiles a{
	  background: <?php echo $allthemeoptions['themecolor1']; ?>;
    color: <?php echo $allthemeoptions['themecolor2']; ?>;
      
    padding: 10px;
    padding-left: 30px;
    padding-right: 30px;
    border-radius: 0;
    font-size: 14px;
    font-weight: 400;
    display: block;
    text-align: center;
  }
  .singlecontentbox .filetypedep{
	 margin: 10px 20px;
    /* margin-top: 0; */
    display: block;
  }
  .singlecontentbox .filetypedep img{
	      max-width: 20px;
    display: inline;
    vertical-align: bottom;
  }
  .singlecontentbox .filetypedep span{
	  font-size: 15px;
    padding-left: 15px;
	  color: <?php echo $allthemeoptions['textcolor1']; ?>;
  }
  .thumbimage.withinpapers{
	  margin-bottom:25px;
  }
  .formpagecontent .gfield_label{
	  color: <?php echo $allthemeoptions['textcolor1']; ?>; 
  }
   .formpagecontent .gform_wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]){
	   border-radius: 7px;
    font-size: 15px;
    color: <?php echo $allthemeoptions['textcolor1']; ?>;
    padding: 10px;
    font-family: 'Quattrocento Sans', sans-serif;
    padding-left: 15px;
    padding-right: 15px;
    border-color: #b3b0b0bd;
   }
   .formpagecontent .gform_wrapper select, .formpagecontent .gform_wrapper textarea{border-radius: 7px;
    font-size: 15px;
    color: <?php echo $allthemeoptions['textcolor1']; ?>;
  
    padding: 10px !important;
    font-family: 'Quattrocento Sans', sans-serif;
    padding-left: 15px !important;
    padding-right: 15px !important;
    border-color: #b3b0b0bd;}
   
   .formpagecontent .ginput_container .gfield_checkbox input, .formpagecontent .ginput_container .gfield_radio input{
	   font-size: 15px;
      color: <?php echo $allthemeoptions['textcolor1']; ?>;
       margin-top: 0 !important;
    
    padding: 0;
    font-family: 'Quattrocento Sans', sans-serif;
    padding-left: 0;
    padding-right: 0;
    border-color: #b3b0b0bd;
    margin-right: 10px;
    border-radius: 0;
    
   }
   .formpagecontent .ginput_container .gfield_checkbox input{
	 vertical-align: text-top !important;  
   }
  .formpagecontent .gform_wrapper h3.gform_title{  font-size: 24px;
      color: <?php echo $allthemeoptions['textcolor1']; ?>;}
  .formpagecontent .gform_wrapper span.gform_description{ font-size: 15px;
      color: <?php echo $allthemeoptions['textcolor1']; ?>;}
	  
	 .formpagecontent   .gform_wrapper .gform_footer input.button, 
	  .formpagecontent  .gform_wrapper .gform_footer input[type=submit], 
	  .formpagecontent  .gform_wrapper .gform_page_footer input.button, 
	  .formpagecontent  .gform_wrapper .gform_page_footer input[type=submit]{
		  color: <?php echo $allthemeoptions['themecolor2']; ?>;
    font-size: 16px;
    font-weight: 400;
    text-transform: none;
    /* width: 100%; */
    padding-top: 15px;
    padding-bottom: 14px;
    padding-left: 0;
    padding-right: 0;
    background: <?php echo $allthemeoptions['themecolor1']; ?>;
    padding-left: 40px;
    padding-right: 40px;
    border-radius: 7px;
    font-family: 'Quattrocento Sans', sans-serif;
    text-decoration: none;
	  }
	  
	  .blogcontents p{
		  font-size:16px; 
		   color: <?php echo $allthemeoptions['textcolor1']; ?>;
	  }
	  .newstickerhome{
		  background-color: <?php echo $allthemeoptions['themecolor1']; ?> !important;
		  margin-top:50px;
		  clear:both;
		      float: left;
    width: 100%;
	  }
	  .newstickerhome a{
		color: <?php echo $allthemeoptions['themecolor2']; ?> !important;  
		padding-left:20px;
		padding-right:20px;
	  }
	  .newstickerhome a:hover{
		text-decoration: underline !important;  
	  }
	  .headerwrapper .searchandlogout .sitesearchbox input:focus{
		  outline:none;
	  }
	  @media only screen and (max-width: 1115px) { 
	  .moduleboxes {
	  width: 50%;}
	  .headerwrapper .searchandlogout .sitesearchbox {
		  width: 300px;
	  }
	  }
	  
	  @media only screen and (max-width: 980px) {
  .innerlogincontainer{
	  margin-top: 40px;    margin-bottom: 40px;
  }
  .logincontainerleft {
    width: 100%;
    float: none;
    text-align: center;
    margin-bottom: 50px;
}
.logincontainerright {
    width: 100%;
    float: none;
    padding-left: 0;
    padding-right: 0;
    max-width: 400px;
    margin: auto;
}
.darklogo {
    margin-bottom: 30px;
}
.darklogo img {
    max-width: 180px;
    margin: auto;
}
.archive .rightsidecontent .singlecontentbox{
	    width: calc( 50% - 20px );
}
}
@media only screen and (max-width: 900px) {
	header{
		    padding-bottom: 20px;
	}
	.headerwrapper .logo {
    float: none;
    width: 100%;
    padding-top: 2px;
    padding-bottom: 2px;
}
.headerwrapper .logo img{margin: auto; }
.headerwrapper .searchandlogout {
    width: 100%;
    float: none;    padding-top: 0;
}
.headerwrapper .searchandlogout .sitesearchbox {
    width: 100%;
    margin-top: 10px;
    float: none;
    max-width: 500px;
    margin-left: auto;
    margin-right: auto;
}
.headerwrapper .searchandlogout .logoutbox {
    float: none;
    padding-top: 10px;
    text-align: center;
}
footer .copyrightbox {
    float: none;
    width: 100%;
    padding-top: 0;
    text-align: center;
}

footer .socialiconbox {
    float: none;
    width: 100%;
    text-align: center;
}
footer .socialiconbox .extcontainer {
    float: none;
	    margin-top: 15px;
}
}
@media only screen and (max-width: 730px) {
	.moduleboxes {
    width: 100%;
}
}
@media only screen and (max-width: 700px) {
	.rightsidecontent {
    float: right;
    width: 100%;
    margin-top: 20px;
}
	.leftsidebar .modulemenucont {
    display: none ;
	}
	
	.leftsidebar #openmenuicon {
    display: block !important;
    text-align: center;
    margin-bottom: 10px;
}
.leftsidebar #openmenuicon svg{
	    margin: auto;
}
.innerpagecontainer .leftsidebar {
    float: left;
    width: 100%;
    padding-right: 0;
}
}
@media only screen and (max-width: 420px) {
	.innerlogincontainer {
    margin-top: 20px;
    margin-bottom: 20px;
	padding:30px;
}

.archive .rightsidecontent .singlecontentbox {
    width: calc( 100% - 20px );
    height: auto;
}
.rightsidecontent .singlecontentbox .downloadfiles {
    margin: 15px 0;
    cursor: pointer;
    position: relative;
    bottom: 0;
    right: 0;
    width: 100%;
    margin-bottom: 0;
}
}
@media only screen and (max-width: 360px) {
	.moduleboxes .moduleboxcontainer{
		width:100%;
	}
}

.singlecontentbox.singlepostpage{width: 100% !important;
    background: transparent !important;
    height: auto !important;
    margin: 0 !important;
}
.single .rightsidecontent  .singlecontentbox.singlepostpage .downloadfiles {
	margin: 0;
    cursor: pointer;
    position: relative;
    bottom: 0;
    right: 0;
    width: 100%;
    margin-bottom: 0;
}
.single .rightsidecontent  .singlecontentbox.singlepostpage:hover {
	    box-shadow: none !important;
}
</style></head>
	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>
<?php if(!$allowportalaccess){
	?>
	<div class="wrapperlogin">
	<div class="innerlogincontainer">
	<div class="logincontainerleft">
	<div class="darklogo"><img src="<?php echo $allthemeoptions['loginpagelogo']; ?>"/></div>
	<div class="webtitle">Langdon & Emison</div>
	<div class="webtagline">Helping People in Their Greatest Time of Need</div>
	<div class="webdesc">Recognized as one of the nation’s top personal injury law firms, Langdon & Emison represents people who have been seriously injured or lost loved ones due to auto product defects; trucking and railroad accidents; defective consumer products; dangerous drugs and medical devices; and other instances of negligence. Over the last 30+ years we have earned close to $1 billion in verdicts and settlements for our clients, relentlessly taking on the world’s largest corporations for making decisions that harm innocent people.</div>
	</div>
	<div class="logincontainerright">
	<div class="loginboxtitle">
	Attorney Login
	</div>
	<div class="loginboxtitleborder"></div>
	<div class="loginboxcontainer">
	<form method="post" action="<?php echo get_bloginfo('url').'/makeportallogin'; ?>" id="loginform">
	<?php if(@$_GET['er']==1){
		
		echo '<div class="loginerror">Email and Password does not match with record.</div>';
	} ?>
		<?php if(@$_GET['er']==2){
		
		echo '<div class="loginerror">You do not have access to portal.</div>';
	} ?>
	
	<?php if(@$_GET['er']==3){
		
		echo '<div class="loginerror">Your account has not been approved yet.</div>';
	} ?>
	<div class="loginfirldcontainer">
	<span class="iconify" data-icon="fa-solid:user"  style="font-size: 16px; color: <?php echo $allthemeoptions['themecolor1']; ?>;"></span>
	<input type="text" name="emailaddress" id="emailaddress" placeholder="Email Address"/>
	</div>
		<div class="loginfirldcontainer">
		<span class="iconify" data-icon="fa-solid:lock"  style="font-size: 16px; color: <?php echo $allthemeoptions['themecolor1']; ?>;"></span>
	<input type="password" name="loginpassword" id="loginpassword" placeholder="Password"/>
	</div>
	<div class="forgotcontainer"><a href="<?php echo get_permalink(154); ?>" id="forgotpassword">Forgot Password</a></div>
	<div class="loginfirldcontainer submitform">
	<input type="button" id="loginbutton" name="Login" value="Login"/>
	</div>
	<div class="registercontainer">
	Don’t have an account? <a href="javascript:void();" id="registerhere"  data-fancybox data-src="#register" >Register here</a>
	</div>
	</form>
	</div>
	</div>
	</div>
	
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/twentytwenty-child/fancybox/jquery.fancybox.min.js"></script>
	<div style="display: none;" id="register">
	<div class="loginboxcontainer">
	<h2>Request Access to Our Portal</h2>
	<div class="loginfirldcontainer">
		<span class="iconify" data-icon="fa-solid:user"  style="font-size: 16px; color: <?php echo $allthemeoptions['themecolor1']; ?>;"></span>
	<input type="text" name="registername" id="registername" placeholder="Name"/>
	</div>
	<div class="loginfirldcontainer">
		<span class="iconify" data-icon="fa-solid:building"  style="font-size: 16px; color: <?php echo $allthemeoptions['themecolor1']; ?>;"></span>
	<input type="text" name="registerlawfirm" id="registerlawfirm" placeholder="Law Firm Name"/>
	</div>
	<div class="loginfirldcontainer">
		<span class="iconify" data-icon="fa-solid:envelope"  style="font-size: 16px; color: <?php echo $allthemeoptions['themecolor1']; ?>;"></span>
	<input type="text" name="registeremail" id="registeremail" placeholder="Email Address"/>
	</div>
		<div class="loginfirldcontainer">
		<span class="iconify" data-icon="fa-solid:phone-square-alt"  style="font-size: 16px; color: <?php echo $allthemeoptions['themecolor1']; ?>;"></span>
	<input type="text" name="registerlawphone" id="registerlawphone" placeholder="Phone Number"/>
	</div>
	<div class="loginfirldcontainer">
		<span class="iconify" data-icon="fa-solid:lock"  style="font-size: 16px; color: <?php echo $allthemeoptions['themecolor1']; ?>;"></span>
	<input type="password" name="registerpass" id="registerpass" placeholder="Password"/>
	</div>
	<div class="loginfirldcontainer">
		<span class="iconify" data-icon="fa-solid:lock"  style="font-size: 16px; color: <?php echo $allthemeoptions['themecolor1']; ?>;"></span>
	<input type="password" name="registerpassre" id="registerpassre" placeholder="Re Password"/>
	</div>
		<div class="loginfirldcontainer submitform">
	<input type="submit" id="registerbutton" name="Register" value="Register"/>
	</div>
	</div>
</div>
<script>
jQuery( document ).ready(function() {
	
var ajax_url = "<?php echo admin_url( 'admin-ajax.php' ); ?>";  
	jQuery("#loginbutton").on('click',function(){
	//console.log("submitted register form");
	jQuery('.formerror').remove();
	
	var emailaddress = jQuery.trim(jQuery("#emailaddress").val());
	var loginpassword = jQuery.trim(jQuery("#loginpassword").val());
	
	if(emailaddress ==""){
		jQuery("#emailaddress").parent('.loginfirldcontainer').after('<p class="formerror">Email Address is required.</p>');
	}
	else if( !isValidEmailAddress( emailaddress ) ){
		jQuery("#emailaddress").parent('.loginfirldcontainer').after('<p class="formerror">Email Address is invalid.</p>');
	}else if(loginpassword ==""){
		jQuery("#loginpassword").parent('.loginfirldcontainer').after('<p class="formerror">Password is required.</p>');
	}else{
		jQuery("#loginform").submit();
	}
	
	
	});
	
jQuery("#registerbutton").on('click',function(){
	//console.log("submitted register form");
	jQuery('.formerror').remove();
	var registername = jQuery.trim(jQuery("#registername").val());
	var registerlawfirm = jQuery.trim(jQuery("#registerlawfirm").val());
	var registeremail = jQuery.trim(jQuery("#registeremail").val());
	var registerlawphone = jQuery.trim(jQuery("#registerlawphone").val());
	var registerpass = jQuery.trim(jQuery("#registerpass").val());
	var registerpassre = jQuery.trim(jQuery("#registerpassre").val());
	
	if(registername ==""){
		jQuery("#registername").parent('.loginfirldcontainer').after('<p class="formerror">Name is required.</p>');
	}else if(registerlawfirm ==""){
		jQuery("#registerlawfirm").parent('.loginfirldcontainer').after('<p class="formerror">Law Firm Name is required.</p>');
	}else if(registeremail ==""){
		jQuery("#registeremail").parent('.loginfirldcontainer').after('<p class="formerror">Email Address is required.</p>');
	}
	else if( !isValidEmailAddress( registeremail ) ){
		jQuery("#registeremail").parent('.loginfirldcontainer').after('<p class="formerror">Email Address is invalid.</p>');
	}else if(registerpass ==""){
		jQuery("#registerpass").parent('.loginfirldcontainer').after('<p class="formerror">Password is required.</p>');
	}else if(registerpassre ==""){
		jQuery("#registerpassre").parent('.loginfirldcontainer').after('<p class="formerror">Re Password is required.</p>');
	}else if(registerpassre != registerpass){
		jQuery("#registerpassre").parent('.loginfirldcontainer').after('<p class="formerror">Password and Re Password must be same.</p>');
	}else{
		
jQuery.post(ajax_url, { 'action': 'custom_usercheck','registeremail': registeremail }, function(response) {
if(response=="yes"){
	jQuery("#registeremail").parent('.loginfirldcontainer').after('<p class="formerror">Email Address is already registered with us.</p>');
}else{
	jQuery("#register .loginboxcontainer").html('<img style="max-width: 150px;margin: auto;"  src="https://media.giphy.com/media/KUXrQAtpRgRlC/giphy.gif"/><div class="registerstarted">Registration Process Started...</div>');

	jQuery.post(ajax_url, { 'action': 'custom_userregister','registername': registername,'registerlawfirm': registerlawfirm, 'registeremail': registeremail, 'registerlawphone': registerlawphone, 'registerpass': registerpass   }, function(response) {
		//alert(response);
		if(response=="yes"){
	jQuery("#register .loginboxcontainer").html('<div class="registersuccessfull">Registered successfully,<br>As soon your account is checked and verified,<br>You will be able to login.<br> We will inform you through Email.<br>Thank You</div>');

		}else{
		jQuery("#register .loginboxcontainer").html('<div class="registerfailed">Registration has failed.</div>');	
		}
	});
	}
}); 
	}
});
});
function isValidEmailAddress(emailAddress) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(emailAddress);
};
</script>
	</body>
	</html>
	<?php
	exit();
}else{
	?>
<header>
<div class="sitecontainer">
<div class="headerwrapper">
<div class="logo"><a href="<?php echo get_bloginfo('url'); ?>"><img src="<?php echo $allthemeoptions['logininnerpageslogo']; ?>" alt="Logo"/></a></div>
<div class="searchandlogout">
<div class="sitesearchbox">
<form method="get" action="" id="searchform">
<span class="iconify" data-icon="fa-solid:search"  style="font-size: 16px; color: <?php echo $allthemeoptions['themecolor2']; ?>;"></span>
<input type="search" id="search-form-1" class="search-field" placeholder="Search" value="<?php echo @$_GET['s']; ?>" name="s">
</form>
</div>
<div class="logoutbox">
<a href="<?php echo get_permalink(79); ?>"><span>Log Out</span> <span class="iconify" data-icon="fa-solid:sign-out-alt"  style="font-size: 16px; color: <?php echo $allthemeoptions['themecolor2']; ?>;"></span></a>
</div>
</div>
</div>
</div>
</header>
<div class="mainbody">
<div class="sitecontainer">
<?php } ?>
		