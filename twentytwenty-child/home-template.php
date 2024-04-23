<?php
/**
 * Template Name: Home Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
 get_header();
 $getallmodules = unserialize(get_option( 'portalmodules' ));
// print_r($getallmodules);
 //echo 'yes';
 $allmodulesarray = array('webinars','truckcases','depositions','videogallery','whitepapers','ebooks','form_pages','todaystips');
 if($getallmodules){
 $allmodulesarray = array_diff($allmodulesarray, $getallmodules);
 }
 $allthemeoptions = unserialize(get_option( 'allthemeoptions' ));
 foreach($allmodulesarray as $getallmodule){
	 
 if($getallmodule !="todaystips"){
?>

<div class="moduleboxes">

<div class="moduleboxcontainer">
<a href="<?php if($getallmodule =="webinars"){
	echo get_bloginfo('url').'/webinars';
}
if($getallmodule =="truckcases"){
	echo get_bloginfo('url').'/truckcases';
}
if($getallmodule =="depositions"){
	echo get_bloginfo('url').'/depositions';
}
if($getallmodule =="videogallery"){
	echo get_bloginfo('url').'/video-depositions';
}
if($getallmodule =="whitepapers"){
	echo get_bloginfo('url').'/discovery';
}
if($getallmodule =="ebooks"){
	echo get_bloginfo('url').'/trucking-litigation-articles';
}
if($getallmodule =="form_pages"){
	echo get_bloginfo('url').'/forms';
}?>">
<div class="moduleboxcontainericonholder">
<div class="iconholderm">
<img src="<?php
if($getallmodule =="webinars"){
	echo $allthemeoptions['webinaricon'];
}
if($getallmodule =="truckcases"){
	echo $allthemeoptions['truckcasesicon'];
}
if($getallmodule =="depositions"){
	echo $allthemeoptions['depositionsicon'];
}
if($getallmodule =="videogallery"){
	echo $allthemeoptions['videogalleryicon'];
}
if($getallmodule =="whitepapers"){
	echo $allthemeoptions['whitepapersicon'];
}
if($getallmodule =="ebooks"){
	echo $allthemeoptions['ebooksicon'];
}
if($getallmodule =="form_pages"){
	echo $allthemeoptions['formicon'];
}
 ?>"/>
</div>
</div>
<div class="moduleboxtitle">
<?php
if($getallmodule =="webinars"){
	echo 'Webinars';
}
if($getallmodule =="depositions"){
	echo 'Depositions';
}
if($getallmodule =="videogallery"){
	echo 'Video Depositions';
}
if($getallmodule =="whitepapers"){
	if(in_array('guides', $getallmodules) && in_array('ebooks', $getallmodules)){
	echo 'Discovery';	
	}else{
	echo 'Discovery';
	}
}

if($getallmodule =="ebooks"){
	if(in_array('guides', $getallmodules) && in_array('whitepapers', $getallmodules)){
	
	echo 'Discovery';	
	}else{
	echo 'Our Trucking Litigation Articles';
	}

}
if($getallmodule =="truckcases"){
	echo 'Common Issues in Truck Accident Cases';
}
if($getallmodule =="form_pages"){
	echo 'Forms';
}
 ?>
</div>
</a>
</div>

</div>


<?php

 }
 }?>
 <?php
 if($allthemeoptions['todaystips']>0){
	 ?>

	 <?php
 }
get_footer();
 ?>