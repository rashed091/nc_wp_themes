<?php

// WP_Query For Transform Category Posts

//get category info
$cat = get_category_by_path(get_query_var('category_name'),false);
$current = $cat->cat_ID;
$current_name = $cat->cat_name;

$args = array (
	'cat'            => $current,
  'post_type'      => 'post',
  'posts_per_page' => '3',
  'order'          => 'DESC',
);

// The Query
$category_posts_query = new WP_Query( $args );

?>

<div class="slider show-for-large">

</div>

<div class="row featured-articles">
    <div class="slider slider-nav show-for-large" style="height:340px; width: 100%;" data-equalizer>
        <?php while ($category_posts_query->have_posts()) : $category_posts_query->the_post(); ?>
            <?php get_template_part('parts/slider', 'featured-boxes-category'); ?>
        <?php endwhile ?>
        <?php wp_reset_query(); ?>
    </div>
</div>

<script>
   var ifCategoryPage = true;
</script>
