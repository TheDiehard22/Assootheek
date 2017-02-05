<?php
/*
Template Name: Hypotheken pagina
*/
get_header(); ?>

<section class="content container">
  <div class="row">
    <div class="col-lg-8"> <!-- Left column -->
      <div class="content__wrapper">
        <h1 class="content__heading"><?php the_title() ?></h1>

          <div class="intro__content-wrapper">
            <div class="intro__content">
              <?php
              if (have_posts()) :
                 while (have_posts()) :
                    the_post();
                       the_content();
                 endwhile;
              endif;
              ?>
            </div>
          </div>
      </div>
    </div> <!-- END LEFT COLUMN -->
    <div class="col-lg-4">
      <a href="tel:0640825922">
        <img class="content__belons" src="<?php echo get_template_directory_uri(); ?>/src/img/belmailapp.png" alt="bel, mail of app ons">
      </a>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12">
      <img class="content__hypotheken" src="<?php echo get_template_directory_uri(); ?>/src/img/logos_hypotheken.jpg" alt="Hypotheken">
    </div>
  </div>

</section>

<?php get_footer() ?>
