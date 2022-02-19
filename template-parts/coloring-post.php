<div class="coloring">
  <div class="icon">
    <?php if(get_field('selected_coloring_icon', $curauth) == "pincel"): ?>
    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/icons/pink_icon_pincel.png" alt="">
    <?php endif; ?>
    <?php if(get_field('selected_coloring_icon', $curauth) == "tinta"): ?>
    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/icons/pink_icon_potes.png" alt="">
    <?php endif; ?>
    <?php if(get_field('selected_coloring_icon', $curauth) == "semColorante"): ?>
    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/icons/pink_icon_noColor.png" alt="">
    <?php endif; ?>
  </div>
  <div class="card">
    <h4 class="title"><?php the_field('coloring_name')?></h4>
    <h5>Tempo de serviço: <?php the_field('coloring_time')?></h5>
    <p style="margin-bottom: .5rem"><?php the_field('coloring_description')?></p>
    <span>Valor: <?php the_field('coloring_value')?></span>
  </div>
</div>