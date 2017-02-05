<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <title>Assootheek</title>

    <meta name="theme-color" content="#e64101">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=0">
    <meta name="description" content="Oneindig financieel advies - Uw adviseur voor hypotheken sparen en verzekeren.">
    <meta name="keywords" content="een, wij, van, voor, assootheek, met, adviseur, hypotheken, verzekeren, medemblik, hypotheekadviseur">

    <?php wp_head(); ?>

  </head>
  <body>
    <?php include_once("analyticstracking.php") ?>
    <header class="header">
      <div class="header__top">
        <div class="container">
          <ul class="header__social">
            <li class="header__social-listitem">
              <a href="https://www.facebook.com/Assootheek-457723157762404/" target="_blank" class="header__social-link header__social-link--facebook">bekijk ons op facebook</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="header__middle container">
        <a class="header__logo-wrapper" href="/">
          <img src="<?php echo get_template_directory_uri(); ?>/src/img/logo-text.jpg" alt="logo assootheek" class="header__logo">
        </a>
        <div class="header__cta-wrapper">
          <a href="tel:0640825922" class="header__cta">bel ons</a>
        </div>
      </div>
      <div class="header__bottom">
        <div class="container">
          <i class="header__hamburger"></i>
          <a class="header__logo-small-wrapper" href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/src/img/logo-notext.jpg" alt="logo assootheek" class="header__logo-small">
          </a>
          <ul class="header__menu">
            <li class="header__menuitem"><a href="/" class="header__menulink">Ons kantoor</a></li>
            <li class="header__menuitem"><a href="/hypotheken" class="header__menulink">Hypotheken</a></li>
            <li class="header__menuitem"><a href="/particulier" class="header__menulink">Particulier</a></li>
            <li class="header__menuitem"><a href="/zakelijk" class="header__menulink">Zakelijk</a></li>
            <li class="header__menuitem"><a href="/contact" class="header__menulink">Contact</a></li>
            <li class="header__menuitem header__menuitem--call">
              <a href="tel:0640825922" class="header__menulink">
                <i class="header__callme"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </header>
