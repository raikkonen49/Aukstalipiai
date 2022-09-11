<?php get_header(); ?>

<div class="small-12 columns nopad section-about" data-equalizer>
    <div id="about"></div>
    <div class="small-12 medium-12 large-6 columns section-about-left" data-equalizer-watch>
        <div class="small-12 columns nopad section-heading hold">
            <?php _e('mes esame', 'aukstalipiai'); ?>
            <br>
            <span>
                <?php _e('aukštalipių paslaugų ekspertai', 'aukstalipiai'); ?>
            </span>
        </div>
        <div class="small-12 columns nopad section-description">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <?php the_content(); ?>

          <?php wp_reset_query();?>
          <?php endwhile; else : ?>
          <?php endif; ?>
        </div>
        <div class="small-12 columns nopad section-about-list">
            <ul>
              <?php if( have_rows('quality_list') ): ?>
                <?php while( have_rows('quality_list') ): the_row(); ?>

                  <li>
                      <div class="small-12 list-heading nopad" style="background:url('<?php the_sub_field('image'); ?>') bottom left no-repeat">
                          <?php the_sub_field('title'); ?>
                      </div>
                      <div class="small-12 columns nopad list-description">
                          <?php the_sub_field('text'); ?>
                      </div>
                  </li>

                <?php endwhile; ?>
            <?php endif; ?>
            </ul>
        </div>
    </div>
    <div class="small-12 medium-12 large-6 nopad columns section-about-right" data-equalizer-watch>
        <div class="video-holder" >
            <?php the_field('video'); ?>
            <div class="video-bg" style="background:url('<?php echo bloginfo('template_directory'); ?>/img/video-cover.png') no-repeat center center"></div>
            <button id="video-play"></button>
        </div>
    </div>
    <div class="small-12 columns nopad section-about-list laptop">
        <ul>
          <?php if( have_rows('quality_list') ): ?>
            <?php while( have_rows('quality_list') ): the_row(); ?>

              <li>
                  <div class="small-12 list-heading nopad" style="background:url('<?php the_sub_field('image'); ?>') bottom left no-repeat">
                      <?php the_sub_field('title'); ?>
                  </div>
                  <div class="small-12 columns nopad list-description">
                      <?php the_sub_field('text'); ?>
                  </div>
              </li>

            <?php endwhile; ?>
          <?php endif; ?>
        </ul>
    </div>
</div>
<div class="small-12 columns nopad services text-center">
    <div class="row medium-row">
        <div class="small-12 columns nopad section-heading-center">
            <?php _e('mūsų paslaugos', 'aukstalipiai'); ?>
        </div>
        <div class="small-12 columns nopad services-list">
            <ul>
              <?php if( have_rows('service') ): ?>
                <?php while( have_rows('service') ): the_row(); ?>

                  <li>
                      <div class="small-12 columns list-image-holder">
                          <img src="<?php the_sub_field('image'); ?>">
                      </div>
                      <div class="small-12 columns services-list-heading">
                          <?php the_sub_field('title'); ?>
                      </div>
                      <div class="small-12 columns services-list-description">
                          <?php the_sub_field('text'); ?>
                      </div>
                  </li>

                <?php endwhile; ?>
              <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
<div class="small-12 columns nopad owl-gallery">
    <div class="owl-one owl-carousel">
      <?php if( have_rows('images_list') ): ?>
        <?php while( have_rows('images_list') ): the_row(); ?>

          <img src="<?php the_sub_field('image'); ?>">

        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="owl-controls">
        <div id="arrow-left"></div>
        <div id="arrow-right"></div>
    </div>
</div>
<div class="small-12 columns customer-feedbacks">
    <div class="row small-row">
        <div class="section-heading-center">
            <?php _e('klientų atsiliepimai', 'aukstalipiai'); ?>
        </div>
        <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
            <div class="orbit-wrapper">
                <ul class="orbit-container">
                  <?php if( have_rows('customer_reviews') ): ?>
                    <?php while( have_rows('customer_reviews') ): the_row(); ?>

                      <li class="is-active orbit-slide">
                          <div class="section-description text-center">
                              <?php the_sub_field('text'); ?>
                          </div>
                          <div class="customer text-center">
                              <?php the_sub_field('name'); ?>
                              <?php if( get_sub_field('company') ): ?>
                                  <span>
                                  <?php the_sub_field('company'); ?>
                                  </span>
                              <?php endif; ?>
                          </div>
                      </li>

                    <?php endwhile; ?>
                  <?php endif; ?>

                </ul>
            </div>
            <nav class="orbit-bullets">
              <?php if( have_rows('customer_reviews') ): ?>
                <?php $i = -1; ?>
                <?php while( have_rows('customer_reviews') ): the_row(); ?>
                  <?php $i++; ?>
                  <?php if( $i == 0) { ?>

                  <button class="is-active" data-slide="<?php echo $i; ?>"></button>

                <?php } else { ?>
                <button data-slide="<?php echo $i; ?>">
                <?php } ?>
                <?php endwhile; ?>
              <?php endif; ?>
            </nav>
        </div>
    </div>
</div>
<div class="small-12 columns nopad clients">
    <div class="row medium-row">
        <div class="small-12 columns nopad section-heading-center">
            <?php _e('mūsų klientai', 'aukstalipiai'); ?>
        </div>
        <div class="small-12 columns nopad owl-logo">
            <div class="owl-two owl-carousel">
              <?php if( have_rows('clients') ): ?>
                <?php while( have_rows('clients') ): the_row(); ?>

                    <?php if( get_sub_field('link') ): ?>

                        <a href="<?php the_sub_field('link'); ?>">
                        <?php endif; ?>
                            <img src="<?php the_sub_field('image'); ?>">
                        </a>


                <?php endwhile; ?>
              <?php endif; ?>
            </div>
            <div class="owl-controls">
                <div id="arrow-left2"></div>
                <div id="arrow-right2"></div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
