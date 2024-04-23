<?php

 get_header();

$allthemeoptions = unserialize(get_option( 'allthemeoptions' ));
?>
<div class="innerpagecontainer">

<div class="archivetitle">Forms
</div>
<div class="archivetitleborder"></div>
<div class="leftsidebar">
<?php require_once('leftmenu.php'); ?>
<div class="archivetypeswidget">
<?php //require_once('formtypes.php'); ?>
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
</div>
			<?php
		}
	}

	?>

</div></div>
<?php
get_footer();
 ?>