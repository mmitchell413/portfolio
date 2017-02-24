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
      <div>
        <h4>Posted <date><?php the_date(); ?></date> at <time><?php the_time(); ?></time> by <span><?php the_author(); ?></span> </h4>
        <p><?php the_content(); ?></p>
      </div>
    <?php endwhile; ?>
  <?php endif;?>

    <?php
    if(has_tag()){
      $tags = wp_get_post_tags($post->ID);
      $html = '<div class="tags">';
      foreach ( $tags as $tag ) {
      $tag_link = get_tag_link( $tag->term_id );

      $html .= "<a href='{$tag_link}' title='{$tag->name} Tag'>";
      $html .= "#{$tag->name}</a> ";
      }
      $html .= '</div>';
      echo $html;
    }else{
      // echo "<p class='small'>No tags to display</p>";
    } ?>

    <?php
    //for use in the loop, list 2 post titles related to first tag on current post
    $tags = wp_get_post_tags($post->ID);
    if ($tags) {
      $first_tag = $tags[0]->term_id;
      $args=array(
        'tag__in' => array($first_tag),
        'post__not_in' => array($post->ID),
        'posts_per_page'=>2,
        'caller_get_posts'=>1
      );?>
      <?php _e('<h3 class="related">Related Posts</h3>');?>
      <div class="grid">
      <?php
        $my_query = new WP_Query($args);
        if( $my_query->have_posts() ) {
          while ($my_query->have_posts()) : $my_query->the_post();
          $my_query->the_post();
          ?>
          <div class="post grid-1-2">
            <h2><a href=<?php the_permalink(); ?>><?php the_title(); ?></a></h2>
            <date><?php the_date(); ?></date>
            <?php the_excerpt(); ?>
          </div>
          <?php
          endwhile;
        }
        wp_reset_query();
        }
      ?>
    </div>

</article><!-- #post-## -->
