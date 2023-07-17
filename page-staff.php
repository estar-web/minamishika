<?php get_header(); ?>

<div class="hero">
  <div class="hero-inner hero-staff">
    <div class="hero-content">
      <h2 class="hero-title-jp">スタッフ紹介</h2>
      <p class="hero-title-eg">STAFF</p>
    </div>
  </div>
</div><!-- /.hero -->

<!-- breadcrumb -->
<?php get_template_part('template-parts/breadcrumb'); ?>

<main>
  <!-- 院長あいさつ -->
  <section id="greeting" class="section staff-greeting">
    <div class="container staff-greeting__container">
      <h2 class="c-title-jp wow slideInDown">院長のあいさつ</h2>
      <div class="staff-greeting__wrapper">
        <div class="staff-greeting__massage wow slideInLeft">
          <h3 class="staff-greeting__lead-txt">
            気軽に相談できる<br>街の歯医者さんでありたい。
          </h3>
          <div class="staff-greeting__txt">
            当院は治療はもちろん、予防歯科にも力を入れておりますので、お口に関する相談だけでもお越しいただきたいと考えております。
            <div class="newline"></div>
            「患部を直すこと」より「未然に防ぐこと」が最も良い歯科医療と言えますので、些細なことでも気軽に話せる街の歯医者さんとして、明るい街づくりに貢献していきたいと考えております。
          </div><!-- /.staff-greeting__txt -->
          <div class="staff-greeting__signature">
            みなみ歯科クリニック<br>院長　南 俊雄
          </div><!-- /.staff-greeting__signature -->
        </div><!-- /.staff-greeting__massage -->
        <figure class="staff-greeting__face wow slideInRight">
          <img src="<?php echo get_template_directory_uri() ?>/img/pc/staff/staff1.png" alt="">
        </figure><!-- /.staff-greeting__face -->
        <div class="staff-greeting__profile wow slideInLeft">
          <dl class="staff-greeting__list">
            <h4 class="staff-greeting__list-title">経歴</h4>
            <div class="staff-greeting__list-wrapper">
              <dt class="staff-greeting__list-year">2004年</dt>
              <dd class="staff-greeting__list-summary">東京医科歯科大学歯学部 卒業</dd>
            </div><!-- /.staff-greeting__list-wrapper -->
            <div class="staff-greeting__list-wrapper">
              <dt class="staff-greeting__list-year">2008年</dt>
              <dd class="staff-greeting__list-summary">東京歯科大学歯学研究科大学院修了<br>博士(歯学)取得</dd>
            </div><!-- /.staff-greeting__list-wrapper -->
            <div class="staff-greeting__list-wrapper">
              <dt class="staff-greeting__list-year">2012年</dt>
              <dd class="staff-greeting__list-summary">みなみ歯科クリニック 開院</dd>
            </div><!-- /.staff-greeting__list-wrapper -->
          </dl><!-- /.staff-greeting__list -->

          <dl class="staff-greeting__list">
            <h4 class="staff-greeting__list-title">資格</h4>
            <div class="staff-greeting__list-wrapper">
              <dd class="staff-greeting__list-summary">歯科医師臨床研修指導歯科医</dd>
            </div><!-- /.staff-greeting__list-wrapper -->
            <div class="staff-greeting__list-wrapper">
              <dd class="staff-greeting__list-summary">博士(歯学)</dd>
            </div><!-- /.staff-greeting__list-wrapper -->
            <div class="staff-greeting__list-wrapper">
              <dd class="staff-greeting__list-summary">衛生検査技師</dd>
            </div><!-- /.staff-greeting__list-wrapper -->
          </dl><!-- /.staff-greeting__list -->
        </div><!-- /.staff-greeting__profile -->
      </div><!-- /.staff-greeting__wrapper -->
    </div><!-- /.staff-greeting__container -->
  </section><!-- /.staff-greeting -->

  <!-- スライダー -->
  <section class="section staff-slider">
    <div class="swiper-container staff-swiper">
      <div class="swiper-wrapper staff-swiper-wrapper">
        <div class="swiper-slide staff-slide"><img src="<?php echo get_template_directory_uri() ?>/img/pc/staff/staff-slider2.png" alt=""></div>
        <div class="swiper-slide staff-slide"><img src="<?php echo get_template_directory_uri() ?>/img/pc/staff/staff-slider3.png" alt=""></div>
        <div class="swiper-slide staff-slide"><img src="<?php echo get_template_directory_uri() ?>/img/pc/staff/staff-slider4.png" alt=""></div>
        <div class="swiper-slide staff-slide"><img src="<?php echo get_template_directory_uri() ?>/img/pc/staff/staff-slider1.png" alt=""></div>
        <div class="swiper-slide staff-slide"><img src="<?php echo get_template_directory_uri() ?>/img/pc/staff/staff-slider5.png" alt=""></div>
      </div>
    </div>
  </section><!-- /.staff-swiper -->

  <!-- スタッフ紹介 -->
  <section id="intro" class="section staff-intro">
    <div class="container staff-intro__container">
      <h2 class="c-title-jp wow slideInDown">スタッフ紹介</h2>

      <?php
      // タクソノミー一覧取得
      $position_terms = get_terms('position', array(
        'hide_empty' => false,
        'orderby' => 'ID',
      ));
      foreach ($position_terms as $position) :
      ?>
        <dl class="staff-intro__list">
          <h4 class="staff-intro__title"><?php echo $position->name ?></h4>
          <div class="staff-intro__wrapper">
            <?php
            $position_query = new WP_Query(
              array(
                'post_type' => 'staffs',
                'orderby' => 'ID',
                'order' => 'ASC',
                'paged' => (get_query_var('paged')) ? absint(get_query_var('paged')) : 1,
                'tax_query' => array(
                  array(
                    // 同じタクソノミーのみ表示する
                    'taxonomy' => 'position',
                    'field' => 'name',
                    'terms'    => $position->name,
                  ),
                ),
              ),
            );
            if ($position_query->have_posts()) :
              while ($position_query->have_posts()) :
                $position_query->the_post();
            ?>
                <!-- <div class="staff-intro__item"> -->
                <a href="#" class="staff-intro__item wow slideInDown js-wow">
                  <dt class="staff-intro__face">
                    <?php if (has_post_thumbnail()) :
                      the_post_thumbnail();
                    else : ?>
                      <img src="<?php echo get_template_directory_uri() ?>/img/pc/common/noimg.svg" alt="">
                    <?php endif; ?>
                  </dt>
                  <dd class="staff-intro__profile">
                    <div class="staff-intro__head">
                      <div class="staff-intro__post"><?php echo $position->name ?></div>
                      <div class="staff-intro__name">
                        <?php the_title(); ?> </div>
                    </div><!-- /.staff-intro__head -->
                    <table class="profile-table">
                      <tbody class="profile-table-body">
                        <tr class="profile-row">
                          <th class="profile-title">出身地</th>
                          <td class="profile-data">
                            <?php if (get_field('birthplace')) : ?>
                              <?php the_field('birthplace'); ?>
                            <?php endif; ?>
                          </td>
                        </tr>
                        <tr class="profile-row">
                          <th class="profile-title">趣味</th>
                          <td class="profile-data">
                            <?php if (get_field('tastes')) : ?>
                              <?php the_field('tastes'); ?>
                            <?php endif; ?>

                          </td>
                        </tr>
                        <tr class="profile-row">
                          <th class="profile-title">好きな食べ物</th>
                          <td class="profile-data">
                            <?php if (get_field('food')) : ?>
                              <?php the_field('food'); ?>
                            <?php endif; ?>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </dd>
                </a>
                <!-- </div> -->

            <?php endwhile;
            endif;
            ?>
            </a><!-- /.staff-intro__wrapper -->
        </dl>
      <?php endforeach; ?>
    </div><!-- /.staff-intro__container -->
  </section><!-- /.staff-intro -->

</main>
<?php get_footer(); ?>