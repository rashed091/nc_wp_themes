<?php

// Second parameter passed into get_template_part() is the $name, and should be equivalent to the category name.
// TODO: We could do some kind of validation, but it's not a big deal.

global $top_bar_posts_category;

// WP_Query arguments
$args = array (
	'category_name' => $top_bar_posts_category,
  'posts_per_page' => 5,
);

// The Query
$query = new WP_Query( $args );

// $q = new WP_Query(array(
//   'ignore_sticky_posts' => true,
//   'posts_per_page' => 5,
//   'tax_query' => array(
//      'relation' => 'AND',
//      array(
//       'taxonomy' => 'category',
//       'field' => 'slug',
//       'terms' => $top_bar_posts_category,
//     ),
//     array(
//       'taxonomy' => 'category',
//       'field' => 'slug',
//       'terms' => array('menu-main-navigation-1'),
//     )
//   )
// ));

?>
<section class="top-bar-hover-posts">
  <?php while($query->have_posts()): $query->the_post(); ?>
    <article id="top-bar-post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <a class="top-bar-post-link" href="<?php the_permalink();?>">
        <div class="top-bar-post-image" style="background-image:url(<?php echo the_post_thumbnail_url('medium'); ?>)"></div>
        <h5 class="top-bar-post-title"><?php the_title_limit( 35, '...'); ?></h5>
      </a>
    </article>
  <?php endwhile; ?>

  <?php wp_reset_postdata(); ?>
</section>
