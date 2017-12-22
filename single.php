<?php get_header(); ?>
    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="masthead" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/analysis2.jpg')">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 mx-auto">
                                    <div class="post-heading">
                                        <h1><?php single_post_title(); ?></h1>
                                        <span class="meta">Opublikowano przez
                                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> - 
                                            <?php the_time('d/m/Y, g:i'); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 blog-main">
                        <?php get_template_part('content', get_post_format()) ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php __('No Posts Found'); ?></p>
    <?php endif; ?>
<?php get_footer(); ?>