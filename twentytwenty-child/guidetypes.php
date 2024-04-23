<h3>Guide Types</h3>
<?php
$terms = get_terms( array(
    'taxonomy' => 'guide_type',
    'hide_empty' => false,
) );
echo '<ul>';
foreach($terms as $term){
echo '<li><a href="'.get_term_link($term->slug, 'guide_type').'">'.$term->name.'</a></li>';	
}
echo '</ul>';
 ?>