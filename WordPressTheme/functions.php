<?php
// テーマ用のスタイル・スクリプトを登録する関数
function my_theme_enqueue_assets() {

  // Google Fonts の読み込み
  wp_enqueue_style(
    'my-theme-google-fonts', // ハンドル名（識別子）
    'https://fonts.googleapis.com/css2?family=Libre+Caslon+Text:ital,wght@0,400;0,700;1,400&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap',
    array(), // 依存関係なし
    null     // バージョンを null にすることでキャッシュを避ける
  );

  // テーマのメインCSSを読み込み
  wp_enqueue_style(
    'my-theme-style', // ハンドル名
    get_theme_file_uri('/assets/css/style.css'),
    array(),    // 他に依存するCSSがなければ空
    filemtime(get_theme_file_path('/assets/css/style.css')) // 更新ごとにキャッシュクリア
  );

  // jQuery の読み込み（WordPress 同梱版を使うのが推奨）
  wp_enqueue_script(
    'jquery-cdn',
    'https://code.jquery.com/jquery-3.6.0.js',
    array(), // 依存関係なし
    '3.6.0',
    true     // フッターで読み込む
  );

  // テーマのメインJSを読み込み
  wp_enqueue_script(
    'my-theme-script',
    get_theme_file_uri('/assets/js/script.js'),
    array('jquery-cdn'), // jQuery に依存
    filemtime(get_theme_file_path('/assets/js/script.js')), // キャッシュ対策
    true // フッターで読み込み
  );
}

// WordPress にフックする
add_action('wp_enqueue_scripts', 'my_theme_enqueue_assets');

function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );

//アーカイブの表示件数変更
function change_posts_per_page($query) {
  if ( is_admin() || ! $query->is_main_query() )
      return;
  if ( $query->is_archive('news') ) { //カスタム投稿タイプを指定
      $query->set( 'posts_per_page', '8' ); //表示件数を指定
  }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );

function Change_menulabel() {
  global $menu;
  global $submenu;
  $name = 'ブログ';
  $menu[5][0] = $name;
  $submenu['edit.php'][5][0] = $name.'一覧';
  $submenu['edit.php'][10][0] = '新しい'.$name;
  }
  function Change_objectlabel() {
  global $wp_post_types;
  $name = 'ブログ';
  $labels = &$wp_post_types['post']->labels;
  $labels->name = $name;
  $labels->singular_name = $name;
  $labels->add_new = _x('追加', $name);
  $labels->add_new_item = $name.'の新規追加';
  $labels->edit_item = $name.'の編集';
  $labels->new_item = '新規'.$name;
  $labels->view_item = $name.'を表示';
  $labels->search_items = $name.'を検索';
  $labels->not_found = $name.'が見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
  }
  add_action( 'init', 'Change_objectlabel' );
  add_action( 'admin_menu', 'Change_menulabel' );