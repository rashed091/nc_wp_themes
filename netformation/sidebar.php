<?php $nc_source = get_post_meta(get_the_id($post->ID), 'nc-source', 1) ?>
<?php $nc_author = get_post_meta(get_the_id($post->ID), 'nc-author', 1) ?>
<div id="sidebar1" class="sidebar large-3 medium-12 small-12 columns" role="complementary">
  <!-- Show author box conditionally -->
  <?php if(is_single()) { ?>

    <?php if($nc_source == 'Level 3 Communications' && $nc_author != 'Level 3' && $nc_author != 'Adam Saenger') { ?>
      <?php dynamic_sidebar( 'sidebar-1' ); ?>

  <?php }}?>
  <!-- Pull in Search Forms -->
  <?php get_template_part('parts/search-form') ?>
  <!-- Pull in Most Popular Posts -->
  <?php get_template_part('parts/most-popular-posts') ?>
  <!-- Pull in newsletter subscription form -->
  <?php get_template_part('parts/content-newsletter-form-sidebar') ?>
  <!-- Pull in sidebar advertisement -->
  <?php get_template_part('parts/sidebar-ad') ?>

</div> <!-- End of Sidebar -->
