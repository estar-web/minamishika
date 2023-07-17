<?php
function my_setup()
{
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
}
add_action("after_setup_theme", "my_setup");

function my_script_init()
{
  wp_enqueue_style("my", get_template_directory_uri() . "/css/style.css", array(), filemtime(get_theme_file_path('css/style.css')), "all");
  wp_enqueue_style("animation", get_template_directory_uri() . "/css/animate.css", array(), filemtime(get_theme_file_path('css/animate.css')), "all");
  wp_enqueue_script("animation", get_template_directory_uri() . "/js/wow.min.js", array("jquery"), filemtime(get_theme_file_path('js/wow.min.js')), true);
  wp_enqueue_script("my", get_template_directory_uri() . "/js/script.js", array("jquery"), filemtime(get_theme_file_path('js/script.js')), true);
}
add_action("wp_enqueue_scripts", "my_script_init");

/**
 * メニューの登録
 */
function my_menu_init()
{
  register_nav_menus(
    array(
      'global' => 'ヘッダーメニュー',
      'drawer' => 'ドロワーメニュー',
      'footer-1' => 'フッターメニュー1',
      'footer-2' => 'フッターメニュー2',
      'footer-3' => 'フッターメニュー3',
      'footer-4' => 'フッターメニュー4',
      'footer-5' => 'フッターメニュー5',
    )
  );
}
add_action('init', 'my_menu_init');

// wp_nav_menuのliにclass追加
function add_additional_class_on_li($classes, $item, $args)
{
  if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


/* wp_nan_menuのaにclassを追加 */
function add_additional_class_on_a($classes, $item, $args)
{
  if (isset($args->add_a_class)) {
    $classes['class'] = $args->add_a_class;
  }
  return $classes;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'blog'; // 任意のURL
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

function my_widget_init()
{
  register_sidebar(
    array(
      'name' => 'サイドバー', // 表示するエリア名
      'id'   => 'secondary', // id
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      // 'before_widget' => '  <div class="widget_text widget_custom_html">
      // <div class=" widget_intro">',
      'after_widget'  => '</div>',
      'before_title'  => '<div class="widget-title-wrapper">
      <div class="widget-icon">
        <img src="/wp-content/themes/minamishika/img/pc/blog-archive/sidebar-icon_1.svg" alt="">
      </div><div class="widget-title">',
      'after_title'   => '</div></div>'
    )
  );
}
add_action('widgets_init', 'my_widget_init');

function recent_staff_blog()
{
  $recent_query = new WP_Query(
    array(
      'post_type' => 'blog',
      'posts_per_page' => 5,
      'orderby' => 'date',
      'order' => 'DESC',
    )
  );

  if ($recent_query->have_posts()) {
    while ($recent_query->have_posts()) {
      $recent_query->post();
      $post_data .= '<a class="archive__blog-body wpost-item" href="' . get_the_permalink() . '">'
        . get_the_date() . '　'
        . get_the_title() .
        '</a>';
    }
  }
  wp_reset_postdata();

  return $post_data;
}

add_shortcode('recent_staff_blog_shortcode', 'recent_staff_blog');

function my_the_post_category()
{
  $category = get_the_category();
  // if ($category[0]) {
  // if ($anchor == 'custom') {
  // $terms = get_the_terms($recent_query->ID, 'blog-category');
  // echo $terms;
  // } else {
  echo $category[0]->cat_name;
  // }
  // }
}

/**
 * アーカイブタイトル書き換え
 */
function my_archive_title($title)
{

  if (is_category()) { // カテゴリーアーカイブの場合
    $title = single_cat_title('', false);
  } elseif (is_tag()) { // タグアーカイブの場合
    $title = single_tag_title('', false);
  } elseif (is_post_type_archive()) { // 投稿タイプのアーカイブの場合
    $title = post_type_archive_title('', false);
  } elseif (is_tax()) { // タームアーカイブの場合
    $title = single_term_title('', false);
  } elseif (is_author()) { // 作者アーカイブの場合
    $title = get_the_author();
  } elseif (is_date()) { // 日付アーカイブの場合
    $title = '';
    if (get_query_var('year')) {
      $title .= get_query_var('year') . '年';
    }
    if (get_query_var('monthnum')) {
      $title .= get_query_var('monthnum') . '月';
    }
    if (get_query_var('day')) {
      $title .= get_query_var('day') . '日';
    }
  }
  return $title;
};
add_filter('get_the_archive_title', 'my_archive_title');


// Contact Form7の送信ボタンをクリックした後の遷移先設定
add_action('wp_footer', 'add_origin_thanks_page');
function add_origin_thanks_page()
{
  $contact_thanks = home_url('/contact/thanks/');
  $reserve_thanks = home_url('/reservation/thanks/');
  echo <<< EOC
     <script>
        var thanksPage = {
          209: '{$contact_thanks}',
          226: '{$reserve_thanks}',
       };
     document.addEventListener( 'wpcf7mailsent', function( event ) {
       location = thanksPage[event.detail.contactFormId];
     }, false );
     </script>
   EOC;
}

// テンプレートファイルの名前変更
add_filter('page_template_hierarchy', 'my_page_templates');
function my_page_templates($templates)
{
  global $wp_query;

  $template = get_page_template_slug();
  $pagename = $wp_query->query['pagename'];

  if ($pagename && !$template) {
    $pagename = str_replace('/', '-', $pagename);
    $decoded = urldecode($pagename);

    if ($decoded == $pagename) {
      array_unshift($templates, "page-{$pagename}.php");
    }
  }

  return $templates;
}

//問い合わせフォームのカタカナ入力判定
//contact form7入力チェック
function wpcf7_validate_kana($result, $tag)
{

  $name = $tag['name'];
  if ($name == 'kana') {
    $value = isset($_POST[$name]) ? trim($_POST[$name]) : '';

    if (!preg_match("/^[ァ-ヾ]+$/u", $value)) {
      $result->invalidate($tag, "全角カタカナで入力してください。");
    }
  }
  return $result;
}
add_filter('wpcf7_validate_text',  'wpcf7_validate_kana', 20, 2);
add_filter('wpcf7_validate_text*', 'wpcf7_validate_kana', 20, 2);
// add_filter('wpcf7_validate_text',  'wpcf7_validate_kana', 11, 2);
// add_filter('wpcf7_validate_text*', 'wpcf7_validate_kana', 11, 2);

