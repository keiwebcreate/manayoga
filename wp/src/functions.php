<?php  
// 機能拡張
function my_setup() {
  // アイキャッチ機能追加
  add_theme_support('post-thumbnails');
  // rssフィードのurlができる
  add_theme_support('automatic-feed-links');
  // titleタグの自動生成
  add_theme_support('title-tag');
  // 出力をhtml
  add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
  // 抜粋機能追加
  add_post_type_support('page', 'excerpt');
}
add_action("after_setup_theme", "my_setup");

// スクリプト読み込み css,js
function my_script_init() {
  if ( is_front_page() ) {
  }
  wp_enqueue_style("my", get_template_directory_uri() . "/assets/css/style.css", array(), filemtime(get_theme_file_path('assets/css/style.css')), "all");
  wp_enqueue_script("my", get_template_directory_uri() . "/assets/js/script.js", array("jquery"), filemtime( get_theme_file_path( 'assets/js/script.js' ) ), true);
}
add_action("wp_enqueue_scripts", "my_script_init");

/**
 * メニューの登録
 */
function my_menu_init() {
    register_nav_menus(
      array(
        'global' => 'ヘッダーメニュー',
        'drawer' => 'ドロワーメニュー',
      )
    );
  }
  add_action('init', 'my_menu_init');

// カスタムタクソノミーを説明にある順番で並べる
function taxonomy_orderby_description( $orderby, $args ) {
  if ( isset($args['orderby']) && $args['orderby'] === 'description' ) {
      $orderby = 'tt.description';
  }
  return $orderby;
}
add_filter( 'get_terms_orderby', 'taxonomy_orderby_description', 10, 2 );

function custom_breadcrumb_navxt_title($title, $type, $id) {
  // 現在の投稿オブジェクトを取得
  $post = get_post($id);

  // カスタム投稿タイプ 'interview' に限定
  if ($post && $post->post_type === 'interview') {
      // カスタムフィールド 'name' の値を取得
      $custom_name = get_post_meta($post->ID, 'name', true);

      // カスタムフィールド 'name' が設定されていれば、それをタイトルに置き換え
      if (!empty($custom_name)) {
          $title = $custom_name;
      }
  }
  return $title;
}
add_filter('bcn_breadcrumb_title', 'custom_breadcrumb_navxt_title', 10, 3);



?>