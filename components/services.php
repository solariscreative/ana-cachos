<section id="services">
  <div class="our-services">
    <div class="services-title">
      <h3>Serviços</h3>
      <p>Corte e Tratamento</p>
    </div>
    <?php 
      $args = array( 
        'post_type' => array( 'servicos'),
        'post_status' => 'publish',
        'posts_per_page' => 6,
        'order' => 'ASC',
      );
      $service = new WP_Query( $args );
      if( $service->have_posts(  ) ):
        while( $service->have_posts(  ) ): $service->the_post();
    ?>

    <?php get_template_part( 'template-parts/service-post' ); ?>

    <?php 
      endwhile;
      wp_reset_postdata();
      endif;
    ?>
  </div>
</section>