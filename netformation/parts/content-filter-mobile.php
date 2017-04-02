<?php
/**
 * Template Part: filter article filter
 * Description: Template fragment for the filter articles
 *
 */
?>

<!-- Mobile Version Of Content Filter -->

<!-- article filter-->
<div class="text-center hideshow hideShowFilter">
  <h5>CONTENT FILTERS</h5>
</div>

<div class="mobileContentFilterContainer row expanded" style="display:none;background-color: #fafafb; padding: 10px 20px; margin: 0 auto;">
  <div class="row">
    <form id="mobileContentFilter">
      <div class="small-10 small-offset-1"> <!-- give a 9 column span, with an offset of 3 so to show in all browsers -->
        <div class="form-item">
            <select name="category_name" id="categories"> <!-- categories option -->
                        <option disabled selected>CATEGORY</option>
                        <?php
                        $categories = get_categories(array(
                            'orderby' => 'modified',
                            'exclude' => array(1, 6, 7, 8), //exclude uncategorized, carousel, rightrail, featured
                            'hide_empty' => 0,
                            'description__like' => $current_language
                        ));

                        foreach ($categories as $category) {
                            ?>
                            <option value=<?php echo $category->slug; ?>><?php echo $category->name; ?></option>
                        <?php } ?>
              </select>
          </div> <!-- End first content box -->
        </div>

        <div class="small-10 small-offset-1">
              <div class="form-item">
                        <select name="tag" id="tags"> <!-- Tags Option -->
                            <option disabled selected>TAGS</option>
                            <?php
                            $tags = get_tags(array(
                                'orderby' => 'name',
                                'hide_empty' => 0,
                                'description__like' => $current_language
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
          </div>

          <div class="small-10 small-offset-1">
              <div class="form-item">
                        <select name="date" id="date"> <!-- Date Option -->
                            <option disabled selected>DATE</option>
                            <?php wp_get_archives('type=monthly&format=option'); ?>
                        </select>
              </div>
          </div>

          <div class="small-5 small-offset-4">
              <div class="form-item">
                  <span id="filterPostsMobile" class="button postfix search-submit button" style="height: 39px"
                             value="APPLY FILTERS">APPLY FILTERS</span>
              </div>
          </div>
    </form>
  </div>
</div>
