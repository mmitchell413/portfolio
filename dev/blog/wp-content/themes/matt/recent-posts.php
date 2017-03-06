<?php
/*
Template Name: Recent Posts
*/
get_header(); ?>

<div class="blog">
  <div class="page">
    <div class="heading">
        <h1>
          Recent Posts
        </h1>
    </div>

    <div class="container">
      <?php
        get_template_part( 'template-parts/side-nav/side', 'front-page' );
      ?>
        <?php

            get_template_part( 'template-parts/post/content', 'recent-posts');
        ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
