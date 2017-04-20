<?php get_header(); ?>

<?php include 'slider.php'; ?>

<section class="intro container">
  <div class="intro__wrapper col-lg-8">
    <h1 class="intro__heading"><?php the_title(); ?></h1>
    <span class="intro__subheading">Wie zijn wij?</span>

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
  <div class="col-lg-4 column-mobile">
    <a href="tel:0640825922">
      <img class="content__belons" src="<?php echo get_template_directory_uri(); ?>/src/img/belmailapp.png" alt="bel, mail of app ons">
    </a>
    <script src="https://www.advieskeus.nl/content/banner/89f72ed1-129d-40c1-b697-ef358c9896c3/scoreuitgebreidenreviews/A_AcDBAEAAwQBMAEgASABIAEgDRFjaHJpcy1kcnVpamYAAA/" type="text/javascript"></script>
    <object data="https://rentestanden-nn.campaign.alion.nl/201307_intermediair/gfx/nn-internetsparen-v2-r001-300x250.swf" type="application/x-shockwave-flash" width="300" height="250"><param name="movie" value="https://rentestanden-nn.campaign.alion.nl/201307_intermediair/gfx/nn-internetsparen-v2-r001-300x250.swf"><param name="quality" value="high"><param name="menu" value="false"><param name="height" value="250"><param name="width" value="300"><param name="allowFullScreen" value="true"><param name="allowscriptaccess" value="always"><param name="wmode" value="transparent"><param name="FlashVars" value="clickTag=http://www.assootheek.nl/index.php/contact">
    	<a><img src="https://rentestanden-nn.campaign.alion.nl/201307_intermediair/gfx/nn-internetsparen-v2-r001-300x250.gif" alt="" width="300" height="250" border="0"></a>
    </object>
  </div>
</section>

<section class="newsslider">
  <div class="container">
    <h4 class="newsslider__heading">Nieuws van Assootheek</h4>
  </div>
  <div class="newsslider__wrapper container">
    <div class="flexslider" id="newsslider">
      <ul class="slides">
    <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 4
        );

        $post_query = new WP_Query($args);
        if($post_query->have_posts() ) {
          while($post_query->have_posts() ) {
            $post_query->the_post();
            ?>

              <li>
                <article class="newsslider__item">
                  <div class="newsslider__content">
                    <h5 class="newsslider__title"><?php the_title(); ?></h5>
                      <?php
                        the_content('lees verder', TRUE);
                      ?>
                  </div>
                </article>
              </li>

        <?php
      }
    }
    ?>
  </ul>
    </div>
  </div>
</section>


<?php get_footer() ?>
