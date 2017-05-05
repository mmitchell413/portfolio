<article id=<?php single_cat_title( '', false ); ?> >
    <div class="grid">
      <?php
      $categories = get_categories( array(
        'orderby' => 'name',
        'order'   => 'ASC'
      ) );
      foreach( $categories as $category ) {
        $category_link = sprintf(
            '<a href="%1$s" alt="%2$s">%3$s</a>',
            esc_url( get_category_link( $category->term_id ) ),
            esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
            esc_html( $category->name )
        );
        echo '<div class="category grid-1-3">';
        echo '<h2>' . sprintf( esc_html__( '%s', 'textdomain' ), $category_link ) . '</h2> ';
        echo '<p>' . sprintf( esc_html__( '%s', 'textdomain' ), $category->description ) . '<br>';
        echo '<span class="small-text">' . sprintf( esc_html__( '%s Posts', 'textdomain' ), $category->count ) . '</span></p>';
        echo '</div>';
      }
      ?>
    </div>
</article>
