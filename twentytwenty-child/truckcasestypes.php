<h3>Issues in Truck Accident Cases Types</h3>
<?php
$terms = get_terms( array(
    'taxonomy' => 'truckcases_type',
    'hide_empty' => false,
) );
echo '<ul>';
foreach($terms as $term){
echo '<li><a href="'.get_term_link($term->slug, 'truckcases_type').'">'.$term->name.'</a></li>';	
}
echo '</ul>';
 ?>