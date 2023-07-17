<?php if ($recent_query->have_posts()) : // 記事があれば表示 
?>
  <?php while ($recent_query->have_posts()) : // 記事数分ループ 
  ?>
    <?php $recent_query->the_post(); ?>

    <?php
    $days = 3;                    // NEWを付ける最新記事の期間(日数)
    $today = date_i18n('U');       // 現在の時間
    $entry = get_the_time('U');    // 投稿日の時間
    $term = date('U', ($today - $entry)) / 86400;
    ?>
    <a href="<?php the_permalink(); ?>" class="archive__blog-body<?php if ($days > $term) : ?> is-new<?php endif ?>">
      <figure class="archive__blog-image">
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail(); ?>
        <?php else : ?>
          <img src="<?php echo get_template_directory_uri() ?>/img/pc/blog-archive/blog.png" alt="">
        <?php endif; ?>
      </figure>
      <div class="archive__blog-text">
        <div class="archive__blog-cat">
          <?php
          if (get_post_type() == 'blog') {
            $terms = get_the_terms($recent_query->ID, 'blog-category');
            if ($terms) :
              foreach ($terms as $term) {
                echo $term->name;
              }
            endif;
          } else {
            $cats = get_the_category();
            if ($cats) :
              foreach ($cats as $cat) {
                echo $cat->name;
              }
            endif;
          }
          ?>
        </div>
        <div class="archive__blog-card-title">
          <?php the_title(); ?>
        </div>
        <div class="archive__blog-date">
          <!-- 2020.02.14 -->
          <?php the_time('Y.m.d'); ?></p>
        </div>
      </div><!-- /.archive__blog-text -->
    </a><!-- /.archive__blog-body -->
<?php endwhile;
  // wp_reset_postdata();
  get_template_part('template-parts/pagination');
  // get_template_part('./pagination');
endif;
?>