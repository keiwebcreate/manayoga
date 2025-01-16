<?php
// 機能拡張
function my_setup()
{
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
function my_script_init()
{
  if (is_front_page()) {
    wp_enqueue_style("swiper", "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css", array(), '1.0.0', "all");
    wp_enqueue_script("swiper-js", "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js", array(), '1.0.0', true);
    wp_enqueue_script("my-swiper", get_template_directory_uri() . "/assets/js/swiper.js", array(), filemtime( get_theme_file_path( '/assets/js/swiper.js' ) ), true);
  }
  wp_enqueue_style("my", get_template_directory_uri() . "/assets/css/style.css", array(), filemtime(get_theme_file_path('assets/css/style.css')), "all");
  wp_enqueue_script("my", get_template_directory_uri() . "/assets/js/script.js", array("jquery"), filemtime(get_theme_file_path('assets/js/script.js')), true);
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
    )
  );
}
add_action('init', 'my_menu_init');

// カスタムタクソノミーを説明にある順番で並べる
function taxonomy_orderby_description($orderby, $args)
{
  if (isset($args['orderby']) && $args['orderby'] === 'description') {
    $orderby = 'tt.description';
  }
  return $orderby;
}
add_filter('get_terms_orderby', 'taxonomy_orderby_description', 10, 2);

function custom_breadcrumb_navxt_title($title, $type, $id)
{
  // 現在の投稿オブジェクトを取得
  $post = get_post($id);

  // カスタム投稿タイプ 'interview' に限定
  if ($post && $post->post_type === 'interview2') {
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


// archive.phpのスマホ時とPC時の表示件数の変更用の関数
function is_mobile()
{
  $useragents = array(
    'iPhone',          // iPhone
    'iPod',            // iPod touch
    '^(?=.*Android)(?=.*Mobile)', // 1.5+ Android
    'dream',           // Pre 1.5 Android
    'CUPCAKE',         // 1.5+ Android
    'blackberry9500',  // Storm
    'blackberry9530',  // Storm
    'blackberry9520',  // Storm v2
    'blackberry9550',  // Storm v2
    'blackberry9800',  // Torch
    'webOS',           // Palm Pre Experimental
    'incognito',       // Other iPhone browser
    'webmate'          // Other iPhone browser
  );
  $pattern = '/' . implode('|', $useragents) . '/i';
  return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
};

function is_tablet() {
    // Checks for tablet devices like iPad mini
    $useragents = array(
        'iPad',                 // iPad mini を含む
        'Android\.*Tablet',     // Android タブレット
        'Silk\/.*Tablet',       // Amazon Silk タブレットブラウザ
        'Kindle\/.*Tablet',     // Kindle タブレット
    );
    $pattern = '/' . implode('|', $useragents) . '/i'; // エスケープしたパターンを使用
    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}



function mobile_posts_per_page($query)
{
  if (!is_admin() && is_mobile() && $query->is_main_query()) {
    $query->set('posts_per_page', 5); //5件表示
  }
}
add_action('pre_get_posts', 'mobile_posts_per_page');

add_action('pre_get_posts', 'my_pre_get_posts');

function my_pre_get_posts($query)
{
  if (!is_admin() && $query->is_main_query() && is_post_type_archive('faq')) {
    $query->set('posts_per_page', 8);
  }
}

add_action('pre_get_posts', 'my_pre_get_posts_mobile');

function my_pre_get_posts_mobile($query)
{
  if (!is_admin() && is_mobile() && $query->is_main_query() && is_post_type_archive('faq')) {
    $query->set('posts_per_page', 6);
  }
}

//カスタムリンクでショートコードを使えるようにする
add_filter('nav_menu_link_attributes', 'enable_link_shortcodes', 10, 3);
function enable_link_shortcodes($atts, $item, $args)
{
	$atts['href'] = do_shortcode($atts['href']);
	return $atts;
}

//サイト（ホーム）URLを返すショートコード[home]を作る
add_shortcode('home', 'baseurl_shortcode');
function baseurl_shortcode($atts)
{
	return home_url();
}

//自動補完されるhttp://、またはhttps://の文字列を取り除く
add_action('wp_update_nav_menu_item', 'remove_http_str', 10, 3);
function remove_http_str($menu_id, $menu_item_db_id, $args)
{
	if ('custom' === $args['menu-item-type']) {
		if (strpos($args['menu-item-url'], '[home]') !== false) {
			update_post_meta($menu_item_db_id, '_menu_item_url', str_replace(array('http://', 'https://'), '', esc_url_raw($args['menu-item-url'])));
		}
	}
}