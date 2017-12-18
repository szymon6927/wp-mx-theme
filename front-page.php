<?php get_header(); ?>

    <div id="particles-js" class="masthead">
        <div class="text-on-slider">
            <div class="text-wrapper">
                <h1 class="text-uppercase">
                    <strong><?php echo get_theme_mod('showcase_heading'); ?></strong>
                </h1>
                <hr>
                <p class="text-faded heading-desc mb-5">
                    <?php echo get_theme_mod('showcase_text', 'Lorem ipsum dolor sit amet'); ?>
                </p>
                <a href="<?php echo get_theme_mod('btn_url', 'http://test.pl'); ?>" class="btn btn-xl js-scroll-trigger custom-btn"><?php echo get_theme_mod('btn_text', 'Read More'); ?></a>
            </div>
        </div>
    </div>

    <section class="bg-primary box-shadow pad80" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2 text-center">
            <h2 class="section-heading text-white">Czym się zajmujemy!</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">
            Celem prac Studenckiego Koła Naukowego Genetyków Zwierząt jest poznanie sekwencji genów kandydatów odpowiadających za proces melanogenzey 
            oraz określenie wpływu mutacji/polimorfizmów w nich obserwowanych na modelu norki amerykańskiej Neovison vison.</p>
            <a class="btn btn-light btn-xl js-scroll-trigger custom-btn" href="#services">Czytaj więcej!</a>
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="pad80">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">W chwili obecnej trwają prace nad genami:</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Pax3</h3>
              <p class="text-muted mb-0">czynnik transkrypcyjny paired-box</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">KIT</h3>
              <p class="text-muted mb-0">receptor kinazy tyrozynowej</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">EDNRB</h3>
              <p class="text-muted mb-0">receptor endoteliny typu B.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">MITF</h3>
              <p class="text-muted mb-0">czynnik transkrypcyjny związany z mikroftalmią</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="boxes">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <?php if(is_active_sidebar('box1')) : ?>
                        <?php dynamic_sidebar('box1'); ?> 
                    <?php endif; ?>
                </div>
                <div class="col-md-4">
                    <?php if(is_active_sidebar('box2')) : ?>
                        <?php dynamic_sidebar('box2'); ?> 
                    <?php endif; ?>
                </div>
                <div class="col-md-4">
                    <?php if(is_active_sidebar('box3')) : ?>
                        <?php dynamic_sidebar('box3'); ?> 
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-dark box-shadow pad80 text-white achievements">
      <div class="container text-center">
        <h2 class="mb-4">Nasze osiągnięcia</h2>
        <hr class="contrast">
        <div class="col-sm-4 col-xs-6">
          <div class="achievements-item">
            <div class="achievements-title text-center">
              <i class="fa fa-trophy" aria-hidden="true"></i>
            </div>
            <div class="achievements-desc">
              <p>Zdeponowanie w National Center of Biotechnology Information (NCBI) pionierskich sekwencji genów EDNRB, 
                PAX3 oraz KIT norki amerykańskiej (Neovison vison).</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-xs-6">
          <div class="achievements-item">
            <div class="achievements-title text-center">
              <i class="fa fa-trophy" aria-hidden="true"></i>
            </div>
            <div class="achievements-desc">
              <p>Wystawienie referatu pt. "Rola genu KIT w procesie melanogenezy" podczas studenckiej sesji kół naukowych na ZUT w Szczecinie.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-xs-6">
          <div class="achievements-item">
            <div class="achievements-title text-center">
              <i class="fa fa-trophy" aria-hidden="true"></i>
            </div>
            <div class="achievements-desc">
              <p>Wystawienie referatu pt. "Rola genu PAX3 w procesie melanogenezy" podczas studenckiej sesji kół naukowych na ZUT w Szczecinie.</p>
            </div>
          </div>
        </div>
        <a class="btn btn-light custom-btn btn-xl mt30" href="#">Zobacz więcej!</a>
      </div>
    </section>

    <section id="patronate" class="pad80">
      <div class="container">
        <div class="row">
          <h2 class="text-center">Wspomagają nas</h2>
          <hr>
          <div class="col-sm-4 col-sm-offset-4 mt20">
            <a href="https://pl.promega.com/">
              <img src="https://wwwen.uni.lu/var/storage/images/media/images/promega_logo_sol/1146786-1-fre-FR/promega_logo_sol.jpg" class="img-responsive patronate-logo" alt="Promega logo">
            </a>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="pad80">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2 text-center">
            <h2 class="section-heading">Zainteresowany?</h2>
            <hr class="my-4">
            <p class="mb-5">Zostaw nam kontakt do Siebie</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2 text-center mt20">
            <div class="col-lg-6 text-center">
              <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
              <p>+(48) 123-456-6789</p>
            </div>
            <div class="col-lg-6 text-center">
              <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
              <p>
                <a href="mailto:miks.szymon@gmail.com">miks.szymon@gmail.com</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php get_footer(); ?>