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

  // 閲覧数をカウント
function setPostViews($postID) {
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);

  if ($count == '') {
      $count = 0;
      delete_post_meta($postID, $count_key);
      add_post_meta($postID, $count_key, '0');
  } else {
      $count++;
      update_post_meta($postID, $count_key, $count);
  }
}

// アーカイブタイトルから「カテゴリー:」「タグ:」「月:」などを削除
add_filter( 'get_the_archive_title', function ( $title ) {

  if ( is_category() ) {
      $title = single_cat_title( '', false );

  } elseif ( is_tag() ) {
      $title = single_tag_title( '', false );

  } elseif ( is_tax() ) {
      $title = single_term_title( '', false );

  } elseif ( is_post_type_archive() ) {
      $title = post_type_archive_title( '', false );

  } elseif ( is_author() ) {
      $title = get_the_author();

  } elseif ( is_date() ) {
      if ( is_year() ) {
          $title = get_the_date( 'Y年' );
      } elseif ( is_month() ) {
          $title = get_the_date( 'Y年n月' );
      } elseif ( is_day() ) {
          $title = get_the_date( 'Y年n月j日' );
      }
  }

  return $title;
});

function login_logo() {
  echo '<style type="text/css">
    #login h1 a {
      background: url('.get_template_directory_uri().'/assets/images/common/omagarichurch_logo.svg) no-repeat center;
      background-size: contain;
      width: 266px;
      height: 150px;
    }

  }
  </style>';
}
add_action('login_head', 'login_logo');

function custom_login_logo_url() {
return home_url();
}
add_filter( 'login_headerurl', 'custom_login_logo_url' );

//サムネイルカラム追加
function customize_manage_posts_columns($columns) {
  $columns['thumbnail'] = __('Thumbnail');
  return $columns;
}
add_filter( 'manage_posts_columns', 'customize_manage_posts_columns' );

//サムネイル画像表示
function customize_manage_posts_custom_column($column_name, $post_id) {
  if ( 'thumbnail' == $column_name) {
      $thum = get_the_post_thumbnail($post_id, 'small', array( 'style'=>'width:100px;height:auto;' ));
  } if ( isset($thum) && $thum ) {
      echo $thum;
  } else {
      echo __('None');
  }
}
add_action( 'manage_posts_custom_column', 'customize_manage_posts_custom_column', 10, 2 );


// ダッシュボードにカスタムウィジェットを追加
function my_custom_dashboard_widgets() {
    wp_add_dashboard_widget(
        'my_dashboard_menu', // ウィジェットID
        '管理メニュー',       // タイトル
        'my_dashboard_menu_display' // コールバック
    );
}
add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');

// ウィジェットの中身
function my_dashboard_menu_display() {
    ?>
    <style>
        .my-dashboard__menu {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
            gap: 1rem;
            margin-top: 1rem;
        }
        .my-dashboard__menu-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
            background-color: #d9534f;
            color: #fff !important;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: transform 0.2s, background-color 0.3s;
        }
        .my-dashboard__menu-item:hover {
            transform: translateY(-4px);
            background-color: #c9302c;
        }
        .my-dashboard__icon {
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }
        .my-dashboard__icon {
              font-size: 1.5rem;              /* アイコンサイズ */
              width: 3rem;                    /* 丸の横幅 */
              height: 3rem;                   /* 丸の縦幅 */
              border-radius: 50%;             /* 丸くする */
              background-color: #fff;         /* 背景を白に */
              color: #d9534f;                 /* アイコンの色（赤パネルと統一） */
              display: flex;                  /* アイコンを中央配置 */
              align-items: center;
              justify-content: center;
              margin-bottom: 0.5rem;
              box-shadow: 0 2px 4px rgba(0,0,0,0.1); /* ほんの少し影を付ける */
              transition: background-color 0.3s, color 0.3s;
          }
        /* 会員限定だけ色変更 */
        .my-dashboard__menu-item--restricted {
            background-color: #5bc0de;
        }
        .my-dashboard__menu-item--restricted:hover {
            background-color: #31b0d5;
        }
    </style>

    <div class="my-dashboard__menu">
        <!-- ブログ（通常投稿） -->
        <a href="<?php echo admin_url('edit.php'); ?>" class="my-dashboard__menu-item">
            <div class="my-dashboard__icon">📝</div>
            <span>ブログ</span>
        </a>

        <!-- お知らせ（CPT: news） -->
        <a href="<?php echo admin_url('edit.php?post_type=news'); ?>" class="my-dashboard__menu-item">
            <div class="my-dashboard__icon">📢</div>
            <span>お知らせ</span>
        </a>

        <!-- YouTube（仮: CPT youtube） -->
        <a href="<?php echo admin_url('post.php?post=15&action=edit'); ?>" class="my-dashboard__menu-item">
            <div class="my-dashboard__icon">🎥</div>
            <span>YouTube</span>
        </a>

        <!-- FAQ（仮: CPT faq） -->
        <a href="<?php echo admin_url('post.php?post=11&action=edit'); ?>" class="my-dashboard__menu-item">
            <div class="my-dashboard__icon">❓</div>
            <span>よくある質問</span>
        </a>

        <!-- ギャラリー（仮: CPT gallery） -->
        <a href="<?php echo admin_url('post.php?post=8&action=edit'); ?>" class="my-dashboard__menu-item">
            <div class="my-dashboard__icon">🖼️</div>
            <span>ギャラリー</span>
        </a>

        <!-- 会員限定（仮: CPT members） -->
        <a href="<?php echo admin_url('post.php?post=13&action=edit'); ?>" class="my-dashboard__menu-item my-dashboard__menu-item--restricted">
            <div class="my-dashboard__icon">🔑</div>
            <span>会員限定</span>
        </a>
    </div>
    <?php
}



