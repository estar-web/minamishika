<?php get_header(); ?>

<?php if (get_post_type() == 'blog') :
  $custom = true;
else :
  $custom = false;
endif; ?>

<div class="hero">
  <div class="hero-inner hero-archive">
    <div class="hero-content">
      <h2 class="hero-title-jp">
        <?php if ($custom == true) : ?>
          スタッフブログ
        <?php else : /*single_cat_title('てｓｔ', true);*/
          $category_list = get_the_category();
          if (!empty($category_list)) {
            echo $category_list[0]->name;
          }
        endif; ?>
      </h2>
      <p class="hero-title-eg">
        <?php if ($custom == true) : ?>
          STAFF BLOG</p>
    <?php else : ?>
      NEWS</p>
    <?php endif; ?>
    </div>
  </div>
</div><!-- /.hero -->

<!-- breadcrumb -->
<?php get_template_part('template-parts/breadcrumb'); ?>

<div id="single-contents" class="container">
  <div id="single-inner">
    <main>
      <?php
      if (have_posts()) :
        while (have_posts()) :
          the_post();
      ?>
          <h3 class="single__title">
            <!-- [見出し1]下層ページのタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル -->
            <?php the_title(); ?>
          </h3><!-- /.single__title -->
          <div class="single__header">
            <div class="single__date"><?php the_time('Y.m.d'); ?></div><!-- /.single__date -->
            <div class="single__category">
              <?php if ($custom == true) :
                $term = get_the_terms(get_the_ID(), 'blog-category')[0]->name;
                echo $term;
              ?>
              <?php else :
                // my_the_post_category();
                // $cats = get_the_category();
                // $category_list = get_the_category();
                // if (!empty($category_list)) {
                echo $category_list[0]->name;
              // }
              // if ($cats) :
              // foreach ($cats as $cat) {
              // echo $cat->name;
              // }
              // endif;
              endif;
              ?>

            </div><!-- /.single__category -->
          </div><!-- /.single__header -->
          <div class="single__body">
            <?php the_content(); ?>
          </div><!-- /.single__body -->

          <div class="pagination s-paginations">
            <?php
            $next_post = get_next_post();
            $prev_post = get_previous_post();
            if ($prev_post) :
            ?>
              <a class="page-numbers prev s-pagination" href="<?php echo get_permalink($prev_post->ID); ?>">前の記事</a>
            <?php endif; ?>
            <a class="page-numbers s-pagination" href="
            <?php if ($custom == true) :
              echo esc_url(home_url('/')); ?>blog">記事一覧</a>
            <?php else :
              echo esc_url(home_url('/')); ?>news">記事一覧</a>
            <?php endif; ?>
          <?php
          if ($next_post) :
          ?>
            <a class="page-numbers next s-pagination" href="<?php echo get_permalink($next_post->ID); ?>">次の記事</a>
          <?php endif; ?>
          </div>
          <!-- /.pagination -->
        <?php endwhile; ?>
      <?php endif; ?>
    </main>
  </div>

  <!-- secondary -->
  <?php get_sidebar('staff-blog'); ?>
</div>

<?php get_footer(); ?>