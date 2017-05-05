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
  <ul id="archives">
    <?php _e('<h4><a href="'. get_permalink($archive_page->ID) . '">Archives</a></h4>'); ?>
    <li>
      <?php wp_get_archives('type=monthly'); ?>
    </li>
  </ul>
</aside>
