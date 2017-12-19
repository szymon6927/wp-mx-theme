<?php get_header(); ?>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <h1 class="page-title mb20"><?php single_post_title(); ?></h1>
        </div>
        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mt10 mb30">
                    <div class="feature feature-1 boxed">
                        <div class="text-center">
                            <div class="image-tile hover-tile text-center">
                                <?php if(has_post_thumbnail()) : ?>
                                    <div class="post-thumb background-image">
                                        <img class="custom-thumb" src="<?php the_post_thumbnail_url(); ?>" />
                                    </div>
                                <?php else: ?>
                                    <div class="post-thumb background-image">
                                        <img class="custom-thumb" src="<?php echo get_stylesheet_directory_uri(); ?>/img/custom.jpeg"/>
                                    </div>
                                <?php endif; ?>
                                <div class="hover-state">
                                    <a href="<?php the_permalink() ?>">
                                        <div class="blog-post-title"><?php the_title(); ?></div>
                                    </a>
                                </div>
                            </div>
                            <a class="post-title" href="<?php the_permalink() ?>">
                                <div><?php the_title(); ?></div>
                            </a>
                            <div class="post-desc text-left">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php __('No Posts Found'); ?></p>
        <?php endif; ?>

    <?php get_footer(); ?>
