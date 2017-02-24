<article class="category" id=<?php single_cat_title( '', false ); ?> >
  <div>
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
          ?>
          <div class="post grid-1-2">
            <h2><a href=<?php the_permalink(); ?>><?php the_title(); ?></a></h2>
            <date><?php echo apply_filters( 'the_date', get_the_date(), get_option( 'date_format' ), '', '' ); ?></date>
            <p class='excerpt'><?php the_excerpt(); ?></p>
          </div>
          <?php
        }
      }
      ?>

		</div><!-- .wrap -->
	</div><!-- .panel-content -->

</article><!-- #post-## -->
<?php if ($post_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
  <nav class="prev-next-posts">
    <div class="prev-posts-link">
      <?php echo get_next_posts_link( 'Previous', $post_query->max_num_pages ); // display older posts link ?>
    </div>
    <div class="next-posts-link">
      <?php echo get_previous_posts_link( 'Next' ); // display newer posts link ?>
    </div>
  </nav>
<?php } ?>
