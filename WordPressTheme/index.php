<?php get_header(); ?>
  <main>
    <!--FV-->
    <div class="fv" id="js-fv">
      <div class="fv__inner">
        <div class="fv__title-box">
          <p class="fv__title">大曲教会へ<br class="u-mobile">ようこそ</p>
          <p class="fv__subtitle">疲れた者、重荷を負う者は、<br class="u-mobile">だれでもわたしのもとに来なさい。<br class="u-mobile">休ませてあげよう。<br>
            &minus; マタイによる福音書１１章２８節 &minus;</p>
        </div>
      </div>
    </div>

    <!--お知らせ-->
    <section class="top-news l-top-news">
  <div class="top-news__inner inner">
    <div class="top-news__section-header">
      <div class="section-header">
        <h2 class="section-header__title">お知らせ</h2>
      </div>
    </div>

    <div class="top-news__items news__items">
      <?php
      $args = array(
        'post_type'      => 'news',       // カスタム投稿タイプ名
        'posts_per_page' => 3,            // 表示件数
        'orderby'        => 'date',
        'order'          => 'DESC',
      );
      $news_query = new WP_Query( $args );

      if ( $news_query->have_posts() ) :
        while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="news-item">
            <div class="news-item__meta">
              <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>" class="news-item__date">
                <?php echo esc_html( get_the_date( 'Y年n月j日' ) ); ?>
              </time>
            </div>
            <h3 class="news-item__title"><?php the_title(); ?></h3>
          </a>
        <?php endwhile;
      else : ?>
        <p>現在お知らせはありません。</p>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
    </div>

    <div class="top-news__btn">
      <a href="<?php echo esc_url( home_url( '/news' ) ); ?>" class="button">詳しくはこちら</a>
    </div>
  </div>
