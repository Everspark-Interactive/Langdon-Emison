<?php
/**
 * Template Name: No Login Width Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */


?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">
       <link href="https://fonts.googleapis.com/css2?family=Quattrocento+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
		<?php wp_head(); $allthemeoptions = unserialize(get_option( 'allthemeoptions' )); ?>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
<style>
body{
	    background: <?php echo $allthemeoptions['themecolor1']; ?>;
    font-family: 'Quattrocento Sans', sans-serif;
    width: 100%;
}
.wrapperlogin{
	    width: 90%;
    max-width: 1100px;
    margin: auto;
}
.wrapperlogin2{
	background:<?php echo $allthemeoptions['themecolor2']; ?>;
    padding: 70px;
    margin-top: 90px;
	margin-bottom: 90px;
}
.wrapperlogin header{
	    padding: 0 !important;
}
.wrapperlogin header h1{
	    color: <?php echo $allthemeoptions['textcolor1']; ?>;
    font-family: 'Quattrocento Sans', sans-serif;
    font-weight: 700;
    font-size: 26px;
    text-transform: none;
    letter-spacing: -1px;
    margin-bottom: 10px;
}
.wrapperlogin .post-inner{
	    padding-top: 0;
}
.wrapperlogin .post-inner fieldset{
	    border: 0;
		padding: 0;
    padding-top: 10px;
}
.wrapperlogin .post-inner fieldset legend{
	display: none;
}
.wrapperlogin .post-inner fieldset .lostpassword-submit{
	    margin-bottom: 0;
}
.wrapperlogin .post-inner fieldset p{
	    font-family: 'Quattrocento Sans', sans-serif;
    font-size: 18px;
    font-weight: 400;
    margin-bottom: 20px;
    color: <?php echo $allthemeoptions['themecolor1']; ?>;
}
.wrapperlogin .post-inner fieldset p.no-margin{
	margin-bottom: 20px;
}
.wrapperlogin .post-inner fieldset label{
	font-size: 15px;
    color: <?php echo $allthemeoptions['textcolor1']; ?>;
    font-family: 'Quattrocento Sans', sans-serif;
    margin-bottom: 10px;
}
.wrapperlogin .post-inner fieldset p input{
	        border-radius: 7px;
    font-size: 15px;
    color: <?php echo $allthemeoptions['textcolor1']; ?>;
    font-family: 'Quattrocento Sans', sans-serif;
    padding-left: 25px;
    padding-right: 25px;
    border-color: #b3b0b0bd;
    margin-bottom: 10px;
    width: 100%;
    max-width: none;

}
.wrapperlogin .post-inner fieldset p input:focus, .wrapperlogin .post-inner fieldset p input:active{
	border-radius: 7px;
	box-shadow:none;
	border: 1px solid <?php echo $allthemeoptions['themecolor1']; ?>;
	outline:none;
	
}
.wrapperlogin .post-inner fieldset button{
	    color: <?php echo $allthemeoptions['textcolor2']; ?>;
    font-size: 16px;
    font-weight: 400;
    text-transform: none;
    width: 100%;
    padding-top: 15px;
    padding-bottom: 14px;
    padding-left: 0;
    padding-right: 0;
    background: <?php echo $allthemeoptions['themecolor1']; ?>;
    text-decoration: none;
	border-radius: 7px;
}
.wrapperlogin .post-inner fieldset button:focus, .wrapperlogin .post-inner fieldset button:active{outline:none;}
.darklogo img{
	    margin: auto;
    margin-bottom: 20px;
    max-width: 218px;
}
.wrapperlogin .som-password-error-message, .wrapperlogin .som-password-sent-message {
    background-color: transparent;
    border-color: transparent;
    color: red;
    text-align: center;
    margin-bottom: 0;
}
 @media only screen and (max-width: 980px) {
  ..wrapperlogin2{
	  margin-top: 50px;    margin-bottom: 50px;
  }
  .wrapperlogin .post-inner fieldset p{
	  text-align:center;
  }
  .wrapperlogin .post-inner fieldset label{
	  text-align:left;
  }
 }
  @media only screen and (max-width: 420px) {
	.wrapperlogin2 {
   
    padding: 30px;
    margin-top: 30px;
    margin-bottom: 30px;
}  
#password-lost-form-wrap{
	width:100%;
}
  }
</style>
</head>
	<body <?php body_class(); ?>>
		
	<div class="wrapperlogin">
<div class="wrapperlogin2">
<div class="darklogo"><img src="<?php echo $allthemeoptions['loginpagelogo']; ?>"/></div>
	
	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		}
	}

	?>
</div>
</div><!-- #site-content -->

<?php wp_footer(); 
if(!@$_GET['somresetpass']){
?>
<script>
jQuery( document ).ready(function() {
	jQuery(".wrapperlogin .post-inner fieldset label").html('Email Address');
});
	</script>
<?php } ?>
	</body>
</html>
