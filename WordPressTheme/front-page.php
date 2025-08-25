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
          <a href="single-news.html" class="news-item">
            <div class="news-item__meta">
              <time datetime="2025-05-01" class="news-item__date">2025年7月27日</time>
            </div>
            <h3 class="news-item__title">8月3日は創立110周年記念礼拝です</h3>
          </a>
          <a href="#" class="news-item">
            <div class="news-item__meta">
              <time datetime="2025-05-01" class="news-item__date">2025年7月27日</time>
            </div>
            <h3 class="news-item__title">8月10日は逝去者記念礼拝です</h3>
          </a>
          <a href="#" class="news-item">
            <div class="news-item__meta">
              <time datetime="2025-05-01" class="news-item__date">2025年7月27日</time>
            </div>
            <h3 class="news-item__title">8月中は『朝・夕の祈り会』は休会します</h3>
          </a>

        </div>
        <div class="top-news__btn">
          <a href="<?php echo esc_url(home_url('/news'))?>" class="button">詳しくはこちら</a>
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
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/worship_img1.jpg" alt="教会の礼拝堂の様子" decoding="async" loading="lazy"
              width="714" height="509">
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
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/kids.png" alt="子どもが聖書を読んでいるイラスト" decoding="async" loading="lazy"
              width="436" height="366">
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
    <section class="video l-video">
      <div class="video__inner inner">
        <div class="video__section-header">
          <h2 class="video__section-header-title">オンライン礼拝</h2>
        </div>
        <div class="video__container">
          <div class="video__image">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/signboard.jpg" alt="大曲教会のオンライン礼拝案内看板の画像" decoding="async" loading="lazy"
              width="265" height="376">
          </div>
          <div class="video__wrap">
            <div class="video__youtube video__youtube--small">
              <iframe width="560" height="315" class="video__iframe" src="https://www.youtube.com/embed/n53sxA8iGIA"
                title="大曲教会礼拝" loading="lazy"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen>
              </iframe>
            </div>
          </div>
        </div>
        <div class="video__btn">
          <!-- <p class="video__text">過去の礼拝も視聴できます！</p> -->
          <a href="https://www.youtube.com/@%E5%A4%A7%E6%9B%B2%E6%95%99%E4%BC%9A%E9%85%8D%E4%BF%A1%E3%83%81%E3%83%A3%E3%83%B3%E3%83%8D%E3%83%AB" target="_blank" class="button button--offset">アーカイブを見る</a>
        </div>
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
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/omagari_church.jpg" alt="大曲教会の外観写真" decoding="async" loading="lazy"
                width="345" height="250">
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
            <a href="single-blog.html" class="blog-cards__item blog-card">
              <figure class="blog-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog_img1.jpg" alt="礼拝堂に椅子が並んでいる様子" decoding="async" loading="lazy"
                  width="345" height="227">
              </figure>
              <div class="blog-card__meta">
                <time datetime="2025-06-08" class="blog-card__date">2025年6月8日</time>
              </div>
              <h3 class="blog-card__title">ペンテコステ、花の日、こどもの日礼拝</h3>
              <p class="blog-card__text">ペンテコステは聖霊が降り、教会が誕生した日です。今年は教会学校と合同で大人30名、子ども2名が集まり、礼拝を捧げました。礼拝後はティータイムとゲームで親交を深め、心温まるひとときを過ごしました。また「花の日」として、教会員が花を持ち寄り親交のある方々にお届けしました。</p>
            </a>
            <a href="#" class="blog-cards__item blog-card">
              <figure class="blog-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog_img2.jpg" alt="習字が本棚の上に飾っている" decoding="async" loading="lazy"
                  width="345" height="227">
              </figure>
              <div class="blog-card__meta">
                <time datetime="2025-05-01" class="blog-card__date">2025年5月1日</time>
              </div>
              <h3 class="blog-card__title">テキストテキスト</h3>
              <p class="blog-card__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </a>
            <a href="#" class="blog-cards__item blog-card">
              <figure class="blog-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog_img3.jpg" alt="聖書" decoding="async" loading="lazy" width="345"
                  height="227">
              </figure>

              <div class="blog-card__meta">
                <time datetime="2025-05-01" class="blog-card__date">2025年5月1日</time>
              </div>
              <h3 class="blog-card__title">テキストテキスト</h3>
              <p class="blog-card__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>

            </a>
          </div>
          <div class="top-blog__btn">
            <a href="<?php echo esc_url(home_url('/blog'))?>" class="button">詳しくはこちら</a>
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