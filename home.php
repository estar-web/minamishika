<?php get_header(); ?>

<div class="hero">
  <div class="hero-inner hero-archive">
    <div class="hero-content">
      <h2 class="hero-title-jp">お知らせ一覧</h2>
      <p class="hero-title-eg">NEWS</p>
    </div>
  </div>
</div><!-- /.hero -->

<?php get_template_part('template-parts/breadcrumb'); ?>

<div id="contents">
  <div id="inner">
    <main>
      <section class="archive">
        <?php
        $recent_query = new WP_Query(
          array(
            'post_type' => 'post',
            // 'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'DESC',
            'paged' => (get_query_var('paged')) ? absint(get_query_var('paged')) : 1,
          )
        );
        set_query_var('recent_query', $recent_query);
        get_template_part('template-parts/summary');
        ?>

      </section><!-- /.archive -->
    </main>
  </div>

  <!-- secondary -->
  <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>