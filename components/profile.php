<section id="perfil">
  <div class="ana">
    <div class="desktop">
      <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/desktop/profile.png" alt="">
    </div>
    <div class="text">
      <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/desktop/color.png" alt="">
      <div class="mobile">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/mobile/ana.png" alt="">
      </div>
      <h3>ANA PAULA VIEIRA</h3>
      <p><?php the_field('about')?></p>
      <div id="instagram" class="instagram">
        <a href="<?php the_field('instagram')?>" target="_blank" rel="noopener noreferrer">
          <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/icons/icon_instagram.png" alt="">
          <span><?php the_field('instagram_handler')?></span>
        </a>
      </div>
    </div>
  </div>
  <div class="salao">
    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/desktop/salao.png" alt="">
  </div>
</section>