<div class="large-3 medium-12 small-12 columns hide-for-small-only" id="test-eq"  > <!-- Beginning of the individual post output -->
    <article class="featuredPost" id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article"  data-equalizer-watch>
      <a href="<?php the_permalink() ?>">
        <div class="featured-image" style="background-image: url(<?php the_post_thumbnail_url('large'); ?>);" itemprop="articleBody"></div> <!-- end article image -->
      </a>
      <header class="feature-article-header" >
        <h5  class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title_limit( 43, '...'); ?></a></h5>
        <?php get_template_part( 'parts/content', 'byline' ); ?>
      </header> <!-- end article header -->
        <?php get_template_part( 'parts/article-share' ); ?>
    </article> <!-- end article -->
  </div> <!-- End of the complete post output -->
