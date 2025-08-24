
  <!--フッター-->
  <footer class="footer <?php if ( is_front_page() ) echo 'l-top-footer'; ?>">
    <div class="footer__inner inner">
      <div class="footer__container">
        <a href="index.html" class="footer__logo-link">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/omagarichurch_logo.svg" alt="大曲教会ロゴ" class="footer__logo-img" loading="lazy"
            decoding="async" width="179" height="63">
        </a>
        <nav class="footer__nav">
          <ul class="footer__items">
            <li class="footter__item">
              <a href="news.html" class="footer__link">お知らせ</a>
            </li>
            <li class="footter__item">
              <a href="worship.html" class="footer__link">礼拝案内</a>
            </li>
            <li class="footter__item">
              <a href="about.html" class="footer__link">教会紹介</a>
            </li>
            <li class="footter__item">
              <a href="about.html#faq" class="footer__link">よくある質問</a>
            </li>
            <li class="footter__item">
              <a href="blog.html" class="footer__link">ブログ</a>
            </li>
            <li class="footter__item">
              <a href=" index.html#access" class="footer__link">アクセス</a>
            </li>
            <li class="footter__item">
              <a href="member.html" class="footer__link">会員限定</a>
            </li>
          </ul>
        </nav>
        <div class="footer__copyright">
          <small>© 2025&ensp;Omagari&ensp;church.&ensp;All&ensp;rights&ensp;reserved.</small>
        </div>
      </div>
    </div>
  </footer>
  <a href="index.html" class="page-top-button js-page-top" aria-label="ページトップに移動する"></a>
  <?php wp_footer(); ?>
</body>

</html>