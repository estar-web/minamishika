<?php if (paginate_links()) : //ページが1ページ以上あれば以下を表示
?>
  <!-- pagination -->
  <div class="pagination">
    <?php
    echo paginate_links(
      array(
        'end_size' => 1,
        'mid_size' => 4,
        'prev_next' => true,
        'prev_text' => '前へ',
        'next_text' => '次へ',
        'base' => get_pagenum_link(1) . '%_%',
        // 'format' => 'page/%#%',
        'current' => max( 1, get_query_var( 'paged' ) ),
      )
    );
    ?>
  </div><!-- /pagination -->
<?php endif; ?>