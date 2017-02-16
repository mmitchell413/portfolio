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
  <ul id="categories"><?php _e('<h4>Categories</h4>'); ?>
  	<li>
      <?php wp_list_cats(); ?>
  	</li>
  </ul>
  <ul id="archives"><?php _e('<h4>Archives</h4>'); ?>
    <li>
      <?php wp_get_archives('type=monthly'); ?>
    </li>
  </ul>
  <ul id="related"><?php _e('<h4>Related Posts</h4>'); ?>
    <?php
    //for use in the loop, list 5 post titles related to first tag on current post
    $tags = wp_get_post_tags($post->ID);
    if ($tags) {
      $first_tag = $tags[0]->term_id;
      $args=array(
        'tag__in' => array($first_tag),
        'post__not_in' => array($post->ID),
        'posts_per_page'=>5,
        'caller_get_posts'=>1
      );
      $my_query = new WP_Query($args);
      if( $my_query->have_posts() ) {
        while ($my_query->have_posts()) : $my_query->the_post(); ?>
          <li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
        <?php
      endwhile;
      }
      wp_reset_query();
      }
    ?>
  </ul>
</aside>
