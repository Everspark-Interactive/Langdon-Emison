<h3>Recent Tips</h3>
<?php
    $recent_posts = wp_get_recent_posts(array('post_type'=>'todaystips'));
	echo '<ul>';
    foreach( $recent_posts as $recent ){
        echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="'.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
    }
	echo '</ul>';
?>
