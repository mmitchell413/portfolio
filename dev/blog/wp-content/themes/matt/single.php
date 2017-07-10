<?php get_header(); ?>
<?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post_query->ID ), 'matt-featured-image' ); ?>
<div class='post-bg' style="position:absolute; top:76px; height:600px; width:100%; z-index:-9999; background-color:#4897CC; <?php if($thumbnail[0] != ""){ ?>background: url(<?php echo esc_url( $thumbnail[0] ); ?>)<?php } ?> fixed; background-size:100%; background-repeat:no-repeat; background-position:center center;"></div>
<div class="blog">
  <div class="page" >
    <div class="heading">
        <h1 class="blog-title"><?php the_title();?></h1>
        <br>
    </div>

    <div class="container">
      <?php
        get_template_part( 'template-parts/side-nav/side', 'single-post' );
      ?>
        <?php
        get_template_part( 'template-parts/post/content', 'single-post' );
        ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
