<section id="header">
  <div class="wrapper">
    <div class="content">
      <div class="header-top">
        <h1><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/logo.png"
            alt="Ana Viera Cachos e Crespos"></h1>
        <h2>
          Salão especializado em <br>
          cabelos ondulados, cacheados e crespos.
        </h2>
        <p>
          Atendemos uma pessoa por horário para <br>
          proporcionar uma melhor experência <br>
          para nossas clientes.
        </p>
      </div>
      <div class="header-icons">
        <ul>
          <li>
            <a href="#services">
              <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/icons/header-icon1.png" alt="">
              <h3>Serviços</h3>
            </a>
          </li>
          <li>
            <a href="https://wa.me/<?php the_field('whatsapp')?>" target="_blank" rel="noopener noreferrer">
              <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/icons/header-icon2.png" alt="">
              <h3>Agende pelo <br> whatsapp</h3>
            </a>
          </li>
          <li>
            <a href="<?php the_field('avec')?>" target="_blank" rel="noopener noreferrer">
              <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/icons/header-icon3.png" alt="">
              <h3>Agende pelo <br> Avec</h3>
            </a>
          </li>
          <li>
            <a href="<?php the_field('instagram')?>" target="_blank" rel="noopener noreferrer">
              <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/icons/header-icon4.png" alt="">
              <h3>Instagram</h3>
              <p>(Veja nossos <br> trabalhos)</p>
            </a>
          </li>
        </ul>
      </div>
      <footer>
        <div class="service-by">
          <h4>
            Serviços <br>
            realizados por:
          </h4>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/mobile/ana.png" alt="Ana Vieira">
          <p>Ana Paula Vieira</p>
        </div>
        <div class="footer">
          <h6>
            <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/icons/Icones_8.png" alt="">
          </h6>
          <p><?php the_field('endereco')?></p>
        </div>
      </footer>
    </div>
  </div>
</section>