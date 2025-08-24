<?php get_header(); ?>

<main>
    <!--下層FV-->
    <div class="page-fv" id="js-fv">
      <div class="page-fv__inner">
        <div class="page-fv__image">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv_worship-pc.jpg" media="(min-width: 768px)" width="1440"
              height="548">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv_worship-sp.jpg" alt="手の平にクローバーがある様子" decoding="async" width="375"
              height="460">
          </picture>
        </div>
        <div class="page-fv__title-box">
          <h1 class="page-fv__title">礼拝案内</h1>
        </div>
      </div>
    </div>

    <!-- パンくず -->
    <?php get_template_part('inc/breadcrumb')?>


    <!--礼拝案内-->
    <section class="page-worship l-page-worship">
      <div class="page-worship__inner inner">
        <section class="page-worship">
          <p class="page-worship__intro">
            私たちの教会では、神様との豊かな交わりのひとときを大切にし、毎週、礼拝や祈りの集会を行っています。初めての方も、どなたでも心より歓迎いたします。お気軽にお越しください。
          </p>

          <!-- 主日礼拝 -->
          <div class="page-worship__section">
            <div class="page-worship__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/worship_img1.jpg" alt="礼拝堂のパイプオルガン" decoding="async" loading="lazy"
                width="540" height="356">
            </div>
            <div class="page-worship__content">
              <h2 class="page-worship__title">主日礼拝（毎週日曜日）</h2>
              <ul class="page-worship__meta">
                <li>・時間：午前10時15分〜</li>
                <li>・場所：礼拝堂</li>
                <li>※聖餐式は毎月第2日曜日に行います。</li>
              </ul>
              <p class="page-worship__text">
                神様の言葉に耳を傾け、賛美と祈りを共にささげる、大切で心満たされるひとときです。<br>
                献金は強制ではありませんので、お志のある方のみお捧げください。
              </p>
            </div>
          </div>

          <!-- 祈り会 -->
          <div class="page-worship__section page-worship__section--reverse">
            <div class="page-worship__content">
              <h2 class="page-worship__title">朝の祈り会・夕の祈り会<br class="u-mobile">（毎週水曜日）</h2>
              <ul class="page-worship__meta">
                <li>・朝の祈り会：午前10時30分〜</li>
                <li>・夕の祈り会：午後7時30分〜</li>
              </ul>
              <p class="page-worship__text">
                今年度は、昨年度に引き続き聖書の使徒言行録を学んでいます。地図や写真、映像なども使って、牧師がわかりやすく聖書を解き明かしてくださいます。<br>
                初代教会の人々の歩みを通して、今を生きる私たちの信仰のヒントを共に見つけませんか？
              </p>
            </div>
            <div class="page-worship__image page-worship__image--right">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/worship_img2.jpg" alt="聖書" decoding="async" loading="lazy" width="540"
                height="356">
            </div>
          </div>

          <!-- 教会学校 -->
          <div class="page-worship__section" id="shcool">
            <div class="page-worship__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/worship_img3.jpg" alt="教会の子供達" decoding="async" loading="lazy"
                width="540" height="356">
            </div>
            <div class="page-worship__content">
              <h2 class="page-worship__title">教会学校（毎週日曜日）</h2>
              <ul class="page-worship__meta">
                <li>・時間：午前9時15分〜10時00分</li>
              </ul>
              <p class="page-worship__text">
                教会学校では、子どもたちが神様の御言葉に親しみながら、心豊かに成長していけるように願って、さまざまな活動を行っています。<br>
                礼拝では、牧師や教会学校の先生がわかりやすく聖書のお話をしてくださり、パイプオルガンの演奏に合わせて讃美歌を歌います。
              </p>
              <p class="page-worship__text">
                礼拝のあとは「分級」の時間です。
                聖書絵本の読み聞かせや、工作などの創作活動、聖書のことばを学ぶ時間など、楽しみながら信仰を育むひとときとなっています。
              </p>
              <p class="page-worship__text">
                また、季節ごとのイベントも充実しています。
                イースターにはイースターエッグを作ってみんなに配ったり、クリスマスには聖誕劇に挑戦したりと、楽しい行事も盛りだくさんです。
              </p>
            </div>
          </div>

          <!-- ギャラリーセクション -->
          <?php
$gallery = get_field('gallery_group'); // グループの取得

if ( $gallery ) :

  // 画像が1枚でもあるかチェック
  $has_image = false;
  foreach (['gallery_1', 'gallery_2', 'gallery_3', 'gallery_4'] as $key) {
    if ( !empty($gallery[$key]) ) {
      $has_image = true;
      break;
    }
  }

  if ( $has_image ) : ?>
    <section class="page-worship__gallery gallery">
      <h2 class="gallery__title">ギャラリー</h2>
      <div class="gallery__grid">

        <?php if ( !empty($gallery['gallery_1']) ) : ?>
          <div class="gallery__item gallery__item1">
            <img src="<?php echo esc_url($gallery['gallery_1']['url']); ?>" 
                 alt="<?php echo esc_attr($gallery['gallery_1']['alt']); ?>" 
                 decoding="async" loading="lazy">
          </div>
        <?php endif; ?>

        <?php if ( !empty($gallery['gallery_2']) ) : ?>
          <div class="gallery__item gallery__item2">
            <img src="<?php echo esc_url($gallery['gallery_2']['url']); ?>" 
                 alt="<?php echo esc_attr($gallery['gallery_2']['alt']); ?>" 
                 decoding="async" loading="lazy">
          </div>
        <?php endif; ?>

        <?php if ( !empty($gallery['gallery_3']) ) : ?>
          <div class="gallery__item gallery__item3">
            <img src="<?php echo esc_url($gallery['gallery_3']['url']); ?>" 
                 alt="<?php echo esc_attr($gallery['gallery_3']['alt']); ?>" 
                 decoding="async" loading="lazy">
          </div>
        <?php endif; ?>

        <?php if ( !empty($gallery['gallery_4']) ) : ?>
          <div class="gallery__item gallery__item4">
            <img src="<?php echo esc_url($gallery['gallery_4']['url']); ?>"
                 alt="<?php echo esc_attr($gallery['gallery_4']['alt']); ?>"
                 decoding="async" loading="lazy">
          </div>
        <?php endif; ?>

      </div>
    </section>
  <?php endif; ?>
<?php endif; ?>





          <!-- ほっとルーム -->
          <div class="page-worship__section page-worship__section--reverse">
            <div class="page-worship__content">
              <h2 class="page-worship__title">『ほっとルーム』（毎週木曜日）</h2>
              <ul class="page-worship__meta">
                <li>・時間：午後1時00分〜5時00分</li>
              </ul>
              <p class="page-worship__text">
                牧師が教会堂でお待ちしております。お茶を飲みながら、ゆったりと心を休めませんか？玄関のチャイムを鳴らしてお入りください。
                どうぞお気軽にお越しください。
              </p>
            </div>
            <div class="page-worship__image page-worship__image--right">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/worship_img4.jpg" alt="お茶のセット" decoding="async" loading="lazy"
                width="540" height="356">
            </div>
          </div>
        </section>

      </div>
    </section>
  </main>
<?php get_footer(); ?>