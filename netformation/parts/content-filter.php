<?php
/**
 * Template Part: filter article filter
 * Description: Template fragment for the filter articles
 *
 */
?>

<!-- Serves up search results template -->

<!-- article filter-->
<div class="content-filter-wrapper clearfix row">

    <div class="float-right large-9 large-offset-3"> <!-- give a 9 column span, with an offset of 3 so to show in all browsers -->
      <form>
            <div class="float-left"><h5>CONTENT FILTERS</h5></div>

            <div class="float-left form-items">
                <div class="form-item">
                    <select name="category_name" id="categories"> <!-- categories option -->
                        <option value=''>CATEGORY</option>
                        <?php
                        $categories = get_categories(array(
                            'orderby' => 'modified',
                            'exclude' => array(1, 6, 7, 8), //exclude uncategorized, carousel, rightrail, featured
                            'hide_empty' => 0
                        ));

                        foreach ($categories as $category) {
                            ?>
                            <option value=<?php echo $category->slug; ?>><?php echo $category->name; ?></option>
                        <?php } ?>
                    </select>
                </div> <!-- End first content box -->
                <div class="form-item">
                    <select name="tag" id="tags"> <!-- Tags Option -->
                    <option value=''>TAGS</option>
                        <?php
                        $tags = get_tags(array(
                            'orderby' => 'name',
                            'hide_empty' => 0
                        ));

                        foreach ($tags as $tag) {
                            $tagName = $tag->name;
                            if (!in_array($tagName, array('Article', 'News', 'Video', 'Event'))) {
                                ?>
                                <option value=<?php echo $tag->slug; ?>><?php echo $tagName; ?></option>
                            <?php }
                        } ?>
                    </select>
                </div>
                <div class="form-item">
                    <select name="date" id="date"> <!-- Date Option -->
                        <option value='0'>DATE</option>
                        <?php wp_get_archives('type=monthly&format=option'); ?>
                    </select>
                </div>
                <div class="form-item">
                  <span id="filterPosts" class="button postfix search-submit button" style="height: 39px"
                         value="APPLY FILTERS">APPLY FILTERS</span>
                </div>
            </div>

        </form>
    </div>

</div>
