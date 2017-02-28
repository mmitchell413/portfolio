<?php
/*
Template Name: Archives
*/
get_header(); ?>

<div class="blog">
  <div class="page">
    <div class="heading">
        <h1>
          <?php if(is_date()){
              $month = get_the_time('M');
              $year = get_the_time('Y');
              echo $month . ' ' . $year;
            }
            ?>
        </h1>
    </div>

    <div class="container">
      <?php
        get_template_part( 'template-parts/side-nav/side', 'front-page' );
      ?>
        <?php
          if(is_date()){
            get_template_part( 'template-parts/archive/content', 'archive-monthly' );
          }else if(is_cat()){
            get_template_part( 'template-parts/category/content', 'category-posts' );
          }else{
            get_template_part( 'template-parts/archive/content', 'archive');
          }
        ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
