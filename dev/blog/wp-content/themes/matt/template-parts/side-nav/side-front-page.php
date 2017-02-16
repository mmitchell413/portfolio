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

<aside class="side-nav">
  <ul id="categories"><?php _e('<h2>Categories</h2>'); ?>
  	<li>
      <?php wp_list_cats(); ?>
  	</li>
  </ul>
  <ul id="archives"><?php _e('<h2>Archives</h2>'); ?>
    <li>
      <?php wp_get_archives('type=monthly'); ?>
    </li>
  </ul>
</aside>
