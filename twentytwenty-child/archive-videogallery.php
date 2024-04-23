<?php

 get_header();

$allthemeoptions = unserialize(get_option( 'allthemeoptions' ));
?>
<style type="text/css">
	.rightsidecontent .singlecontentbox.videogallery {
    height: 340px !important;
}
.videothumbimage img {
    min-height: 183px !important;
}
</style>
<div class="innerpagecontainer">

<div class="archivetitle">Video Depositions
</div>
<div class="archivetitleborder"></div>
<div class="leftsidebar">
<?php require_once('leftmenu.php'); ?>
<div class="archivetypeswidget">
<?php //require_once('videogallerytypes.php'); ?>
 </div>
</div>
<div class="rightsidecontent">
	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			?>
			<div class="singlecontentbox videogallery">
			<div class="videothumbimage"><a href="<?php echo get_permalink(); ?>"   title="<?php the_title(); ?>"><img src="<?php echo get_field( "video_thumbnail" ); ?>"/></a></div>
<h2 class="itemtitle"><a href="<?php echo get_permalink(); ?>"   title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
	<?php	
					   $alltags=get_the_tags() ;
					   if($alltags){
						   	$str='';
						   echo '<div class="tagscnt">';
					   foreach($alltags as $tag)
{
    if (strlen($tag->name) > 30){
		$str = substr($tag->name, 0, 30) . ' ...';
    echo '<a href="' . get_tag_link($tag->term_id) . '" title="'.$tag->name.'">' . $str . '</a> <br/> ';
    }else{
		echo '<a href="' . get_tag_link($tag->term_id) . '" title="'.$tag->name.'">' .$tag->name. '</a> <br/> '; 
	}
}
						   echo '</div>';
					   }			   
					   ?>
<div class="downloadfiles"><a   title="<?php the_title(); ?>" href="<?php echo get_permalink(); ?>">View</a></div>

</div>
			<?php
		}
	}

	?>

</div></div>
<?php
get_footer();
 ?>