            </div>

            <footer class="clearfix">

                <div class="footer-content clearfix">

                    <ul class="social-media clearfix">
                        <li><a class="social facebook" target="_blank" href="http://www.facebook.com/"></a></li>
                        <li><a class="social twitter" target="_blank" href="http://twitter.com/"></a></li>
                        <li><a class="social youtube" target="_blank" href="http://www.youtube.com/"></a></li>
                    </ul>

                    <ul class="footer-nav">
                        <li><a href="<?php echo get_bloginfo('url'); ?>/index">Home</a></li>
                        <li><a href="<?php echo get_bloginfo('url'); ?>/start">Start a Project</a></li>
                        <li><a href="<?php echo get_bloginfo('url'); ?>/browse">Browse</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                    </ul>

                    <a class="terms" href="terms.php">Terms & Conditions</a>

                </div>

                <div class="copyright">

                    <p>© 2013 Jeremy Molly Briar Fabian Design | mds for education only</p>
                    
                </div>


            </footer>

        </div>
        
        <?php wp_footer(); ?>

        <script>
            var siteInfo = {ajaxURL:"<?php echo admin_url('admin-ajax.php'); ?>"}
        </script>

        <?php if(!is_pod_page('start')) {?>
        <script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery-1.9.1.min.js"></script>
        <?php } ?>
        
        <script src="<?php bloginfo('template_url'); ?>/js/custom/jquery.formvalidation.js"></script>

        <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

    </body>
</html>