<!-- secondary -->
<aside id="secondary">

  <!-- widget -->
  <div class="widget_text widget_custom_html">
    <div class="widget widget_intro">

      <?php get_template_part('template-parts/side-common'); ?>

      <!-- widget_recent -->
      <div class="widget widget_recent">
        <div class="widget-title-wrapper">
          <div class="widget-icon">
            <img src="<?php echo get_template_directory_uri() ?>/img/pc/blog-archive/sidebar-icon_1.svg" alt="">
          </div>
          <div class="widget-title">新着記事</div>
        </div><!-- /.widget-title-wrapper -->
        <div class="wpost-items">
          <?php $recent_query = new WP_Query(
            array(
              'post_type' => 'post',
              'posts_per_page' => 5,
              'orderby' => 'date',
              'order' => 'DESC',
            )
          );
          ?>
          <?php if ($recent_query->have_posts()) : ?>
            <?php while ($recent_query->have_posts()) : ?>
              <?php $recent_query->the_post(); ?>
              <!-- wpost-item -->
              <a class="archive__blog-body wpost-item" href="<?php the_permalink(); ?>">
                <div class="archive__blog-image wpost-item-img">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="">
                  <?php endif; ?>
                </div>
                <div class="archive__blog-text wpost-item-body">
                  <div class="archive__blog-cat wpost-item-cat">
                    <?php $category = get_the_category(); ?>
                    <?php if ($category) : ?>
                      <?php echo $category[0]->cat_name; ?>
                    <?php endif; ?>

                  </div>
                  <!-- お知らせ -->
                  <div class="archive__blog-card-title wpost-item-title">
                    <?php //the_title();
                    echo wp_trim_words(get_the_title(), 21, '…');
                    ?>
                  </div>
                  <div class="archive__blog-date wpost-item-date">
                    <?php the_time('Y.m.d'); ?></p>
                  </div>
                </div><!-- /wpost-item-body -->
              </a><!-- /wpost-item -->
            <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
        </div><!-- /wpost-items -->
      </div>

      <div class="widget widget_category">
        <div class="widget-title-wrapper">
          <div class="widget-icon">
            <img src="<?php echo get_template_directory_uri() ?>/img/pc/blog-archive/sidebar-icon_3.svg" alt="">
          </div>
          <div class="widget-title">カテゴリー</div>
        </div><!-- /.widget-title-wrapper -->
        <ul class="widget_category_list">
          <?php $cats = get_categories();
          foreach ($cats as $cat) :
            $cat_link = get_category_link($cat->ID); ?>
            <li class="widget_category_list_item"><a class="widget_category_list_link" href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->name; ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div><!-- /widget -->
    </div><!-- widget_custom_html -->
  </div><!-- /widget_recent -->
</aside><!-- secondary -->