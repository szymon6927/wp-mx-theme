        <?php if(!is_front_page()) : ?>
            <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
                <?php if(is_active_sidebar('sidebar')) : ?>
                    <?php dynamic_sidebar('sidebar'); ?>
                <?php endif; ?>
            </div>
            <!-- /.blog-sidebar -->

        <?php endif; ?>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
    </div>
    <p id="back-top" style="display: block;"><a title="Przejdź do góry strony" class="defaultCursor">Przejdź do góry strony</a></p>
    <footer class="blog-footer">
        <div class="container">
            <div class="col-sm-6 col-xs-12 text-left">
                <span>Copyright © <?php echo Date('Y'); ?> <strong><?php bloginfo('name') ?></strong> All Rights Reserved</span>
            </div>
            <div class="col-sm-6 col-xs-12 text-right">
                <p class="created">Created by <a href="mailto:miks.szymon@gmail.com">Szymon Miks</a></p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
 

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="<?php bloginfo('template_url') ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url') ?>/js/particles.min.js"></script>
    <!-- <script src="<?php bloginfo('template_url') ?>/js/creative.min.js"></script> -->
    <script src="<?php bloginfo('template_url') ?>/js/app.js"></script>
</body>

</html>