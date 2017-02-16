<?php
/**
 * Template part for displaying pages on front page
 *
 * @package WordPress
 * @subpackage Matt
 * @since 1.0
 * @version 1.0
 */

?>

<article class="front-page">
  <div>
    <div class="grid">
    	<?php
      $args = array(
          'post_type' => 'post'
      );

      $post_query = new WP_Query($args);
      if($post_query->have_posts() ) {
        while($post_query->have_posts() ) {
          $post_query->the_post();
          ?>
          <div class="post grid-1-2">
            <h2><a href=<?php the_permalink(); ?>><?php the_title(); ?></a></h2>
            <date><?php the_date(); ?></date>
            <p><?php the_excerpt(); ?></p>
          </div>
          <?php
        }
      }
      ?>

		</div><!-- .wrap -->
	</div><!-- .panel-content -->

</article><!-- #post-## -->
