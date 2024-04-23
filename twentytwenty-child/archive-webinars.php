<?php

 get_header();

$allthemeoptions = unserialize(get_option( 'allthemeoptions' ));
?>
<div class="innerpagecontainer">

<div class="archivetitle">Webinars
</div>
<div class="archivetitleborder"></div>
<div class="leftsidebar">
<?php require_once('leftmenu.php'); ?>
<div class="archivetypeswidget">
<?php //require_once('webinartypes.php'); ?>
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
						   echo '<div class="tagscnt">';
					   foreach($alltags as $tag)
{
    echo '<a href="' . get_tag_link($tag->term_id) . '" title="'.$tag->name.'">' . $tag->name . '</a> <br/> ';
}
						   echo '</div>';
					   }			   
					   ?>
<div class="downloadfiles"><a href="<?php echo get_permalink(); ?>"   title="<?php the_title(); ?>">View</a></div>

</div>
			<?php
		}
	}

	?>

</div></div>
<?php
get_footer();
 ?>