</section>


    <!--礼拝のご案内-->
    <section class="top-worship l-top-worship">
      <div class="top-worship__inner inner">
        <div class="top-worship__section-header">
          <div class="section-header">
            <h2 class="section-header__title">礼拝案内</h2>
          </div>
        </div>
        <div class="top-worship__block">
          <div class="top-worship-info">
            <div class="top-worship-info__text">
              <p class="top-worship-info__description">
                毎週の礼拝や集会を通して、神さまのことばに耳を傾け、心を整える時間を大切にしています。<br>
                どなたでもご参加いただけます。
              </p>
            </div>
            <div class="top-worship-time">
              <h3 class="top-worship-time__title">礼拝時間</h3>
              <ul class="top-worship-time__list">
                <li class="top-worship-time__item"><span>主日礼拝：</span>日曜日&ensp;午前10時15分</li>
                <li class="top-worship-time__item"><span>聖餐式：</span>第2日曜日</li>
                <li class="top-worship-time__item"><span>朝の祈り会：</span>水曜日&ensp;午前10時30分</li>
                <li class="top-worship-time__item"><span>夕の祈り会：</span>水曜日&ensp;午後7時30分</li>
              </ul>
            </div>
            <div class="top-worship__btn">
              <a href="<?php echo esc_url(home_url('/worship'))?>" class="button button--left">詳しくはこちら</a>
            </div>
          </div>
          <div class="top-worship-info__image">
          <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/worship_img1.webp" type="image/webp">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/worship_img1.jpg"
              alt="教会の礼拝堂の様子" decoding="async" loading="lazy" width="714" height="509">
        </picture>
          </div>
        </div>
      </div>
    </section>

    <!--教会学校-->
    <section class="top-school l-top-school">
      <div class="top-school__inner inner">
        <div class="top-school__section-header">
          <div class="section-header">
            <h2 class="section-header__title">教会学校</h2>
          </div>
        </div>
        <div class="top-school-info">
          <div class="top-school-info__image">
          <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/kids.webp" type="image/webp">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/kids.jpg"
              alt="子どもが聖書を読んでいるイラスト" decoding="async" loading="lazy" width="436" height="366">
        </picture>
          </div>
          <div class="top-school-info__text">
            <p class="top-school-info__time"><span>毎週日曜日</span>&ensp;9:15〜10:00</p>
            <p class="top-school-info__description">
              毎週日曜日の朝、子ども向けの礼拝を行っています。讃美歌や聖書のお話、楽しい工作などを通して、
              信仰と優しい心を育みます。どなたでもお気軽にご参加ください。
            </p>
            <div class="top-school__btn">
              <a href="<?php echo esc_url(home_url('worship/#school'))?>" class="button button--left">詳しくはこちら</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--オンライン礼拝-->
    <?php
    // グループフィールド（ACF）を取得
    $video = get_field('video');

    // サムネイルとURLを取り出し（存在チェック付き）
    $thumbnail = !empty($video['video_thumbnail']) ? $video['video_thumbnail'] : null;
    $url       = !empty($video['video_url']) ? $video['video_url'] : null;

    // URLがある場合のみ動画ブロックを表示
    if ( $url ) :

      // YouTube URLを埋め込み形式に変換
      if (strpos($url, 'watch?v=') !== false) {
        // 例: https://www.youtube.com/watch?v=xxxx
        $url = str_replace('watch?v=', 'embed/', $url);

      } elseif (strpos($url, '/live') !== false) {
        // 例: https://www.youtube.com/live/xxxx
        $url = preg_replace('#/live/([^?]+).*#', '/embed/$1', $url);

      } elseif (strpos($url, 'youtu.be/') !== false) {
        // 例: https://youtu.be/xxxx
        $url = preg_replace('#https?://youtu\.be/([^?]+).*#', 'https://www.youtube.com/embed/$1', $url);
      }
    ?>
    <section class="video l-video">
  <div class="video__inner inner">

    <div class="video__section-header">
      <h2 class="video__section-header-title">オンライン礼拝</h2>
    </div>
      <div class="video__container">

        <?php if ( $thumbnail ) : ?>
          <div class="video__image">
            <img src="<?php echo esc_url($thumbnail['url']); ?>"
                 alt="<?php echo esc_attr($thumbnail['alt']); ?>"
                 width="265" height="376"
                 decoding="async" loading="lazy">
          </div>
        <?php endif; ?>

        <div class="video__wrap">
          <div class="video__youtube video__youtube--small">
            <iframe class="video__iframe"
              src="<?php echo esc_url($url); ?>"
              title="大曲教会礼拝"
              width="560" height="315"
              loading="lazy"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen>
            </iframe>
          </div>
        </div>
      </div>
      <div class="video__btn">
      <a href="https://www.youtube.com/@%E5%A4%A7%E6%9B%B2%E6%95%99%E4%BC%9A%E9%85%8D%E4%BF%A1%E3%83%81%E3%83%A3%E3%83%B3%E3%83%8D%E3%83%AB"
         target="_blank" class="button button--offset">アーカイブを見る</a>
    </div>
    <?php endif; ?>

  </div>
