
<?php
/*
Template Name: DUK
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
  <div class="small-12 columns duk">
      <div class="row duk-medium-row">
          <div class="small-12 columns nopad section-heading-center">
              <?php _e('dažniausiai užduodami klausimai', 'aukstalipiai'); ?>
          </div>
          <div class="small-12 columns section-description">
              <?php the_field('about_questions'); ?>
          </div>
          <div class="small-12 columns nopad">
              <ul class="accordion" data-accordion disabled data-allow-all-closed='true'>
                <?php if( have_rows('questions_list') ): ?>
                  <?php while( have_rows('questions_list') ): the_row(); ?>

                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title"><?php the_sub_field('questions'); ?></a>
                        <div class="accordion-content" data-tab-content>
                            <?php the_sub_field('answer'); ?>
                        </div>
                    </li>

                  <?php endwhile; ?>
                <?php endif; ?>
              </ul>
          </div>
      </div>
  </div>

<?php get_footer(); ?>
