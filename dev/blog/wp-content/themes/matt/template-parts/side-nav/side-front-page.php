<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Matt
 * @since 1.0
 * @version 1.0
 */

?>

<?php
$archive_page = get_post(46);
$recent_page = get_post(48);
$categories_page = get_post(51);
?>

<aside class="side-nav">
  <?php _e('<h4><a href="'. get_permalink($recent_page->ID) . '">Recent Posts</a></h4>'); ?>
  <ul id="categories">
    <?php _e('<h4><a href="'. get_permalink($categories_page->ID) . '">Categories</a></h4>'); ?>
  	<li>
      <?php wp_list_cats(); ?>
  	</li>
  </ul>
  <ul id="archives">
    <?php _e('<h4><a href="'. get_permalink($archive_page->ID) . '">Archives</a></h4>'); ?>
    <li>
      <?php wp_get_archives('type=monthly'); ?>
    </li>
  </ul>
</aside>