</section>


    <!--教会紹介-->
    <section class="top-about l-top-about">
      <div class="top-about__inner inner">
        <div class="top-about__section-header">
          <div class="section-header">
            <h2 class="section-header__title">教会紹介</h2>
          </div>
          <p class="top-about__bible-verse">『この地にあまねく主の光を！』あなた方の光を人々の前に輝かしなさい。<br class="u-mobile">-マタイによる福音書5章16節-</p>
        </div>
        <div class="top-about__content">
          <div class="top-about__pastor">
            <div class="top-about__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/pastor.jpg" alt="田辺由紀夫牧師の写真" decoding="async" loading="lazy" width="250"
                height="250">
            </div>
            <div class="top-about__pastor-info">
              <h3 class="top-about__pastor-name">牧師：田辺 由紀夫</h3>
              <p class="top-about__pastor-text">
                青森県出身。東京での社会人経験を経て牧師に。大阪で35年間伝道し、2023年より大曲教会に着任しました。福音の喜びを、温かく伝えていきたいと願っています。
              </p>
              <div class="top-about__btn">
                <a href="<?php echo esc_url(home_url('about/#page-pastor'))?>" class="button">牧師プロフィール</a>
              </div>
            </div>
          </div>

          <div class="top-about__history">
            <div class="top-about__church-image">
            <picture>
                  <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/omagari_church.webp" type="image/webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/omagari_church.jpg"
                  alt="大曲教会の外観写真" decoding="async" loading="lazy" width="345" height="250">
            </picture>
            </div>
            <p class="top-about__history-text">
              1915年、大曲での伝道から始まった私たちの教会は、地域の祈りと支えの中で歩みを重ね、今日に至ります。<br>
              これからも、皆さまと共に歩んでいきます。
            </p>
            <div class="top-about__btn">
              <a href="<?php echo esc_url(home_url('about/#page-history'))?>" class="button">教会のあゆみ</a>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!--ブログ-->
    <section class="top-blog l-top-blog">
  <div class="top-blog__inner inner">
    <div class="top-blog__section-header">
      <div class="section-header">
        <h2 class="section-header__title">ブログ</h2>
      </div>
    </div>

    <div class="top-blog__contents">
      <div class="top-blog-cards blog-cards">
        <?php
        $args = array(
          'post_type'      => 'post',       // 通常投稿
          'posts_per_page' => 3,            // 表示件数
          'orderby'        => 'date',
          'order'          => 'DESC',
        );
        $blog_query = new WP_Query( $args );

        if ( $blog_query->have_posts() ) :
          while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="blog-cards__item blog-card">
              <figure class="blog-card__img">
                <?php if ( has_post_thumbnail() ) : ?>
                  <?php the_post_thumbnail( 'medium', array(
                    'alt'   => get_the_title(),
                    'decoding' => 'async',
                    'loading'  => 'lazy',
                    'width'    => 345,
                    'height'   => 227
                  )); ?>
                <?php else : ?>
                  <picture>
                      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.webp" type="image/webp">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg"
                      alt="No image" decoding="async" loading="lazy" width="345" height="227">
                </picture>
                <?php endif; ?>
              </figure>

              <div class="blog-card__meta">
                <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>" class="blog-card__date">
                  <?php echo esc_html( get_the_date( 'Y年n月j日' ) ); ?>
                </time>
              </div>

              <h3 class="blog-card__title"><?php the_title(); ?></h3>
              <p class="blog-card__text">
                <?php echo esc_html( wp_trim_words( get_the_excerpt(), 50, '…' ) ); ?>
              </p>
            </a>
          <?php endwhile;
        else : ?>
          <p>現在ブログ記事はありません。</p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </div>

      <div class="top-blog__btn">
        <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="button">詳しくはこちら</a>
      </div>
    </div>
  </div>
</section>


    <!--アクセス-->
    <section id="access" class="access l-access">
      <div class="access__inner inner">
        <div class="access__section-header">
          <div class="section-header">
            <h2 class="section-header__title">アクセス</h2>
          </div>
        </div>
        <div class="access__map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3080.750585063174!2d140.4758147118231!3d39.452368971492426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f8fa0cf9ee03db1%3A0xac71372fab398dca!2z5pel5pys5Z-6552j5pWZ5ZujIOWkp-absuaVmeS8mg!5e0!3m2!1sja!2sjp!4v1750226180027!5m2!1sja!2sjp"
            width="560" height="315" style="border:0;" allowfullscreen="" loading="lazy" target="_blank" rel="noopener"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
        <div class="access__container">
          <div class="access__info-box">
            <dl class="access__info">
              <div class="access__info-row">
                <dt class="access__label">名称</dt>
                <dd class="access__value">日本基督教団&ensp;大曲教会</dd>
              </div>
              <div class="access__info-row">
                <dt class="access__label">牧師</dt>
                <dd class="access__value">田辺&ensp;由紀夫</dd>
              </div>
              <div class="access__info-row">
                <dt class="access__label">所在地</dt>
                <dd class="access__value">〒014-0061 秋田県大仙市栄町4−6</dd>
              </div>
              <div class="access__info-row">
                <dt class="access__label">電話</dt>
                <dd class="access__value">0187-62-2598</dd>
              </div>
              <div class="access__info-row">
                <dt class="access__label">メール</dt>
                <dd class="access__value">oomagarichurch@gmail.com</dd>
              </div>
            </dl>
          </div>
          <div class="access__guide">
            <h3 class="access__guide-title">～大曲教会への行き方～</h3>
            <ol class="access__guide-list">
              <li class="access__guide-item">
                大曲教会は、JR奥羽本線・田沢湖線・秋田新幹線が停車する「大曲駅」が最寄りです。
              </li>
              <li class="access__guide-item">
                「大曲駅」から徒歩約15分の場所にございます。
              </li>
              <li class="access__guide-item">
                お車でお越しの方は、駐車場がご利用いただけます。
              </li>
            </ol>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>