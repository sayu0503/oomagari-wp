<!DOCTYPE html>
<html lang="ja">

<head>

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <?php wp_head(); ?>
</head>
<body>
<header class="header js-header">
    <div class="header__inner">
    <?php $tag = ( is_front_page() ? 'h1' : 'div' ); ?>
<<?php echo $tag; ?> class="header__logo">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__logo-link">
    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/omagarichurch_logo.svg"
         alt="大曲教会ロゴ" decoding="async" class="header__logo-icon" width="179" height="63">
  </a>
</<?php echo $tag; ?>>

      <button type="button" class="header__drawer hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <nav class="header__nav">
        <ul class="header__items">
          <li class="header__item">
            <a href="<?php echo esc_url(home_url('/news'))?>" class="header__link">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/bell_logo.svg" alt="ベルのロゴ" decoding="async" class="header__link-icon"
                width="20" height="22">
              <span class="header__link-label">お知らせ</span>
            </a>
          </li>
          <li class="header__item">
            <a href="<?php echo esc_url(home_url('/worship'))?>" class="header__link">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/church_logo.svg" alt="教会のロゴ" decoding="async" class="header__link-icon"
                width="20" height="22">
              <span class="header__link-label">礼拝案内</span>
            </a>
          </li>
          <li class="header__item">
            <a href="<?php echo esc_url(home_url('/about'))?>" class="header__link">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/bible_logo.svg" alt="聖書のロゴ" decoding="async" class="header__link-icon"
                width="20" height="22">
              <span class="header__link-label">教会紹介</span>
            </a>
          </li>
          <li class="header__item">
            <a href="<?php echo esc_url(home_url('/about/#faq')); ?>" class="header__link">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/faq_logo.svg" alt="Q&A" decoding="async" class="header__link-icon header__link-icon--size"
                width="20" height="22">
              <span class="header__link-label">よくある質問</span>
            </a>
          </li>
          <li class="header__item">
            <a href="<?php echo esc_url(home_url('/blog'))?>" class="header__link">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/note_logo.svg" alt="ノートのロゴ" decoding="async" class="header__link-icon header__link-icon--size"
                width="20" height="22">
              <span class="header__link-label">ブログ</span>
            </a>
          </li>
          <li class="header__item">
            <a href="<?php echo esc_url(home_url('/#access')); ?>" class="header__link">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/access_logo.svg" alt="アクセスのロゴ" decoding="async" class="header__link-icon"
                width="20" height="22">
              <span class="header__link-label">アクセス</span>
            </a>
          </li>
          <li class="header__item">
            <a href="<?php echo esc_url(home_url('/member'))?>" class="header__link">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/key_logo.svg" alt="教会のロゴ" decoding="async" class="header__link-icon"
                width="20" height="22">
              <span class="header__link-label">会員限定</span>
            </a>
          </li>
        </ul>
      </nav>
      <nav class="header__sp-nav sp-nav js-sp-nav">
        <div class="sp-nav__inner">
          <ul class="sp-nav__items">
            <li class="sp-nav__item">
              <a href="<?php echo esc_url(home_url('/news'))?>" class="sp-nav__link">お知らせ</a>
            </li>
            <li class="sp-nav__item">
              <a href="<?php echo esc_url(home_url('/worship'))?>" class="sp-nav__link">礼拝案内</a>
            </li>
            <li class="sp-nav__item">
              <a href="<?php echo esc_url(home_url('/about'))?>" class="sp-nav__link">教会紹介</a>
            </li>
            <li class="sp-nav__item">
              <a href="<?php echo esc_url(home_url('/about/#faq')); ?>" class="sp-nav__link">よくある質問</a>
            </li>
            <li class="sp-nav__item">
              <a href="<?php echo esc_url(home_url('/blog'))?>" class="sp-nav__link"> ブログ</a>
            </li>
            <li class="sp-nav__item">
              <a href="<?php echo esc_url(home_url('/#access')); ?>" class="sp-nav__link">アクセス</a>
            </li>
            <li class="sp-nav__item">
              <a href="<?php echo esc_url(home_url('/member'))?>" class="sp-nav__link">会員限定</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
