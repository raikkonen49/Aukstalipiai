

    <div id="contacts" class="small-12 columns contacts">
        <div class="row row-contacts">
            <div class="small-12 columns nopad section-heading-center">
                <?php _e('Susisiekite su mumis', 'aukstalipiai'); ?>
            </div>
            <div class="small-12 columns nopad contacts-list text-center">
                <ul>
                    <?php if( get_field('phone', 'options') ): ?>
                        <li>
                            <div class="small-12 nopad image-holder" style="background:url('<?php echo bloginfo('template_directory'); ?>/img/phone2.png') no-repeat center center"></div>
                            <span>
                                <?php the_field('phone', 'options'); ?>
                            </span>
                        </li>
                    <?php endif; ?>

                    <?php if( get_field('e-mail', 'options') ): ?>
                        <li>
                            <div class="small-12 nopad image-holder" style="background:url('<?php echo bloginfo('template_directory'); ?>/img/mail.png') no-repeat center center"></div>
                            <span>
                                <?php the_field('e-mail', 'options'); ?>
                            </span>
                        </li>
                    <?php endif; ?>

                    <?php if( get_field('address', 'options') ): ?>
                        <li>
                            <div class="small-12 nopad image-holder" style="background:url('<?php echo bloginfo('template_directory'); ?>/img/map.png') no-repeat center center"></div>
                            <span>
                              <?php the_field('address', 'options'); ?>
                            </span>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>

            <?php echo do_shortcode( '[contact-form-7 id="62" title="Message form"]' ); ?>

        </div>
    </div>
    <div class="small-12 columns footer">
        <div class="row">
            <div class="small-6 columns nopad footer-subtext">
                <?php _e('Visos teisės saugomos, 2017', 'aukstalipiai'); ?>
            </div>
            <div class="small-6 columns nopad footer-subtext text-right">
                <?php _e('Sprendimas', 'aukstalipiai'); ?>: <a href="https://ugas.lt/">ugas</a>
            </div>
        </div>
    </div>

    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/what-input.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/foundation.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/motion-ui.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.fancybox.pack.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
