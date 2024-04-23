<div id="openmenuicon"><span class="iconify" style="font-size: 51px; color: <?php echo $allthemeoptions['themecolor2']; ?>;" data-icon="cil:hamburger-menu" ></span></div>
<div class="modulemenucont">
<ul>
<?php
$getallmodules = unserialize(get_option( 'portalmodules' ));
 $allmodulesarray = array('webinars','depositions','videogallery','courtforms','whitepapers','guides','ebooks','form_pages','todaystips');
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
if($getallmodule =="depositions"){
	echo get_bloginfo('url').'/depositions';
}
if($getallmodule =="videogallery"){
	echo get_bloginfo('url').'/video-depositions';
}
if($getallmodule =="courtforms"){
	echo get_bloginfo('url').'/commercial-transportation-experts';
}
if($getallmodule =="whitepapers"){
	echo get_bloginfo('url').'/discovery';
}
if($getallmodule =="guides"){
	echo get_bloginfo('url').'/using-focus-groups-in-a-trucking-case';
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
if($getallmodule =="depositions"){
	echo 'Depositions';
}
if($getallmodule =="videogallery"){
	echo 'Video Depositions';
}
if($getallmodule =="courtforms"){
	echo 'Commercial Transportation Experts';
}
if($getallmodule =="whitepapers"){
	if(in_array('guides', $getallmodules) && in_array('ebooks', $getallmodules)){
	echo 'Discovery';	
	}else{
	echo 'Discovery';
	}
}
if($getallmodule =="guides"){
	
	if(in_array('ebooks', $getallmodules) && in_array('whitepapers', $getallmodules)){
	echo 'Discovery';	
	}else{
	echo 'Using Focus Groups in a Trucking Case';
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