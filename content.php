<div class="blog-post">
    <?php if(has_post_thumbnail()) : ?>
        <div class="post-thumb thumb-in-content">
            <?php the_post_thumbnail(); ?>
        </div>
    <?php endif; ?>

    <?php if(is_single()) : ?>
        <?php the_content(); ?>
    <?php else: ?>
        <?php the_excerpt(); ?>
    <?php endif; ?>
</div>