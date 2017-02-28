<?php get_header(); ?>

<div class="blog">
  <div class="page">
    <div class="heading">
        <h1><?php bloginfo( 'name' ); ?></h1>
        <h2><?php bloginfo( 'description' ); ?></h2>
        <br>
    </div>
    <div class="container">
      <?php
        get_template_part( 'template-parts/side-nav/side', 'front-page' );
      ?>
        <?php
        if ( have_posts() ) :
    			while ( have_posts() ) : the_post();
    				get_template_part( 'template-parts/page/content', 'front-page' );
    			endwhile;
        endif;
        get_template_part( 'template-parts/page/content', 'front-page-posts' );
        //$title = isset($post->post_title) ? $post->post_title : '';
        ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
