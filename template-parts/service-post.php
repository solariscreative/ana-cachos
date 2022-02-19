<div class="service">
  <div class="icon">
    <?php if(get_field('selected_service_icon', $curauth) == "corte"): ?>
    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/icons/blue_icon_corte.png" alt="">
    <?php endif; ?>
    <?php if(get_field('selected_service_icon', $curauth) == "tratamento"): ?>
    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/icons/blue_icon_tratamento.png" alt="">
    <?php endif; ?>
    <?php if(get_field('selected_service_icon', $curauth) == "final"): ?>
    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/icons/blue_icon_final.png" alt="">
    <?php endif; ?>
  </div>
  <div class="card">
    <h4 class="title"><?php the_field('service_name')?></h4>
    <h5>Tempo de serviço: <?php the_field('service_time')?></h5>
    <p style="margin-bottom: .5rem"><?php the_field('service_description')?></p>
    <span>Valor: <?php the_field('service_value')?></span>
  </div>
</div>