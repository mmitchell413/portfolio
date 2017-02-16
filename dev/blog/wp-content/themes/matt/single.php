<?php get_header(); ?>

<div class="blog">
  <div class="page">
    <div class="heading">
        <h1><?php the_title();?></h1>
        <br>
    </div>
    <?php
      get_template_part( 'template-parts/side-nav/side', 'single-post' );
    ?>
    <div class="container">
      <?php
      get_template_part( 'template-parts/post/content', 'single-post' );
      ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
