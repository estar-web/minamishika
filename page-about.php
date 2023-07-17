<?php get_header(); ?>

<div class="hero">
  <div class="hero-inner hero-about">
    <div class="hero-content">
      <h2 class="hero-title-jp">当院について</h2>
      <p class="hero-title-eg">ABOUT OUR CLINIC</p>
    </div>
  </div>
</div><!-- /.hero -->

<?php get_template_part('template-parts/breadcrumb'); ?>

<main>
  <section id="pandf" class="about__pandf">
    <div class="pandf__container">
      <h2 class="pandf__title c-title-jp wow slideInDown">ポリシーと特徴</h2>
      <div class="pandf__contents">
        <div class="pandf__box is-policy wow slideInLeft">
          <h2 class="c-title-eg">POLICY</h2>
          <div class="pandf__lead-txt">コミュニケーションから始まる最適な医療提供</div>
          <p class="pandf__txt">
            当院ではまず患者様から詳しくお話を伺います。<br>
            難しい言葉は使わず、実際に感じている小さな違和感からあらゆる可能性を考え、最適な治療方法をご提案いたします。<br>
            <span class="newline">「どこよりも本音で話せる歯医者さん」を目指し、スタッフ一同、「人間力の向上」にも勤めております。</span>
          </p><!-- /.pandf__txt -->
        </div><!-- /.pandf__box -->
        <div class="pandf__image is-policy wow slideInRight"></div>
      </div><!-- /.pandf__contents -->

      <div class="pandf__contents">
        <div class="pandf__box is-feature wow slideInLeft">
          <h2 class="c-title-eg">FEATURE</h2>
          <div class="pandf__lead-txt">「医療技術の追求」と<br>「通いやすさ」</div>
          <p class="pandf__txt">
            歯の治療において、小さな違和感は大きなストレスにつながります。私たちは常に快適な歯科医療技術の研究を行っております。<br>
            また、「通いやすさ」も医院選びの重要なポイントと考え、<br class="u-hide--sp">2019年のリニューアルを期に更に駅の近くへ場所を移しました。<br>
            <span class="newline">朝から夜までお仕事をされている方のために診療時間を見直し、平日でもご利用いただけるようにいたしました。</span>
          </p><!-- /.pandf__txt -->
        </div><!-- /.pandf__box -->
        <div class="pandf__image is-feature wow slideInRight"></div>
      </div><!-- /.pandf__contents -->
    </div><!-- /.pandf__container -->
  </section><!-- /about__policy-feature -->

  <section id="inside" class="about__inside">
    <h2 class="about__inside-title c-title-jp wow slideInDown">院内の様子</h2>
    <div class="about__inside-cards"><!-- /.about__inside-cards -->
      <figure class="about__inside-card wow slideInLeft">
        <img src="<?php echo get_template_directory_uri() ?>/img/pc/about/about-inside_1.png" alt="">
      </figure>
      <figure class="about__inside-card wow slideInDown">
        <img src="<?php echo get_template_directory_uri() ?>/img/pc/about/about-inside_2.png" alt="">
      </figure>
      <figure class="about__inside-card wow slideInRight">
        <img src="<?php echo get_template_directory_uri() ?>/img/pc/about/about-inside_3.png" alt="">
      </figure>
      <figure class="about__inside-card wow slideInLeft">
        <img src="<?php echo get_template_directory_uri() ?>/img/pc/about/about-inside_4.png" alt="">
      </figure>
      <figure class="about__inside-card wow fadeInUp">
        <img src="<?php echo get_template_directory_uri() ?>/img/pc/about/about-inside_5.png" alt="">
      </figure>
      <figure class="about__inside-card wow slideInRight">
        <img src="<?php echo get_template_directory_uri() ?>/img/pc/about/about-inside_6.png" alt="">
      </figure>
    </div>
  </section><!-- /.about__inside -->
</main>

<?php get_footer(); ?>