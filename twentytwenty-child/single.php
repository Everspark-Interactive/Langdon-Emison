<?php

 get_header();

$allthemeoptions = unserialize(get_option( 'allthemeoptions' ));
?>
<div class="innerpagecontainer">


<div class="leftsidebar">
<?php require_once('leftmenu.php'); ?>
<div class="archivetypeswidget">
<?php if(is_singular( 'webinars' )){ ?>
<?php //require_once('webinartypes.php'); ?>
<?php } ?>
<?php if(is_singular( 'depositions' )){ ?>
<?php //require_once('depositionstypes.php'); ?>
<?php } ?>
<?php if(is_singular( 'videogallery' )){ ?>
<?php //require_once('videogallerytypes.php'); ?>
<?php } ?>
<?php if(is_singular( 'courtforms' )){ ?>
<?php //require_once('courtdoctypes.php'); ?>
<?php } ?>
<?php if(is_singular( 'whitepapers' )){ ?>
<?php //require_once('whitepapaertypes.php'); ?>
<?php } ?>
<?php if(is_singular( 'guides' )){ ?>
<?php //require_once('guidetypes.php'); ?>
<?php } ?>
<?php if(is_singular( 'ebooks' )){ ?>
<?php //require_once('ebooktypes.php'); ?>
<?php } ?>
<?php if(is_singular( 'form_pages' )){ ?>
<?php //require_once('formtypes.php'); ?>
<?php } ?>
<?php if(is_singular( 'todaystips' )){ ?>
<?php //require_once('recenttips.php'); ?>
<?php } ?>
 </div>
</div>
<div class="rightsidecontent">
<div class="archivetitle"><?php the_title(); ?>
</div>
<div class="archivetitleborder"></div>
	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			?>
			<div class="singlecontentbox singlepostpage">
			

<?php if(is_singular( 'videogallery' )|| is_singular( 'webinars' )){ ?>
<div class="contentbox"><?php echo get_field( "short_description" ); ?></div>
  <link href="https://vjs.zencdn.net/7.8.3/video-js.css" rel="stylesheet" />
<link href="https://unpkg.com/@videojs/themes@1/dist/city/index.css" rel="stylesheet">
  <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
  <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
  <video
    id="my-video"
    class="video-js vjs-theme-city vjs-4-3 vjs-big-play-centered"
    controls
    preload="auto"
     
    poster="<?php echo get_field( "video_thumbnail" ); ?>"
    data-setup=''
  >
    <source src="<?php echo get_field( "video_file" ); ?>" type="video/mp4" />
    
    <p class="vjs-no-js">
      To view this video please enable JavaScript, and consider upgrading to a
      web browser that
      <a href="https://videojs.com/html5-video-support/" target="_blank"
        >supports HTML5 video</a
      >
    </p>
  </video>

  <script src="https://vjs.zencdn.net/7.8.3/video.js"></script>
<?php } ?>
<?php if(is_singular( 'depositions' )){ 
$writtendepo = get_field( "written_depositions" );
?>
<?php if(get_field( "video_depositions" )){ ?><div class="videoembedbox"><?php echo get_field( "video_depositions" ); ?></div><?php } ?>
<?php if($writtendepo){ ?>
<div class="filetypedep">
<?php if(stripos($writtendepo, '.pdf')){?><img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/2020/07/mime_type_pdf.png"/><span class="doctypetitel">PDF Document</span><?php } ?>
<?php if(stripos($writtendepo, '.docx')||stripos($writtendepo, '.doc')){?><img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/2020/07/mime_type_msword.png"/><span class="doctypetitel">Microsoft Word Document</span><?php } ?>
</div>
<div class="downloadfiles"><a href="<?php echo $writtendepo; ?>">Download</a></div><?php } ?>
<?php } ?>
<?php if(is_singular( 'courtforms' )){
$writtendepo = get_field( "or_documentform_link" );
if(get_field( "documentform" )){
$writtendepo = get_field( "documentform" );	
}
	?>
	
	<?php if($writtendepo){ ?>
<div class="filetypedep">
<?php if(stripos($writtendepo, '.pdf')){?><img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/2020/07/mime_type_pdf.png"/><span class="doctypetitel">PDF Document</span><?php } ?>
<?php if(stripos($writtendepo, '.docx')||stripos($writtendepo, '.doc')){?><img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/2020/07/mime_type_msword.png"/><span class="doctypetitel">Microsoft Word Document</span><?php } ?>
</div>
<div class="downloadfiles"><a href="<?php echo $writtendepo; ?>">Download</a></div><?php } ?>

<?php } ?>

<?php if(is_singular( array('whitepapers','guides','ebooks') )){
$thumbnail_image = get_field( "thumbnail_image" );
$writtendepo = get_field( "file_link" );
if(get_field( "file" )){
$writtendepo = get_field( "file" );	
}
	?>
<?php if($thumbnail_image){ ?> <div class="thumbimage withinpapers"><a href="<?php echo get_permalink(); ?>"><img src="<?php echo $thumbnail_image?>"/></a></div>
<?php } ?>
<?php if($writtendepo){ ?>
<div class="filetypedep">
<?php if(stripos($writtendepo, '.pdf')){?><img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/2020/07/mime_type_pdf.png"/><span class="doctypetitel">PDF Document</span><?php } ?>
<?php if(stripos($writtendepo, '.docx')||stripos($writtendepo, '.doc')){?><img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/2020/07/mime_type_msword.png"/><span class="doctypetitel">Microsoft Word Document</span><?php } ?>
</div>
<div class="downloadfiles"><a href="<?php echo $writtendepo; ?>">Download</a></div><?php } ?>
<?php } ?>
<?php if(is_singular( 'form_pages' )){ ?>
<div class="formpagecontent"><?php echo get_field( "gravity_form_shortcode" );	 ?></div>
<?php } ?>
<?php if(is_singular( 'todaystips' )){ ?>
<div class="blogcontents">
<?php the_content(); ?>
</div>
<?php } ?>
</div>
			<?php
		}
	}

	?>

</div></div>
<?php
get_footer();
 ?>