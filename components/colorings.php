<section id="colorings">
  <div class="our-colorings">
    <div class="colorings-title">
      <p>Coloração</p>
    </div>
    <?php 
      $args = array( 
        'post_type' => array( 'coloracoes'),
        'post_status' => 'publish',
        'posts_per_page' => 6,
        'order' => 'ASC',
      );
      $coloring= new WP_Query( $args );
      if( $coloring->have_posts(  ) ):
        while( $coloring->have_posts(  ) ): $coloring->the_post();
    ?>

    <?php get_template_part( 'template-parts/coloring-post' ); ?>

    <?php 
      endwhile;
      wp_reset_postdata();
      endif;
    ?>
  </div>
</section>