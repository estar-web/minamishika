<?php get_header(); ?>

<div class="hero">
  <div class="hero-inner hero-archive">
    <div class="hero-content">
      <h2 class="hero-title-jp"><?php the_archive_title(); ?></h2>
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
        $current_cat = get_queried_object();
        $recent_query = new WP_Query(
          array(
            // 'post_type' => 'post',
            // 'posts_per_page' => 2,
            'orderby' => 'date',
            'order' => 'DESC',
            'category_name' => $current_cat->slug,
            'paged' => get_query_var('paged', 1),
          )
        );
        set_query_var( 'recent_query', $recent_query );
        get_template_part('template-parts/summary');
        ?>

      </section><!-- /.archive -->
    </main>
  </div>

  <!-- secondary -->
  <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>