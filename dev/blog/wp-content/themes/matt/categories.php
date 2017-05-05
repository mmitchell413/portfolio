<?php
/*
Template Name: Categories
*/
get_header(); ?>

<div class="blog">
  <div class="page">
    <div class="heading">
        <h1>Categories</h1>
    </div>

    <div class="container">
      <?php
        get_template_part( 'template-parts/side-nav/side', 'front-page' );
      ?>
      <?php
        get_template_part( 'template-parts/category/content', 'category-list' );
        ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
