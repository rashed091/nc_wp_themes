<div class="most-popular">
    <h5 class="sidebar-title">Most Popular</h5>
    <ol class="sidebar-list">
        <?php
        $args = array(
            'post_type' => 'post',
            'order' => 'DSC',
            'posts_per_page' => 3,
            'category_name' => 'right-rail'
        );
        $loop = new WP_Query($args);
        $number = 1;
        while ($loop->have_posts()) : $loop->the_post();

            ?>

            <li>
                <div class="image">
                    <a href="<?php echo the_permalink(); ?>">
                        <?php echo the_post_thumbnail('thumbnail'); ?>
                    </a>
                    <span class="number"><?php echo $number; ?></span>
                </div>
                <div class="text">
                    <p class="category"><?php exclude_post_categories("1,6,7,8"); ?></p>
                    <a href="<?php echo the_permalink(); ?>">
                        <h6 style="font-family: DIN Next LT PRO Bold; color: #000000"><?php the_title_limit( 35, '...'); ?></h6>
                    </a>
                </div>
            </li>

        <?php
            $number = $number + 1;
        endwhile;
        ?>
    </ol>
</div>
