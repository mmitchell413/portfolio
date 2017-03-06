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
        <h4 class="post-info">Posted <date><?php the_date(); ?></date> at <time><?php the_time(); ?></time> by <span><?php the_author(); ?></span> </h4>
        <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
        <hr>
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
      <hr/>
      <?php _e('<h3 class="related">Related Posts</h3>');?>
      <div class="grid">
      <?php
        $post_query = new WP_Query($args);
        if($post_query->have_posts() ) {
          while($post_query->have_posts() ) {
            $post_query->the_post();
            $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post_query->ID ), 'matt-featured-image' );
            $post_thumbnail_id = get_post_thumbnail_id( $post_query->ID );
            $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( $post_query->ID ), 'matt-featured-image' );
            // Calculate aspect ratio: h / w * 100%.
        		$ratio = $thumbnail_attributes[2] / $thumbnail_attributes[1] * 100;
        		?>
            <div class="post grid-1-2">
              <div class="panel-image" style="background-color:#4897CC; <?php if($thumbnail[0] != ""){ ?>background: url(<?php echo esc_url( $thumbnail[0] ); ?>)<?php } ?>; background-size:cover; background-repeat:no-repeat; background-position:0 25%;">
          			<div class="panel-image-prop" style="padding-top: <?php echo esc_attr( $ratio ); ?>%"></div>
          		</div><!-- .panel-image -->
              <div class="post-info">
                <h2><a href=<?php the_permalink(); ?>><?php the_title(); ?></a></h2>
                <date><?php echo apply_filters( 'the_date', get_the_date(), get_option( 'date_format' ), '', '' ); ?></date>
                <p class='excerpt'><?php the_excerpt(); ?></p>
              </div>
            </div>
            <?php
          }
        }
        wp_reset_query();
        }
      ?>
    </div>

</article><!-- #post-## -->
