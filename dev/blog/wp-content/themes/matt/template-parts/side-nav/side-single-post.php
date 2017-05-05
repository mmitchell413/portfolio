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
  <ul id="recent-posts">
    <?php _e('<h4><a href="'. get_permalink($recent_page->ID) . '">Recent Posts</a></h4>'); ?>
    <?php
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    $args = array(
        'posts_per_page' => 5,
        'post_type' => 'post',
        'post_status' => 'publish',
        'paged' => $paged,
        'offset' => 0
    );

    $post_query = new WP_Query($args);
    if($post_query->have_posts() ) {
      while($post_query->have_posts() ) {
        $post_query->the_post();
        $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post_query->ID ), 'matt-featured-image' );
        $post_thumbnail_id = get_post_thumbnail_id( $post_query->ID );
        $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( $post_query->ID ), 'matt-featured-image' );
        // Calculate aspect ratio: h / w * 100%.
        //$ratio = $thumbnail_attributes[2] / $thumbnail_attributes[1] * 100;
        ?>
            <li><a href=<?php the_permalink(); ?>><?php the_title(); ?></a></li>
        <?php
      }
    }
    ?>
  </ul>

  <ul id="categories">
    <?php _e('<h4><a href="'. get_permalink($categories_page->ID) . '">Categories</a></h4>'); ?>
  	<li>
      <?php wp_list_cats(); ?>
  	</li>
  </ul>

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
      );?>
      <?php
      $my_query = new WP_Query($args);
      if( $my_query->have_posts() ) {
        _e('<ul id="related"><h4>Related Posts</h4>');
        while ($my_query->have_posts()) : $my_query->the_post(); ?>
          <li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
        <?php
      endwhile;
      _e('</ul>');
      }
      wp_reset_query();
      }
    ?>

    <ul id="archives">
      <?php _e('<h4><a href="'. get_permalink($archive_page->ID) . '">Archives</a></h4>'); ?>
      <li>
        <?php wp_get_archives('type=monthly'); ?>
      </li>
    </ul>
</aside>
