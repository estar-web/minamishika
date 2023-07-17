<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css" media="screen and (max-width:767px)">
  <!-- FontAwesome -->
  <link href="https://use.fontawesome.com/releases/v6.3.0/css/all.css" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>
  <div class="wrapper">
    <header id="js-header" class="header">
      <div class="inner">
        <h1 class="header__logo">
          <img class="header__logo-image" src="<?php echo get_template_directory_uri() ?>/img/pc/top/logo.svg" alt="みなみ歯科クリニック">
        </h1><!-- /.header__logo -->
        <nav class="header__nav">
          <button id="js-toggle" class="header-burger" data-target="for-drawer" aria-label="menu">
            <span class="header-burgerInline"></span>
            <span class="header-burgerInline"></span>
            <span class="header-burgerInline"></span>
          </button>
          <div id="#js-overlay" class="drawer-cover"></div><!-- /.drawer-cover -->
          
          <ul class="header-navList for-drawer">
            <li class="header__nav-item">
              <a href="<?php echo esc_url(home_url('/')); ?>" class="header__nav-link
              <?php if (is_front_page()) : ?> is-current <?php endif ?>
              ">
                ホーム
              </a>
            </li>
            <li class="header__nav-item">
              <a href="<?php echo esc_url(home_url('/')); ?>about" class="header__nav-link js-navLink
                <?php if (is_page('about')) : ?> is-current <?php endif ?>
                ">
                当院について
              </a>
            </li>
            <li class="header__nav-item">
              <a href="<?php echo esc_url(home_url('/')); ?>medical" class="header__nav-link js-navLink
                <?php if (is_page('medical')) : ?> is-current <?php endif ?>
                ">
                診療案内
              </a>
            </li>
            <li class="header__nav-item">
              <a href="<?php echo esc_url(home_url('/')); ?>staff" class="header__nav-link js-navLink
                <?php if (is_page('staff')) : ?> is-current <?php endif ?>
                ">
                スタッフ紹介
              </a>
            </li>
            <li class="header__nav-item">
              <a href="<?php echo esc_url(home_url('/')); ?>blog" class="header__nav-link js-navLink
                <?php if (get_post_type() == 'blog'): /*(is_archive('blog') || is_singular('blog')) :*/ ?> is-current <?php endif ?>
                ">
                スタッフブログ
              </a>
            </li>
            <li class="header__nav-item">
              <a href="<?php echo esc_url(home_url('/')); ?>contact" class="header__nav-link js-navLink
                <?php /*if (is_page('contact'))*/if(strstr($_SERVER['REQUEST_URI'], 'contact')) : ?> is-current <?php endif ?>
                ">
                お問い合わせ
              </a>
            </li>
          </ul>
        </nav><!-- /.header__nav -->
        <div class="header__info">
          <div class="header__info-access">
            〒166-0001 東京都杉並区阿佐谷北7-3-1
          </div><!-- /.header__info-access -->
          <!-- <div class="c-tel-number">03-1234-5678</div> -->
          <a href="tel:03-1234-5678" class="c-tel-number">03-1234-5678</a>
          <!-- /.c-tel-number -->
        </div><!-- /.header__info -->
      </div>
    </header><!-- /.header -->

    <div class="sp-bottom">
      <div class="c-fixed-part">
        <div class="c-fixed-info u-show--sp">
          <div class="c-tel">
            <div class="c-tel-number b-parts">
              03-1234-5678
            </div><!-- /.c-tel-number -->
          </div><!-- /.c-tel -->
          <div class="c-time b-parts">
            (年中無休 AM9:00〜PM22:00)
          </div><!-- /.c-time -->
        </div><!-- /.c-fixed-info -->
        <div class="btn__to-reserve">
          <a href="<?php echo esc_url(home_url('/')); ?>reservation" class="c-btn__web-reserve">
            <figure class="c-btn__icon">
              <img src="<?php echo get_template_directory_uri() ?>/img/pc/fix/reserve-btn-icon.svg" alt="">
            </figure>
            <div class="c-btn__txt">
              <span class="c-btn__txt-accent">WEB予約</span><br>はこちら
            </div><!-- /.c-btn__txt -->
          </a><!-- /.c-btn__web-button -->
        </div><!-- /.btn__to-reserve -->
      </div><!-- /.c-fixed-part -->
    </div><!-- /.sp-bottom -->