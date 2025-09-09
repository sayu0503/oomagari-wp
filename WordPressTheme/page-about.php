<?php get_header(); ?>
<main>
    <!--下層FV-->
    <div class="page-fv" id="js-fv">
      <div class="page-fv__inner">
        <div class="page-fv__image">
        <picture>
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv_about-pc.webp" media="(min-width: 768px)" width="1440" height="548">
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv_about-sp.webp" media="(max-width: 767px)" width="375" height="460">
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv_about-pc.jpg" media="(min-width: 768px)" width="1440" height="548">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv_about-sp.jpg" alt="青空と十字架" decoding="async" width="375" height="460">
              </picture>
        </div>
        <div class="page-fv__title-box">
          <h1 class="page-fv__title">教会紹介</h1>
        </div>
      </div>
    </div>

    <!-- パンくず -->
    <?php get_template_part('inc/breadcrumb')?>


    <section class="page-about l-page-about">
      <div class="page-about__inner inner">
        <!-- 牧師挨拶 -->
        <div class="page-about__pastor-content" id="page-pastor">
          <div class="page-about__pastor">
            <div class="page-about__pastor-image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/pastor.jpg" alt="田辺由紀夫牧師の写真" decoding="async" loading="lazy" width="345"
                height="250">
            </div>
            <p class="page-about__pastor-name">田辺 由紀夫</p>
            <p class="page-about__pastor-intro">牧師</p>
          </div>
          <div class="page-about__pastor-info">
            <h2 class="page-about__pastor-title">牧師よりご挨拶</h2>
            <p class="page-about__pastor-text">
              <span>1956年、青森に生まれ、高卒まで津軽弁の世界で生きてきました。
                東京の一般大学を卒業後、5年間のサラリーマン生活から転身、献身。聖書の福音を疲れている人々へ宣べ伝える牧師になろうと、東京神学大学入学。</span>
                <span>卒業後、大阪府堺市泉北ニュータウンにある泉ヶ丘教会で16年間、その後、万博公園近くの茨木教会に19年仕えてきました、35年の大阪生活でしたが、変な大阪弁しか話せません。</span>
              <span>23年4月に、大曲教会に着任。石坂洋次郎の “青い山脈” を仰ぎつつ、清々しい思いで、主イエス・キリストの福音を、「海知らぬ少女の前に麦藁帽のわれは両手をひろげていたり」（寺山修司）という少年の純情をもって届けたいと願っています。
                どうぞ教会へお越しください！</span>
            </p>
          </div>
        </div>
        <!-- 大曲教会のあゆみ -->
        <section class="page-about__history" id="page-history">
          <div class="page-about__history-content">
            <div class="page-about__history-wrap">
              <h2 class="page-about__history-title">大曲教会のあゆみ</h2>
              <p class="page-about__history-lead">
                100年を超える信仰の歩み<br>
                大曲教会は、1915年に始まりました。 町の人々にキリストの福音を届けたい──<br>
                そんな想いをもった教師たちの家庭集会からスタートし、地域に根ざした教会として歩みを続けてきました。
              </p>
              <div class="page-about__history-timeline">
                <div class="timeline_item">
                  <div class="time_date">
                    <p class="time">1915</p>
                    <p class="flag">大曲開教の始まり
                    </p>
                  </div>
                  <div class="desc">
                    <p>４月大曲農業学校教頭松岡亮作氏及び教師近藤時太郎氏が札幌大学生の頃クリスチャンとなり、<br>
                      農業学校をキリスト教精神を持ってあたらんとする傍ら、大曲町にキリスト教を伝えたいとの熱意から、<br>
                      秋田日本基督教会牧師土田熊治氏を招き、定期的に家庭集会を開いた。</p>
                  </div>
                </div>
                <div class="timeline_item">
                  <div class="time_date">
                    <p class="time">1919</p>
                    <p class="flag">大曲日本基督教会伝道所として、<br class="u-mobile">東北中会より承認</p>
                  </div>
                  <div class="desc">
                    <p>4月仙北郡在住の信徒を含めて伝道所の申請をしたところ東北中会の承認を得て、<br class="u-desktop">はじめて教会の基礎ができた。</p>
                  </div>
                </div>
                <div class="timeline_item">
                  <div class="time_date">
                    <p class="time">1927</p>
                    <p class="flag">伝道教会に昇格</p>
                  </div>
                  <div class="desc">
                    <p>5月東北中会は大曲伝道所を伝道教会に昇格することを承認し7月に伝道教会設立式を挙げた。</p>
                  </div>
                </div>
                <div class="timeline_item">
                  <div class="time_date">
                    <p class="time">1936</p>
                    <p class="flag">大曲教会独立自給教会として承認</p>
                  </div>
                  <div class="desc">
                    <p>4月東北中会総会において審議の結果、満場一致をもって大曲教会独立自給教会として承認された。</p>
                  </div>
                </div>

                <div class="timeline_item">
                  <div class="time_date">
                    <p class="time">1941</p>
                    <p class="flag">日本基督教団設立</p>
                  </div>
                  <div class="desc">
                    <p>6月、30余派の福音主義教会が合同し日本基督教団となった。</p>
                  </div>
                </div>
                <div class="timeline_item">
                  <div class="time_date">
                    <p class="time">1942</p>
                    <p class="flag">日本基督教団 大曲教会に改称</p>
                  </div>
                  <div class="desc">
                    <p>2月大曲教会は名称を日本基督教団大曲教会と変更し、3月31日県の承認を得た。</p>
                  </div>
                </div>
                <div class="timeline_item">
                  <div class="time_date">
                    <p class="time">1983</p>
                    <p class="flag">教会墓地敷地内に記念堂献堂<br class="u-mobile">
                      (創立70周年記念事業)</p>
                  </div>
                  <div class="desc">
                    <p>教会墓地敷地内に、大曲教会創立70周年記念事業の一環として記念堂を建設し、11月6日献堂式を行った。</p>
                  </div>
                </div>
                <div class="timeline_item">
                  <div class="time_date">
                    <p class="time">2015</p>
                    <p class="flag">8月2日創立100周年記念礼拝、<br class="u-mobile">
                      祝会</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- 年間行事 -->
        <section class="page-about__events">
          <div class="page-about__events-content">
            <div class="page-about__events-wrap">
              <div class="page-about__events-group">
                <h2 class="page-about__events-title">年間行事</h2>
                <p class="page-about__events-lead">四季折々のイベントを通して、地域とともに信仰の恵みを分かち合っています。</p>
              </div>
              <ul class="page-about__events-list">
                <li class="page-about__events-item">
                  <p class="page-about__events-month">4月</p>
                  <p class="page-about__text">イースター礼拝・祝会</p>
                </li>
                <li class="page-about__events-item">
                  <p class="page-about__events-month">6月</p>
                  <p class="page-about__text">ペンテコステ・花の日・こどもの日礼拝</p>
                </li>
                <li class="page-about__events-item">
                  <p class="page-about__events-month">8月</p>
                  <p class="page-about__text">創立記念礼拝・逝去者記念礼拝</p>
                </li>
                <li class="page-about__events-item">
                  <p class="page-about__events-month">11月</p>
                  <p class="page-about__text">収穫感謝礼拝</p>
                </li>
                <li class="page-about__events-item">
                  <p class="page-about__events-month">12月</p>
                  <p class="page-about__text">クリスマス礼拝・<br class="u-mobile">こどもクリスマス会・祝会</p>
                </li>
              </ul>
            </div>
            <div class="page-about__events-image">
            <picture>
                  <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_img2.webp" type="image/webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_img2.jpg" alt="白い百合の花" decoding="async" loading="lazy" width="464"
                  height="292">
            </picture>
            </div>
          </div>
        </section>
      </div>
    </section>

    <!--よくある質問-->
    <section id="faq" class="page-faq l-page-faq">
  <div class="page-faq__inner inner">
    <div class="page-faq__title-box">
      <h2 class="page-faq__title">よくある質問</h2>
      <p class="page-faq__sub-title">よくご寄せいただくご質問と回答をご紹介します</p>
    </div>

    <div class="page-faq__items">
      <?php
      // SCFからFAQリストを取得
      $faq_list = SCF::get('faq_list');

      // 出力した件数をカウント
      $printed = 0;

      if (!empty($faq_list)) :
        foreach ($faq_list as $faq) :
          $question = !empty($faq['Question']) ? esc_html($faq['Question']) : '';
          $answer   = !empty($faq['Answer'])   ? wp_kses_post($faq['Answer']) : '';

          // 両方揃っている場合だけ出力
          if ($question && $answer) :
            $printed++;
      ?>
            <dl class="page-faq__item">
              <dt class="page-faq__header">Q.&nbsp;<?php echo $question; ?></dt>
              <dd class="page-faq__content"><?php echo nl2br($answer); ?></dd>
            </dl>
      <?php
          endif;
        endforeach;
      endif;

      // 1件も出力されなかった場合
      if ($printed === 0) :
      ?>
        <p>現在、よくある質問はありません。</p>
      <?php endif; ?>
    </div>
  </div>
</section>



  </main>
<?php get_footer(); ?>