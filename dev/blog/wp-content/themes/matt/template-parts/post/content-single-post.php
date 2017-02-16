<?php
/**
 * Displays content for single post
 * @package WordPress
 * @subpackage Matt
 * @since 1.0
 * @version 1.0
 */

?>
<article id="post-<?php the_ID(); ?>" class="blog-post" >

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="post grid-1-2">
        <h4>Posted <date><?php the_date(); ?></date> at <time><?php the_time(); ?> by <?php the_author(); ?> </h4>
        <p><?php the_content(); ?></p>
      </div>
    <?php endwhile; ?>
  <?php endif;?>

    <?php
    if(has_tag()){
      $tags = wp_get_post_tags($post->ID);
      $html = '<span class="tags-label">Tags</span><div class="tags">';
      foreach ( $tags as $tag ) {
      $tag_link = get_tag_link( $tag->term_id );

      $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
      $html .= "{$tag->name}</a> ";
      }
      $html .= '</div>';
      echo $html;
    }else{
      echo "<p>No tags to display</p>";
    } ?>

</article><!-- #post-## -->
