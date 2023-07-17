<?php get_header(); ?>

<div class="hero">
  <div class="hero-inner hero-reserve">
    <div class="hero-content">
      <h2 class="hero-title-jp">WEB予約</h2>
      <p class="hero-title-eg">RESERVE</p>
    </div>
  </div>
</div><!-- /.hero -->

<!-- breadcrumb -->
<?php get_template_part('template-parts/breadcrumb'); ?>


<main>
  <section class="reserve__message">
    <h2 class="reserve__message-head">お電話でのご予約/ご相談</h2><!-- /.reserve__message-head -->
    <div class="c-tel reserve__tel">
      <div class="c-tel-number">
        03-1234-5678
      </div><!-- /.c-tel-number -->
    </div><!-- /.c-tel -->
    <div class="c-time reserve__time">
      (年中無休 AM9:00〜PM22:00)
    </div><!-- /.c-time -->
    <p class="reserve__announce-txt">
      お急ぎの方は電話での連絡がスムーズです。<br>
      混雑状況によっては当日受診をご利用いただけない場合がございます。<br>
      あらかじめご了承ください。
    </p><!-- /.reserve__announce-txt -->
    <h2 class="reserve__message-head">メールでのご予約/ご相談</h2><!-- /.reserve__message-head -->
    <p class="reserve__announce-txt">
      【ご予約に関しての注意点】<br>
      メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。<br>
      ※24時間以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。
    </p><!-- /.reserve__announce-txt -->
  </section><!-- /.reserve__announce -->

  <section class="reserve__form">
    <h2 class="c-title-jp contact__form-title wow slideInDown">予約フォーム</h2><!-- /.contact__form-title -->

    <div class="contact-content reserve-content wow slideInDown">
      <?php the_content('reserve');?>
      <!-- <form action="" method="post" id="js-reserveForm">
        
      </form> -->
    </div><!-- /.contact__content -->
    <div id="js-error" class="contact__error-message">
      <p>入力内容に問題があります。確認して再度お試しください。</p>
    </div>
  </section><!-- /.contact__form -->
</main>

<?php get_footer(); ?>