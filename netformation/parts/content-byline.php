<?php
$newscred_source = get_post_meta( $post->ID, 'nc-source', true);
$newscred_author = get_post_meta( $post->ID, 'nc-author', true);
?> <!-- fetching newscred custom fields -->

<p class="byline">
	<!-- Print author and publisher if both fields are not empty -->
	<!-- Else if either of the fields are empty, just print the other -->
	<?php if(!empty($newscred_author) && (!empty($newscred_source))) { ?>
		<?php echo $newscred_author."		".'&#8226;'."		".$newscred_source ?>
	<?php } else if(empty($newscred_author)) { ?>
		<?php echo $newscred_source ?>
	<?php } else echo $newscred_author?>

</p>
