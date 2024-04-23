<h3>Video Gallery Types</h3>
<?php
$terms = get_terms( array(
    'taxonomy' => 'video_type',
    'hide_empty' => false,
) );
echo '<ul>';
foreach($terms as $term){
echo '<li><a href="'.get_term_link($term->slug, 'video_type').'">'.$term->name.'</a></li>';	
}
echo '</ul>';
 ?>