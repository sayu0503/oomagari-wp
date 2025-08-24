<?php get_header(); ?>
<main>
    <!--下層FV-->
    <div class="page-fv" id="js-fv">
      <div class="page-fv__inner">
        <div class="page-fv__image">
        <picture>
             <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv_blog-pc.jpg" media="(min-width: 768px)" width="1440" height="548">
             <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv_blog-sp.jpg" alt="水辺に置かれたコーヒーカップと聖書" decoding="async" width="375"
              height="460">
          </picture>
        </div>
        <div class="page-fv__title-box">
          <p class="page-fv__title">ブログ</p>
        </div>
      </div>
    </div>

    <!-- パンくず -->
    <?php get_template_part('inc/breadcrumb')?>



    <!-- 下層 Blog -->
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
    <section class="l-page-blog page-blog">
      <div class="page-blog__inner inner">
        <div class="page-blog__contents">
          <div class="single-blog__wrapper">
            <div class="single-blog">
              <div class="single-blog-item__meta">
              <time datetime="<?php echo get_the_date('c'); ?>" class="blog-card__date"><?php echo get_the_date('Y年n月j日'); ?></time>
              </div>
              <h1 class="single-blog__title"><?php the_title(); ?></h1>
              <div class="single-blog__image">
              <?php if ( has_post_thumbnail() ) : ?>
                <img src="<?php echo get_the_post_thumbnail_url( null, 'full' ); ?>" alt="<?php the_title_attribute(); ?>のアイキャッチ画像">
            <?php else : ?>
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage">
            <?php endif; ?>
              </div>
              <div class="single-blog__container">
               <?php the_content(); ?>
              </div>

              <!-- ページナビ -->
              <div class="single-blog__pagenavi pagenavi">
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

         <!-- サイドバー -->
         <div class="page-blog__sidebar">
          <?php get_sidebar(); ?>
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