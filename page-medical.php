<?php get_header(); ?>

<div class="hero">
  <div class="hero-inner hero-medical">
    <div class="hero-content">
      <h2 class="hero-title-jp">診療案内</h2>
      <p class="hero-title-eg">MEDICAL</p>
    </div>
  </div>
</div><!-- /.hero -->

<?php get_template_part('template-parts/breadcrumb'); ?>

<main>
  <!-- 診療ボタン一覧 -->
  <section class="medical-summary">
    <div class="medical-summary__container container">
      <!-- 一般診療一覧 -->
      <?php
      // タクソノミー一覧取得
      $typology_terms = get_terms('typology', array('hide_empty' => false));
      foreach ($typology_terms as $typology) :
        $medical_query = new WP_Query(
          array(
            'post_type' => 'plan',
            'orderby' => 'ID',
            'order' => 'ASC',
            'paged' => (get_query_var('paged')) ? absint(get_query_var('paged')) : 1,
            'tax_query' => array(
              array(
                // 同じタクソノミーのみ表示する
                'taxonomy' => 'typology',
                'field' => 'name',
                'terms'    => $typology->name,
              ),
            ),
          ),
        );
      ?>
        <div class="medical-summary__wrapper">
          <div class="medical-summary__head wow slideInLeft">
            <div class="medical-summary__title"><?php echo $typology->name ?></div>
            <?php if ($typology->slug == 'general') : ?>
              <div class="medical-summary__label is-general">保険対象</div>
            <?php elseif ($typology->slug == 'special') : ?>
              <div class="medical-summary__label is-special">実費</div>
            <?php else : ?>
              <!-- コードなし -->
            <?php endif; ?>
          </div><!-- /.medical-head -->
          <div class="medical-summary__items wow slideInRight">
            <?php if ($medical_query->have_posts()) :
              while ($medical_query->have_posts()) :
                $medical_query->the_post(); ?>
                <div class="medical-summary__item">
                  <a href="#ID-<?php the_ID(); ?>" class="medical-summary__link"><?php the_title(); ?></a>
                </div><!-- /.medical-summary-item -->
            <?php endwhile;
            endif;
            ?>
          </div><!-- /.medical-summary__items -->
        </div><!-- /.medical-summary-wrapper -->
      <?php endforeach; ?>
    </div><!-- /.medical-summary-container -->
  </section><!-- /.medical-summary -->

  <!-- 各診療の詳細 -->
  <?php
  // タクソノミー一覧取得
  $typology_terms = get_terms('typology', array('hide_empty' => false));
  foreach ($typology_terms as $typology) :
  ?>
    <div class="bg-deco-top<?php if ($typology->slug == 'general') : ?> general-bg-top">
    <?php else : ?> special-bg-top">
    <?php endif; ?>
    </div>
    <section <?php if ($typology->slug == 'general') : ?> id="general"
    <?php else : ?> id="special"
    <?php endif; ?> class="medical-details">
      <div class="medical-details__container container">
        <h2 class="medical-details__title c-title-jp wow slideInDown"><?php echo $typology->name ?></h2>
        <!-- 現在取得しているタクソノミーの記事を表示 -->
        <?php
        $medical_query = new WP_Query(
          array(
            'post_type' => 'plan',
            'orderby' => 'ID',
            'order' => 'ASC',
            'paged' => (get_query_var('paged')) ? absint(get_query_var('paged')) : 1,
            'tax_query' => array(
              array(
                // 同じタクソノミーのみ表示する
                'taxonomy' => 'typology',
                'field' => 'name',
                'terms'    => $typology->name,
              ),
            ),
          ),
        );
        if ($medical_query->have_posts()) :
          while ($medical_query->have_posts()) :
            $medical_query->the_post();
        ?>
          <a id="ID-<?php the_ID(); ?>" href="#" class="medical-details__item <?php if ($typology->slug == 'general') : ?> general-detail">
            <?php else : ?> special-detail">
            <?php endif; ?>
            <div class="medical-details__head wow slideInDown">
              <div class="medical-details__heading"><?php the_title(); ?></div>
              <div class="medical-details__description">
                <?php if (get_field('problem')) : ?>
                  <?php the_field('problem'); ?>
                <?php endif; ?>
              </div><!-- /.medical-details-description -->
            </div><!-- /.medical-details-head -->
            <div class="medical-details__body">
              <div class="medical-details__text wow slideInLeft">
                <?php if (get_field('summary')) : ?>
                  <?php the_field('summary'); ?>
                <?php endif; ?>
              </div><!-- /.medical-details__text -->
              <div class="medical-details__image wow slideInRight">
                <?php if (has_post_thumbnail()) :
                  the_post_thumbnail();
                else : ?>
                  <img src="<?php echo get_template_directory_uri() ?>/img/pc/common/noimg.svg" alt="">
                <?php endif; ?>
              </div><!-- /.medical-details__image -->
            </div><!-- /.medical-details-body -->
          </a><!-- /.medical-details-item -->
        <?php endwhile;
        endif;
        ?>
      </div><!-- /.medical-general-container -->
    </section><!-- /.medical-general -->
    <div class="bg-deco-bottom<?php if ($typology->slug == 'general') : ?>  general-bg-bottom">
    <?php else : ?> special-bg-bottom">
    <?php endif; ?></div>
  <?php endforeach; ?>

</main>
<?php get_footer(); ?>