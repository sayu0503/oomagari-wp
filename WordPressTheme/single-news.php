<?php get_header(); ?>
<main>
    <!--下層FV-->
    <div class="page-fv" id="js-fv">
      <div class="page-fv__inner">
        <div class="page-fv__image">
        <picture>
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv_news-pc.webp" media="(min-width: 768px)" width="1440" height="548">
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv_news-sp.webp" media="(max-width: 767px)" width="375" height="460">
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv_news-pc.jpg" media="(min-width: 768px)" width="1440" height="548">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv_news-sp.jpg" alt="開かれた聖書" decoding="async" width="375" height="460"
                loading="eager" fetchpriority="high">
              </picture>
        </div>
        <div class="page-fv__title-box">
          <h1 class="page-fv__title">お知らせ</h1>
        </div>
      </div>
    </div>

    <!-- パンくず -->
    <?php get_template_part('inc/breadcrumb')?>


    <!--個別お知らせページ-->
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
    <section class="l-single-news single-news">
      <div class="single-news__inner inner">
        <div class="single-news__wrapper">
          <div class="single-news">
            <div class="news-item__meta">
            <time datetime="<?php echo get_the_date('c'); ?>" class="blog-card__date"><?php echo get_the_date('Y年n月j日'); ?></time>
            </div>
            <h1 class="single-news__title"><?php the_title(); ?></h1>
            <div class="single-news__image">
                <?php if ( has_post_thumbnail() ) : ?>
                    <img src="<?php echo esc_url( get_the_post_thumbnail_url( null, 'full' ) ); ?>"
                        alt="<?php the_title_attribute(); ?>のアイキャッチ画像">
                <?php endif; ?>
            </div>
            <div class="single-news__container">
            <?php the_content(); ?>
            </div>

            <!-- ページナビ -->
            <div class="single-news__pagenavi pagenavi">
            <div class="wp-pagenavi wp-pagenavi--gap">
                <?php
                  $prev = get_previous_post();
                  if ( ! empty( $prev ) ) :
                    $prev_url = esc_url( get_permalink( $prev->ID ) );
                ?>
                  <a class="previouspostslink" rel="prev" href="<?php echo $prev_url; ?>"></a>
                <?php endif; ?>

                <?php
                  $next = get_next_post();
                  if ( ! empty( $next ) ) :
                    $next_url = esc_url( get_permalink( $next->ID ) );
                ?>
                  <a class="nextpostslink" rel="next" href="<?php echo $next_url; ?>"></a>
                <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php endwhile; ?>
<?php else : ?>
    <p>投稿が見つかりませんでした。</p>
<?php endif; ?>




  </main>

<?php get_footer(); ?>