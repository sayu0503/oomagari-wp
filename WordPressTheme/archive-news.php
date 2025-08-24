<?php get_header(); ?>
<main>
    <!--下層FV-->
    <div class="page-fv" id="js-fv">
      <div class="page-fv__inner">
        <div class="page-fv__image">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv_news-pc.jpg" media="(min-width: 768px)" width="1440" height="548">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv_news-sp.jpg" alt="開かれた聖書" decoding="async" width="375" height="460">
          </picture>
        </div>
        <div class="page-fv__title-box">
          <h1 class="page-fv__title">お知らせ</h1>
        </div>
      </div>
    </div>

    <!-- パンくず -->
    <?php get_template_part('inc/breadcrumb')?>

    <!--下層お知らせ-->
    <section class="page-news l-page-news">
      <div class="page-news__inner inner">
        <div class="page-news__items news__items">
        <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="news-item">
            <div class="news-item__meta">
            <time datetime="<?php echo get_the_date('c'); ?>" class="blog-card__date"><?php echo get_the_date('Y年n月j日'); ?></time>
            </div>
            <h3 class="news-item__title"><?php the_title(); ?></h3>
          </a>
          <?php endwhile; ?>
            <?php else : ?>
                <p>投稿が見つかりませんでした。</p>
            <?php endif; ?>
        </div>

        <!-- ページナビ -->
        <div class="page-news__pagenavi pagenavi">
        <?php wp_pagenavi(); ?>
        </div>
      </div>
    </section>


  </main>

<?php get_footer(); ?>