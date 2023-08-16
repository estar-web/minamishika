<?php get_header(); ?>

<div class="hero">
  <div class="hero-inner hero-contact">
    <div class="hero-content">
      <h2 class="hero-title-jp">お問い合わせ</h2>
      <p class="hero-title-eg">CONTACT</p>
    </div>
  </div>
</div><!-- /.hero -->

<!-- breadcrumb -->
<?php get_template_part('template-parts/breadcrumb'); ?>

<main>
  <section class="contact__announce">
    <div class="container">
      <p class="contact__announce-txt">
        お急ぎの方は、お電話(TEL 03-1234-5678)での連絡がスムーズです。<br>
        以下のフォームからお問い合わせ頂いた場合、ご連絡が2～3日後になる場合がございます。<br>
        また、メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。 <br>
        <span class="contact__announce-accent">
          ※3営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。
        </span><!-- /.contact__announce-accent -->
      </p><!-- /.contact__announce-txt -->
    </section><!-- /.contact__announce -->
  
    <section class="contact__form">
      <div class="container">
        <h2 class="c-title-jp contact__form-title wow slideInDown">お問い合わせ<br class="u-show--sp">フォーム</h2><!-- /.contact__form-title -->
    
        <div class="contact-content wow slideInDown">
          <!-- <form action="" method="post" id="js-contactForm"> -->
            <!-- <dl class="contact-list"> -->
              <?php the_content(); ?>
            <!-- </dl>/.contact-list -->
          <!-- </form> -->
        </div><!-- /.contact__content -->
        <div id="js-error" class="contact__error-message">
          <p>入力内容に問題があります。確認して再度お試しください。</p>
        </div>
      </div><!-- /.container -->
    </div><!-- /.container -->
  </section><!-- /.contact__form -->
</main>

<?php get_footer(); ?>