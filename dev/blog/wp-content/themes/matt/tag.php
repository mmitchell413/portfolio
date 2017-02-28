<?php get_header(); ?>

<div class="blog">
  <div class="page">
    <div class="heading">
        <h1>#<?php single_tag_title( '', true ); ?></h1>
        <br>
    </div>
    <div class="container">
      <?php
        get_template_part( 'template-parts/side-nav/side', 'front-page' );
      ?>
      <?php get_template_part( 'template-parts/tags/content', 'tags'); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
