<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
 $allthemeoptions = unserialize(get_option( 'allthemeoptions' ));
?>
		</div></div>
		<footer>
		<div class="sitecontainer">
		<div class="copyrightbox"><?php echo $allthemeoptions['copyrighttext']; ?></div>
		<div class="socialiconbox">
		<div class="extcontainer">
		<span class="facebook"><a href="<?php echo $allthemeoptions['facebooklink']; ?>"><img src="<?php echo $allthemeoptions['facebookiconlink']; ?>"/></a></span>
		<span class="twitter"><a href="<?php echo $allthemeoptions['twitterlink']; ?>"><img src="<?php echo $allthemeoptions['twittericonlink']; ?>"/></a></span>
		<span class="instagram"><a href="<?php echo $allthemeoptions['instagramlink']; ?>"><img src="<?php echo $allthemeoptions['instagramiconlink']; ?>"/></a></span>
		<span class="linkedin"><a href="<?php echo $allthemeoptions['linkedinlink']; ?>"><img src="<?php echo $allthemeoptions['linkediniconlink']; ?>"/></a></span>
		</div>
		</div>
		</div>
		</footer>
<script>
jQuery( document ).ready(function() {
jQuery(".leftsidebar #openmenuicon").click(function(){
	jQuery('.leftsidebar .modulemenucont').slideToggle();
});

jQuery(".headerwrapper .searchandlogout #searchform").on('click','svg',function(){
	jQuery("#searchform").submit();
});


});
</script>
		<?php wp_footer(); ?>

	</body>
</html>
