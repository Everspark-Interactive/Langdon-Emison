<?php

 get_header();

$allthemeoptions = unserialize(get_option( 'allthemeoptions' ));
?>
<div class="innerpagecontainer">

<div class="archivetitle">
<?php single_term_title( '' ); ?>
</div>
<div class="archivetitleborder"></div>
<div class="leftsidebar">
<?php require_once('leftmenu.php'); ?>
<div class="archivetypeswidget">
<?php require_once('ebooktypes.php'); ?>
 </div>
</div>
<div class="rightsidecontent">
	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();
$thumbnail_image = get_field( "thumbnail_image" );
$writtendepo = get_field( "file_link" );
if(get_field( "file" )){
$writtendepo = get_field( "file" );	
}

			?>
			<div class="singlecontentbox">
<h2 class="itemtitle"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
<div class="dateadded"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time></div>

<?php if($thumbnail_image){ ?> <div class="thumbimage withinpapers"><a href="<?php echo get_permalink(); ?>"><img src="<?php echo $thumbnail_image?>"/></a></div>
<?php } ?>
<?php if($writtendepo){ ?>
<div class="filetypedep">
<?php if(stripos($writtendepo, '.pdf')){?><img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/2020/07/mime_type_pdf.png"/><span class="doctypetitel">PDF Document</span><?php } ?>
<?php if(stripos($writtendepo, '.docx')||stripos($writtendepo, '.doc')){?><img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/2020/07/mime_type_msword.png"/><span class="doctypetitel">Microsoft Word Document</span><?php } ?>
</div>
<div class="downloadfiles"><a href="<?php echo $writtendepo; ?>">Download</a></div><?php } ?>
</div>
			<?php
		}
	}

	?>

</div></div>
<?php
get_footer();
 ?>