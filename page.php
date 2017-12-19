<?php get_header(); ?>

    <div class="col-lg-12 col-md-12 col-sm12 col-xs-12">
        <h1 class="text-center"><?php single_post_title(); ?></h1>
        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
            <div class="content text-left mt10">
                <?php the_content(); ?>
            </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php __('No Page Found'); ?></p>
        <?php endif; ?>
    </div>

    <?php get_footer(); ?>
