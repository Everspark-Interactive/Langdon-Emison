<?php

 get_header();

$allthemeoptions = unserialize(get_option( 'allthemeoptions' ));
?>
<div class="innerpagecontainer">

<div class="archivetitle">Depositions
</div>
<div class="archivetitleborder"></div>
<div class="leftsidebar">
<?php require_once('leftmenu.php'); ?>
<div class="archivetypeswidget">
<?php //require_once('depositionstypes.php'); ?>
 </div>
</div>
<div class="rightsidecontent">
	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();
$videothumb = get_field( "thumbnail_image" );
$videothumb =  $videothumb['sizes']['medium'];
$writtendepo = get_field( "written_depositions" );
			?>
			<div class="singlecontentbox">
<?php if($videothumb){ ?> <a href="<?php echo $writtendepo; ?>"   title="<?php the_title(); ?>"><div class="thumbimage" style="background:url('<?php echo $videothumb?>'); height:200px;">&nbsp;</div></a>
<?php } ?>
<h2 class="itemtitle"><a href="<?php echo $writtendepo; ?>"   title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<div class="dateadded"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time></div>


<?php if($writtendepo){ ?>
<a href="<?php echo $writtendepo; ?>"   title="<?php the_title(); ?>">
<div class="filetypedep">
<?php if(stripos($writtendepo, '.pdf')){?><img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/2020/07/mime_type_pdf.png"/><span class="doctypetitel">PDF Document</span><?php } ?>
<?php if(stripos($writtendepo, '.docx')||stripos($writtendepo, '.doc')){?><img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/2020/07/mime_type_msword.png"/><span class="doctypetitel">Microsoft Word Document</span><?php } ?>
</div></a>
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
<div class="downloadfiles"><a href="<?php echo $writtendepo; ?>"   title="<?php the_title(); ?>">Download</a></div><?php } ?>
</div>
			<?php
		}
	}

	?>

</div></div>
<?php
get_footer();
 ?>