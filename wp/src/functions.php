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

?>