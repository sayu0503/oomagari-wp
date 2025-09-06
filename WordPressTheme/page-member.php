<?php get_header(); ?>
<main>
    <!--下層FV-->
    <div class="page-fv" id="js-fv">
      <div class="page-fv__inner">
        <div class="page-fv__image">
        <picture>
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv_member-pc.webp" media="(min-width: 768px)" width="1440" height="548">
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv_member-sp.webp" media="(max-width: 767px)" width="375" height="460">
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv_member-pc.jpg" media="(min-width: 768px)" width="1440" height="548">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv_member-sp.jpg" alt="朝日に手を伸ばす様子" decoding="async" width="375"
              height="460">
              </picture>
        </div>
        <div class="page-fv__title-box">
          <h1 class="page-fv__title">会員限定</h1>
        </div>
      </div>
    </div>

    <!-- パンくず -->
    <?php get_template_part('inc/breadcrumb')?>


    <section class="page-member l-page-member">
  <div class="page-member__inner inner">
    <div class="page-member__contents">

      <?php if ( post_password_required() ) : ?>
        <?php echo get_the_password_form(); // パスワード入力フォームを表示 ?>
      <?php else : ?>
        <?php
        // SCFからカレンダー情報を取得
        $calendar_list = SCF::get('calendar_list');

        if ( ! empty( $calendar_list ) ) :
          foreach ( $calendar_list as $calendar ) :
            $title   = esc_html( $calendar['calendar_title'] );
            $pdf_id  = $calendar['calendar_pdf'];
            $pdf_url = ! empty( $pdf_id ) ? wp_get_attachment_url( $pdf_id ) : '';
        ?>
            <div class="page-member__box">
              <div class="page-member__title">
                <h2 class="page-member__header"><?php echo $title; ?></h2>
              </div>
              <?php if ( $pdf_url ) : ?>
                <div class="page-member__link">
                  <div class="top-about__btn">
                    <a href="<?php echo esc_url( $pdf_url ); ?>" class="button" target="_blank" rel="noopener noreferrer">
                      PDFを開く
                    </a>
                  </div>
                </div>
              <?php else : ?>
                <p>PDFが登録されていません。</p>
              <?php endif; ?>
            </div>
        <?php
          endforeach;
        else :
          echo '<p>現在カレンダーは登録されていません。</p>';
        endif;
        ?>
      <?php endif; ?>

    </div>
  </div>
</section>



  </main>
<?php get_footer(); ?>