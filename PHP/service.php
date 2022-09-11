
<?php
/*
Template Name: Paslaugos
*/
?>

<?php get_header(); ?>

    <div class="intro-bg" style="background: url('<?php the_field('intro_image'); ?>') center center no-repeat;">
        <div class="row duk-row">
            <div class="small-12 columns nopad duk-holder">
                <div class="small-7 nopad columns intro-title hold">
                    <?php the_title(); ?>
                </div>
                <div class="small-12 medium-12 columns nopad intro-title-subtext hold">
                    <ul>
                        <li><a href="<?php echo home_url(); ?>"><?php _e('Pagrindinis', 'aukstalipiai'); ?></a></li>
                        <li><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="services" class="small-12 columns">
        <div class="row row-about">
            <div class="small-12 columns section-heading-center nopad">
                <?php _e('mūsų teikiamos paslaugos', 'aukstalipiai'); ?>
            </div>
            <div class="small-12 columns section-description">
                <?php the_field('about_service'); ?>
            </div>

            <?php
            $counter = 0;
            if( have_rows('service_list') ):
                while ( have_rows('service_list') ) : the_row();
            ?>
            <div class="small-12 columns nopad service-holder">

                <?php if ($counter % 2 === 0) :?>

                    <div class="small-12 medium-6 columns picwlogo nopadleft">
                        <img src="<?php the_sub_field('service_image'); ?>">
                        <span>
                          <img src="<?php the_sub_field('service_icon'); ?>">
                        </span>
                    </div>
                    <div class="small-12 columns medium-6 nopadright service-holder-small">
                        <?php the_sub_field('service_text'); ?>
                    </div>

                <?php else: ?>

                  <div class="small-12 medium-6 columns picwlogo nopadright medium-push-6 columns">
                      <img src="<?php the_sub_field('service_image'); ?>">
                      <span>
                          <img src="<?php the_sub_field('service_icon'); ?>">
                      </span>
                  </div>
                  <div class="small-12 columns medium-6 nopadleft service-holder-small medium-pull-6 columns">
                      <?php the_sub_field('service_text'); ?>
                  </div>
              <?php endif; ?>
            </div>
            <?php
            $counter++;
            endwhile;
            endif; ?>
        </div>
    </div>

<?php get_footer(); ?>
