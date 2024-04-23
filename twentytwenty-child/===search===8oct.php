<?php

 get_header();

$allthemeoptions = unserialize(get_option( 'allthemeoptions' ));
?>
<div class="innerpagecontainer">

<div class="archivetitle"><?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?>
</div>
<div class="archivetitleborder"></div>
<div class="leftsidebar">
<?php require_once('leftmenu.php'); ?>
<div class="archivetypeswidget">
<?php //require_once('webinartypes.php'); ?>
<?php //require_once('depositionstypes.php'); ?>
<?php //require_once('videogallerytypes.php'); ?>
 </div>
</div>
<div class="rightsidecontent">
	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			$posttype = get_post_type();
			?>
			
			
	<?php if($posttype == 'webinars' || $posttype == 'videogallery'){ ?>
			<div class="singlecontentbox videogallery">
			<div class="videothumbimage"><a href="<?php echo get_permalink(); ?>"  title="<?php the_title(); ?>"><img src="<?php echo get_field( "video_thumbnail" ); ?>"/></a></div>
<h2 class="itemtitle"><a href="<?php echo get_permalink(); ?>"   title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
	<?php	
					   $alltags=get_the_tags() ;
					   if($alltags){
						   echo '<div class="tagscnt">';
					   foreach($alltags as $tag)
{
    echo '<a href="' . get_tag_link($tag->term_id) . '" title="'.$tag->name.'">' . $tag->name . '</a>';
}
						   echo '</div>';
					   }			   
					   ?>
<div class="downloadfiles"><a   title="<?php the_title(); ?>" href="<?php echo get_permalink(); ?>">View</a></div>

</div>
<?php
	}else{
		$videothumb = get_field( "thumbnail_image" );
$videothumb = $videothumb =  $videothumb['sizes']['medium'];
if(get_field( "file" )){
$writtendepo = get_field( "file" );	
}
if($posttype=="courtforms"){
$writtendepo = get_field( "documentform" );		
}
if($posttype=="depositions"){
$writtendepo = get_field( "written_depositions" );		
}
 ?>	
 <div class="singlecontentbox">
 <?php if($videothumb){ ?> <a href="<?php echo $writtendepo; ?>"   title="<?php the_title(); ?>"><div class="thumbimage" style="background:url('<?php echo $videothumb?>'); height:200px;">&nbsp;</div></a>
<?php } ?>
<h2 class="itemtitle"><a href="<?php echo $writtendepo; ?>"   title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<div class="dateadded"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time></div>


<?php if($writtendepo){ ?>
<a href="<?php echo $writtendepo; ?>"   title="<?php the_title(); ?>">
<div class="filetypedep">
<?php if(stripos($writtendepo, '.ppt')){?><img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/2020/07/powerpoint-logo-png-clip-art.png"/><span class="doctypetitel">PPT Document</span><?php } ?>

<?php if(stripos($writtendepo, '.pdf')){?><img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/2020/07/mime_type_pdf.png"/><span class="doctypetitel">PDF Document</span><?php } ?>
<?php if(stripos($writtendepo, '.docx')||stripos($writtendepo, '.doc')){?><img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/2020/07/mime_type_msword.png"/><span class="doctypetitel">Microsoft Word Document</span><?php } ?>
</div></a>
	<?php	
					   $alltags=get_the_tags() ;
					   if($alltags){
						   echo '<div class="tagscnt">';
					   foreach($alltags as $tag)
{
    echo '<a href="' . get_tag_link($tag->term_id) . '" title="'.$tag->name.'">' . $tag->name . '</a>';
}
						   echo '</div>';
					   }			   
					   ?>
<div class="downloadfiles"><a href="<?php echo $writtendepo; ?>"   title="<?php the_title(); ?>">Download</a></div><?php } ?>
</div>
	<?php } ?>




			<?php
		}
	}

	?>

</div></div>
<?php
get_footer();
 ?>