<article class="category" id=<?php single_cat_title( '', false ); ?> >
    <div class="grid">
    	<?php
      $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
      $args = array(
          'post_type' => 'post',
          'posts_per_page' => 10,
          'paged' => $paged
      );

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
      ?>

		</div><!-- .wrap -->
    <?php if ($post_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
        <div class="paginate-links">
          <?php
            echo paginate_links($post_query);
          ?>
        </div>
    <?php } ?>
</article><!-- #post-## -->
