<?php
/*
Template Name: Archives
*/
get_header(); ?>

<div class="blog">
  <div class="page">
    <div class="heading">
        <h1>
          <?php
          if(is_date()){
            $month = get_the_date('M');
            $year = get_the_date('Y');
            _e($month . ' ' . $year);
          }else{
            _e('Archive');
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
          }else{
            get_template_part( 'template-parts/archive/content', 'archive');
          }
        ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
