<?php get_header(); ?>

    <div id="particles-js" class="masthead">
        <div class="text-on-slider">
            <div class="text-wrapper">
                <h1 class="text-uppercase">
                    <strong><?php echo get_theme_mod('showcase_heading'); ?></strong>
                </h1>
                <hr>
                <p class="text-faded mb-5">
                    <?php echo get_theme_mod('showcase_text', 'Lorem ipsum dolor sit amet'); ?>
                </p>
                <a href="<?php echo get_theme_mod('btn_url', 'http://test.pl'); ?>" class="btn btn-primary btn-xl js-scroll-trigger"><?php echo get_theme_mod('btn_text', 'Read More'); ?></a>
            </div>
        </div>
    </div>
    <!-- <section class="showcase">
    </section> -->

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

    <?php get_footer(); ?>