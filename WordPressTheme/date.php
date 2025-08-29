<?php get_header(); ?>
<main>
    <!--下層FV-->
    <div class="page-fv" id="js-fv">
      <div class="page-fv__inner">
        <div class="page-fv__image">
        <picture>
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv_blog-pc.webp" media="(min-width: 768px)" width="1440" height="548">
                <source type="image/webp" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv_blog-sp.webp" media="(max-width: 767px)" width="375" height="460">
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv_blog-pc.jpg" media="(min-width: 768px)" width="1440" height="548">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv_blog-sp.jpg" alt="水辺に置かれたコーヒーカップと聖書" decoding="async" width="375" height="460"
                loading="eager" fetchpriority="high">
              </picture>
        </div>
        <div class="page-fv__title-box">
          <p class="page-fv__title"><?php
                        // アーカイブページのタイトルを表示
                        the_archive_title();
                    ?></p>
        </div>
      </div>
    </div>

    <!-- パンくず -->
    <?php get_template_part('inc/breadcrumb')?>



    <section class="l-page-blog page-blog">
      <div class="page-blog__inner inner">
        <div class="page-blog__contents">
          <div class="page-blog__wrapper">
            <div class="page-blog-cards blog-cards">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>

              <a href="<?php the_permalink(); ?>" class="blog-cards__item blog-card">
              <?php if ( has_post_thumbnail() ) : ?>
                <img src="<?php echo get_the_post_thumbnail_url( null, 'full' ); ?>" alt="<?php the_title_attribute(); ?>のアイキャッチ画像">
            <?php else : ?>
              <picture>
                  <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/service_img3.webp" type="image/webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/service_img3.jpg"
                  alt="noimage" width="250" height="280" loading="lazy" decoding="async">
            </picture>
            <?php endif; ?>
                <div class="blog-card__meta">
                  <time datetime="<?php echo get_the_date('c'); ?>" class="blog-card__date"><?php echo get_the_date('Y年n月j日'); ?></time>
                </div>
                <h3 class="blog-card__title"><?php the_title(); ?></h3>
                <p class="blog-card__text"><?php echo wp_trim_words( get_the_excerpt(), 50, '...' ); ?></p>
              </a>
              <?php endwhile; ?>
            <?php else : ?>
                <p>投稿が見つかりませんでした。</p>
            <?php endif; ?>
            </div>

            <!-- ページナビ -->
            <div class="page-blog__pagenavi pagenavi">
              <?php wp_pagenavi(); ?>
            </div>
          </div>

          <!-- サイドバー -->
          <div class="page-blog__sidebar">
          <?php get_sidebar(); ?>
          </div>
        </div>
      </div>
    </section>

  </main>
<?php get_footer(); ?>