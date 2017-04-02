<!-- Front page template to house front page display -->
<!-- Template: Front Page -->

<?php get_header(); ?>

<div id="content" class="expanded">
    <?php get_template_part('parts/featured', 'slider'); ?>

    <div class="row expanded show-for-large content-filters">
        <div class="content-filters-container">
            <?php get_template_part( 'parts/content', 'filter' ); ?>
        </div>
    </div> <!-- End of content filters -->


    <div id="inner-content" class="row">
        <main id="main" class="large-9 medium-12 small-12 columns" role="main">
            <!-- Beginning of FEATURED category articles -->
            <div class="row collapse ">
                <hr class="show-for-medium">
                <br class="show-for-small-only" />
                <?php get_template_part('parts/content', 'category-featured'); ?>
            </div>
            <!-- End of FEATURED category articles -->

            <!-- Beginning of 'industry perspective' category articles -->
            <div class="row collapse">
                <hr>
                <?php get_template_part('parts/content', 'category-industry-perspective'); ?>
                <!-- Bringing in 'industry perspective' category partial to keep code relatively clean -->
            </div>
            <!-- End of second 'industry perspecetive' articles -->

            <!-- CONTENT FILTER FOR MOBILE ONLY -->
            <div class="row expanded show-for-small-only">
                    <?php get_template_part( 'parts/content', 'filter-mobile' ); ?>
            </div>

            <!-- End of content filters -->

            <!-- Beginning of 'your it reality' category articles -->
            <div class="row collapse">
                <hr>
                <?php get_template_part('parts/content', 'category-your-it-reality'); ?>
                <!-- Bringing in 'your IT reality' category partial to keep code relatively clean -->
            </div>
            <!-- End of 'your it reality' category articles -->

            <!-- Beginning of 'level 3 pov' category articles -->
            <div class="row collapse">
                <hr>
                <?php get_template_part('parts/content', 'category-level-3-pov'); ?>
                <!-- Bringing in 'level 3 pov' category partial to keep code relatively clean -->
            </div>
            <!-- End of 'level 3 pov' category articles -->

            <!-- Call in horizontal ad just above the footer fold -->
            <?php get_template_part('parts/baseline-ad'); ?>

        </main> <!-- end #main -->


        <?php get_sidebar(); ?>
    </div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
