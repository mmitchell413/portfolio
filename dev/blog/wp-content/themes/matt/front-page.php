<?php get_header(); ?>

<div class="blog">
  <div class="page">
    <div class="heading">
        <h1>Hi, I'm <span class="red-highlight">Matt</span></h1>
        <br>
    </div>
    <?php
      get_template_part( 'template-parts/side-nav/side', 'front-page' );
    ?>
    <div class="container">
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
