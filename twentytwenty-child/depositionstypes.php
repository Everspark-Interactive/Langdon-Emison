<h3>Deposition Types</h3>
<?php
$terms = get_terms( array(
    'taxonomy' => 'deposition_type',
    'hide_empty' => false,
) );
echo '<ul>';
foreach($terms as $term){
echo '<li><a href="'.get_term_link($term->slug, 'deposition_type').'">'.$term->name.'</a></li>';	
}
echo '</ul>';
 ?>