<div id="openmenuicon"><span class="iconify" style="font-size: 51px; color: <?php echo $allthemeoptions['themecolor2']; ?>;" data-icon="cil:hamburger-menu" ></span></div>
<div class="modulemenucont">
<ul>
<?php
$getallmodules = unserialize(get_option( 'portalmodules' ));
 $allmodulesarray = array('webinars','truckcases','depositions','videogallery','whitepapers','ebooks','form_pages','todaystips');
 if($getallmodules){
 $allmodulesarray = array_diff($allmodulesarray, $getallmodules);
 }
 $allthemeoptions = unserialize(get_option( 'allthemeoptions' ));
 foreach($allmodulesarray as $getallmodule){
	 
 if($getallmodule !="todaystips"){
?>
<li>
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


<?php
if($getallmodule =="webinars"){
	echo 'Webinars';
}
if($getallmodule =="truckcases"){
	echo 'Common Issues in Truck Accident Cases';
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
	echo 'Trucking Litigation Articles';
	}

}
if($getallmodule =="form_pages"){
	echo 'Forms';
}
 ?>

</a>
</li>

<?php
 }
 }
 ?>
</ul>
</div>