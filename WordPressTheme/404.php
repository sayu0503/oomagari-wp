<?php get_header(); ?>
<section class="page-404 l-page-404">
      <div class="page-404__inner inner">
        <div class="page-404__content">
          <h1 class="page-404__image">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/404.webp" type="image/webp">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/404.png" alt="404エラーページ"
            loading="lazy" decoding="async" width="733" height="426">
          </picture>
          </h1>
          <div class="page-404__text-box">
            <p class="page-404__text">お探しのページが<br class="u-mobile">見つかりませんでした。</p>
            <div class="page-404__btn">
              <a href="<?php echo esc_url(home_url('/'))?>" class="button">トップに戻る</a>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>