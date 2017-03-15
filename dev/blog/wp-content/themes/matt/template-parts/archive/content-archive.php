<article class="category" id='archive'>
  <div>
    <div class="grid">
      		<?php the_post(); ?>

          <!-- <div class="grid-1-1 search">
        		<?php get_search_form(); ?>
          </div> -->
          <div class="grid-1-2">
        		<h2>Monthly</h2>
        		<ul>
        			<?php wp_get_archives('type=monthly'); ?>
        		</ul>
          </div>
          <div class="grid-1-2">
        		<h2>Subject</h2>
        		<ul>
        			 <?php wp_list_categories('title_li='); ?>
        		</ul>
          </div>

		</div><!-- .wrap -->
	</div><!-- .panel-content -->

</article><!-- #post-## -->
