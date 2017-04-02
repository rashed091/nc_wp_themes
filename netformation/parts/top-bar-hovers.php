<?php
global $top_bar_posts_category;

$category_slugs = array('industry-perspectives', 'your-it-reality', 'level-3-pov');

foreach ($category_slugs as $category_slug):
    //$category_url = esc_url( get_term_link( $category_slug, 'category' ) );

    ?>
    <section class="top-bar-hover <?php echo $category_slug; ?>">
        <div class="top-bar-hover-container">
            <?php $top_bar_posts_category = $category_slug;
            get_template_part('parts/top-bar-posts') ?>
        </div>
    </section>
<?php endforeach; ?>
