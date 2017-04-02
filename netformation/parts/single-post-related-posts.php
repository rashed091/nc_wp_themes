<h3>Related posts</h3>
<?php
  $orig_post = $post;
  global $post;
  $tags = wp_get_post_tags($post->ID);
   
  if ($tags) {
  $tag_ids = array();
  console.log($tags);
  foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
  $args=array(
  'post__not_in' => array($post->ID),
  'posts_per_page'=>2, // Number of related posts to display.
  'caller_get_posts'=>1
  );
   
  $my_query = new wp_query( $args );
 
  while( $my_query->have_posts() ) {
    $my_query->the_post();
  ?>

    <?php the_post_thumbnail(array(150,100)); ?><br />
    <?php the_title(); ?>
 
   
  <? }
  }
  $post = $orig_post;
  wp_reset_query();
  ?>
