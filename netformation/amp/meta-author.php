<?php
$nc_author = get_post_meta(get_the_id(), 'nc-author', 1); // Pull in the author custom-field
$nc_source = get_post_meta(get_the_id(), 'nc-source', 1); // Pull in the source custom-field ``` // Check if both the nc-author & nc-source field aren't empty, then assign it to $license string
?>

<span><?php echo $nc_author . ' &bull; '. $nc_source; ?></span>
