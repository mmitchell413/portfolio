<?php
/**
 * Template part for displaying pages on front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<article>
  <div>
    <div>
	<?php
  $args = array(
      'post_type' => 'post'
  );

  $post_query = new WP_Query($args);
  if($post_query->have_posts() ) {
    while($post_query->have_posts() ) {
      $post_query->the_post();
      ?>
      <h2><?php the_title(); ?></h2>
      <p><?php the_post(); ?></p>
      <?php
    }
  }
  ?>

		</div><!-- .wrap -->
	</div><!-- .panel-content -->

</article><!-- #post-## -->
