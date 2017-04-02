<?php
// Theme support options
require_once(get_template_directory().'/assets/functions/theme-support.php');

// WP Head and other cleanup functions
require_once(get_template_directory().'/assets/functions/cleanup.php');

// Register scripts and stylesheets
require_once(get_template_directory().'/assets/functions/enqueue-scripts.php');

// Register custom menus and menu walkers
require_once(get_template_directory().'/assets/functions/menu.php');

// Register sidebars/widget areas
require_once(get_template_directory().'/assets/functions/sidebar.php');

// Makes WordPress comments suck less
require_once(get_template_directory().'/assets/functions/comments.php');

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/assets/functions/page-navi.php');

// Adds support for multiple languages
require_once(get_template_directory().'/assets/translation/translation.php');

// Remove 4.2 Emoji Support
// require_once(get_template_directory().'/assets/functions/disable-emoji.php');

// Adds site styles to the WordPress editor
//require_once(get_template_directory().'/assets/functions/editor-styles.php');

// Related post function - no need to rely on plugins
require_once(get_template_directory().'/assets/functions/related-posts.php');

// Use this as a template for custom post types
// require_once(get_template_directory().'/assets/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/assets/functions/login.php');

// Customize the WordPress admin
// require_once(get_template_directory().'/assets/functions/admin.php');

// custom excerpt length for use in content boxes
function themify_custom_excerpt_length( $length ) {
   return 20;
}
add_filter( 'excerpt_length', 'themify_custom_excerpt_length', 999 );

// Exclude certain categories from showing
function exclude_post_categories($excl='', $spacer=' ') {
    $categories = get_the_category($post->ID);
    if (!empty($categories)) {
        $exclude = $excl;
        $exclude = explode(",", $exclude);
        $thecount = count(get_the_category()) - count($exclude);
        foreach ($categories as $cat) {
            $html = '';
            if (!in_array($cat->cat_ID, $exclude)) {
                $html .= '<a href="' . get_category_link($cat->cat_ID) . '" ';
                $html .= 'title="' . $cat->cat_name . '">' . $cat->cat_name . '</a>';
                if ($thecount > 1) {
                    $html .= $spacer;
                }
                $thecount--;
                echo $html;
            }
        }
    }
}

// Disabling Yoast SEO's canonical URL on single articles, so we can use the nc-link canonical instead/
// The Yoast SEO canonical still shows on all other pages

function wpseo_canonical_exclude( $canonical ) {
    global $post;
    if (is_single()) {
        $canonical = false;
    }
        return $canonical;
}

add_filter('wpseo_canonical', 'wpseo_canonical_exclude' );

//limit headling by Character length to add more precise control
function the_title_limit($length, $replacer = '...') {
 $string = the_title('','',FALSE);
 if(strlen($string) > $length)
 $string = (preg_match('/^(.*)\W.*$/', substr($string, 0, $length+1), $matches) ? $matches[1] : substr($string, 0, $length)) . $replacer;
 echo $string;
}


function level3_sticky_post(){
  if ( ! wp_is_post_revision( $post_id ) ){
    // unhook this function so it doesn't loop infinitely
    remove_action('save_post', 'level3_sticky_post');
    $time = current_time('mysql');
    // update the post, which calls save_post again
    wp_update_post(       array (
              'ID'            => 232, // ID of the post to update
              'post_date'     => $time,
              'post_date_gmt' => get_gmt_from_date( $time )
          ) );
    add_action( 'save_post', 'level3_sticky_post' );
  }
}
// Finally Queue Up That Action
add_action( 'save_post', 'level3_sticky_post' );

// Add custom sized image size 'medium-sized' of 30px * 30px to test custom size
add_image_size( 'medium-sized', 30, 30);

function _remove_script_version( $src ){
  $parts = explode( '?ver', $src );
  return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );

add_action( 'amp_post_template_css', 'xyz_amp_additional_css_styles' );

// Custom AMP Style by filter - matches blue header colour on main site, and same site logo
function xyz_amp_additional_css_styles( $amp_template ) {
    // CSS to edit  ?>
    header.amp-wp-header {
        padding: 12px 0;
        background: #0063a8;
        margin: 0 auto;
    }
    header.amp-wp-header a {
        background-image: url( '/wp-content/themes/netformation/assets/images/1NetFormation.svg' );
        background-repeat: no-repeat;
        background-size: contain;
        display: block;
        height: 1.5em;
        margin: 0 auto;
        text-indent: -9999px;
    }
<?php }
