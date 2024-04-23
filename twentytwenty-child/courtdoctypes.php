<h3>Court Document/Form Types</h3>
<?php
$terms = get_terms( array(
    'taxonomy' => 'document_type',
    'hide_empty' => false,
) );
echo '<ul>';
foreach($terms as $term){
echo '<li><a href="'.get_term_link($term->slug, 'document_type').'">'.$term->name.'</a></li>';	
}
echo '</ul>';
 ?>