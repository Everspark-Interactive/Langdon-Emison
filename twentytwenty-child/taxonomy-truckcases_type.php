<?php

 get_header();

$allthemeoptions = unserialize(get_option( 'allthemeoptions' ));
?>
<div class="innerpagecontainer">

<div class="archivetitle"><?php single_term_title( '' ); ?>
</div>
<div class="archivetitleborder"></div>
<div class="leftsidebar">
<?php require_once('leftmenu.php'); ?>
<div class="archivetypeswidget">
<?php require_once('truckcasestypes.php'); ?>
 </div>
</div>
<div class="rightsidecontent">
	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			?>
			<div class="singlecontentbox">
<h2 class="itemtitle"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
<div class="dateadded"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time></div>
<div class="thumbimage"><a href="<?php echo get_permalink(); ?>"><img src="<?php echo get_field( "video_thumbnail" ); ?>"/></a></div>
</div>
			<?php
		}
	}

	?>

</div></div>
<?php
get_footer();
 ?>