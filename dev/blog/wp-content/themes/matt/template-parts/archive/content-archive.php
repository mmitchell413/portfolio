<article class="category" id=<?php single_cat_title( '', false ); ?> >
  <div>
    <div class="grid">
      <div id="container">
      	<div id="content" role="main">

      		<?php the_post(); ?>

      		<?php get_search_form(); ?>

      		<h2>Archives by Month:</h2>
      		<ul>
      			<?php wp_get_archives('type=monthly'); ?>
      		</ul>

      		<h2>Archives by Subject:</h2>
      		<ul>
      			 <?php wp_list_categories(); ?>
      		</ul>

      	</div><!-- #content -->
      </div><!-- #container -->

		</div><!-- .wrap -->
	</div><!-- .panel-content -->

</article><!-- #post-## -->
