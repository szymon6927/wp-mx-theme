<?php get_header(); ?>

    <div id="particles-js">
        <div class="text-on-slider">
            <div class="text-wrapper">
                <h1 class="text-uppercase">
                    <strong><?php echo get_theme_mod('showcase_heading'); ?></strong>
                </h1>
                <hr>
                <p class="text-faded heading-desc mb-5">
                    <?php echo get_theme_mod('showcase_text', 'Lorem ipsum dolor sit amet'); ?>
                </p>
                <a id="see-more" href="<?php echo get_theme_mod('showcase_btn_url', 'http://test.pl'); ?>" class="btn btn-xl js-scroll-trigger custom-btn">
                  <?php echo get_theme_mod('showcase_btn_text', 'Read More'); ?>
                </a>
            </div>
        </div>
    </div>

    <section class="bg-primary box-shadow pad80 pad-xs-45" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2 text-center">
            <h2 class="section-heading text-white"><?php echo get_theme_mod('WideParagraph_heading', 'Lorem ipsum dolor sit amet'); ?></h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">
            <?php echo get_theme_mod('WideParagraph_text', 'Lorem ipsum dolor sit amet'); ?>
            </p>
            <a id="go-to-services" href="<?php echo get_theme_mod('paragraph_btn_url', 'http://test.pl'); ?>" class="btn btn-light btn-xl js-scroll-trigger custom-btn">
              <?php echo get_theme_mod('paragraph_btn_text', 'Read More'); ?>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="pad80 pad-xs-45">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading"><?php echo get_theme_mod('WorkingAt_heading', 'W chwili obecnej trwają prace nad:'); ?></h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 text-center mb15">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3"><?php echo get_theme_mod('Work-title0'); ?></h3>
              <p class="text-muted mb-0"><?php echo get_theme_mod('Work-desc0'); ?></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 text-center mb15">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3"><?php echo get_theme_mod('Work-title1'); ?></h3>
              <p class="text-muted mb-0"><?php echo get_theme_mod('Work-desc1'); ?></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 text-center mb15">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3"><?php echo get_theme_mod('Work-title2'); ?></h3>
              <p class="text-muted mb-0"><?php echo get_theme_mod('Work-desc2'); ?></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12  text-center mb15">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3"><?php echo get_theme_mod('Work-title3'); ?></h3>
              <p class="text-muted mb-0"><?php echo get_theme_mod('Work-desc3'); ?></p>
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

    <section class="bg-dark box-shadow pad80 pad-xs-45 text-white achievements">
      <div class="container text-center">
        <h2 class="mb-4"><?php echo get_theme_mod('OurAchievements_heading'); ?></h2>
        <hr class="contrast">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="achievements-item">
            <div class="achievements-title text-center">
              <i class="fa fa-trophy" aria-hidden="true"></i>
            </div>
            <div class="achievements-desc">
              <p><?php echo get_theme_mod('OurAchievements-desc0'); ?></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="achievements-item">
            <div class="achievements-title text-center">
              <i class="fa fa-trophy" aria-hidden="true"></i>
            </div>
            <div class="achievements-desc">
              <p><?php echo get_theme_mod('OurAchievements-desc1'); ?></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="achievements-item">
            <div class="achievements-title text-center">
              <i class="fa fa-trophy" aria-hidden="true"></i>
            </div>
            <div class="achievements-desc">
              <p><?php echo get_theme_mod('OurAchievements-desc2'); ?></p>
            </div>
          </div>
        </div>
        <a class="btn btn-light custom-btn btn-xl mt30" href="<?php echo get_theme_mod('OurAchievements_btn_url'); ?>">
          <?php echo get_theme_mod('OurAchievements_btn_text', 'Read More'); ?>
        </a>
      </div>
    </section>

    <section id="patronate" class="pad80 pad-xs-45">
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

    <section id="contact" class="pad80 pad-xs-45">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2 text-center">
            <h2 class="section-heading"><?php echo get_theme_mod('contact_heading'); ?></h2>
            <hr class="my-4">
            <p class="mb-5"><?php echo get_theme_mod('contact_desc'); ?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2 text-center mt20">
            <div class="col-lg-6 text-center">
              <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
              <p>
                <a href="tel:<?php echo str_replace(' ', '', get_theme_mod('contact_tel')); ?>"><?php echo get_theme_mod('contact_tel'); ?></a>
              </p>
            </div>
            <div class="col-lg-6 text-center">
              <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
              <p>
                <a href="mailto:<?php echo get_theme_mod('contact_mail'); ?>"><?php echo get_theme_mod('contact_mail'); ?></a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php get_footer(); ?>