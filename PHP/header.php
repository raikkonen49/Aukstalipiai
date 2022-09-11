<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/foundation.min.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/motion-ui.min.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/jquery.fancybox.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/hamburgers.css" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css" type="text/css" media="screen" />
        <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500&amp;subset=latin-ext" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=latin-ext" rel="stylesheet">
        <?php wp_head(); ?>
    </head>
        <body <?php body_class(); ?>>

        <?php if(is_front_page()): ?>

        <div class="intro-bg" style="background: url('<?php the_field('intro_image'); ?>') center center no-repeat;">
            <div class="row row-intro">
                <div class="small-12 columns nopad intro-holder">
                    <div class="small-7 nopad columns intro-title">
                        <?php the_field('intro_title'); ?>
                    </div>
                    <div class="small-12 columns nopad intro-title-subtext">
                        <?php the_field('intro_text'); ?>
                    </div>
                </div>
            </div>
        </div>

        <?php endif; ?>
          <div class="header<?php if (is_front_page()) { ?> hold<?php } else { ?><?php } ?>">
              <div class="row">
                  <div class="small-9 medium-9 large-3 columns nopadleft logo">
                    <a href="<?php echo home_url(); ?>"><img src="<?php echo bloginfo('template_directory'); ?>/img/logo.png"></a>
                  </div>
                  <div class="small-9 columns nopad header-laptop">
                      <div class="small-10 columns nopad header-list">
                          <?php wp_nav_menu( array('menu' => 'nav', 'menu_class' => 'top_nav' )); ?>
                      </div>
                      <div class="small-2 columns nopadright pad-top20px">
                          <div class="small-6 columns nopad text-right facebook-small">
                              <a href="<?php the_field('facebook', 'options'); ?>" class="facebook"></a>
                          </div>
                          <div class="small-6 columns nopad text-right">

                              <!-- <div id="lang_sel">
                                  <ul>
                                      <li>
                                          <a href="#" class="lang_sel_sel">
                                            <img src="<?php echo bloginfo('template_directory'); ?>/img/lt.png" alt="">
                                            <span></span>
                                          </a>
                                          <ul>
                                              <li class="icl-en">
                                                <a href="#">
                                                  <img src="<?php echo bloginfo('template_directory'); ?>/img/eng.png" alt="">
                                                </a>
                                              </li>
                                              <li class="icl-ru">
                                                  <a href="#"><img src="<?php echo bloginfo('template_directory'); ?>/img/ru.png" alt=""></a>
                                              </li>
                                          </ul>
                                      </li>
                                  </ul>
                              </div> -->
                          </div>
                      </div>
                  </div>
                  <div class="small-3 columns mobile-menu text-right">
                      <div class="hamburger hamburger--collapse">
                          <div class="hamburger-box">
                              <div class="hamburger-inner"></div>
                          </div>
                      </div>
                  </div>
                  <div class="small-12 columns nopad mobile-nav">

                      <?php wp_nav_menu( array('menu' => 'nav', 'menu_class' => 'top_nav' )); ?>

                      <div class="small-12 columns nopad facebook-small">
                          <a href="#" class="facebook"></a>
                      </div>
                      <div class="small-12 columns nopad">
                          <!-- <div id="lang_sel">
                              <ul>
                                  <li>
                                      <a href="#" class="lang_sel_sel">
                                          <img src="<?php echo bloginfo('template_directory'); ?>/img/lt.png" alt="">
                                          <span></span>
                                      </a>
                                      <ul>
                                          <li class="icl-en">
                                              <a href="#">
                                                  <img src="<?php echo bloginfo('template_directory'); ?>/img/eng.png" alt="">
                                              </a>
                                          </li>
                                          <li class="icl-ru">
                                              <a href="#"><img src="<?php echo bloginfo('template_directory'); ?>/img/ru.png" alt=""></a>
                                          </li>
                                      </ul>
                                  </li>
                              </ul>
                          </div> -->
                      </div>
                  </div>
              </div>
          </div>
