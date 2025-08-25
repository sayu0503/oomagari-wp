        <aside class="sidebar">
            <div class="sidebar__items">
            <div class="sidebar__item">
              <h2 class="sidebar__title">人気記事</h2>
              <?php
                          if (is_single()) {
                              setPostViews(get_the_ID());
                          }

                          $args = array(
                              'posts_per_page' => 3,
                              'orderby'        => 'meta_value_num',
                              'meta_key'       => 'post_views_count',
                          );

                          $popular_query = new WP_Query($args);

                          if ($popular_query->have_posts()) :
                              while ($popular_query->have_posts()) : $popular_query->the_post();
                          ?>
                          <a href="<?php the_permalink(); ?>" class="sidebar__article-item">
                              <div class="sidebar__article-image">
                                  <?php if (has_post_thumbnail()) : ?>
                                      <?php the_post_thumbnail('medium', array('loading' => 'lazy')); ?>
                                  <?php else : ?>
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.jpg" alt="No Image">
                                  <?php endif; ?>
                              </div>
                              <div class="sidebar__article-textbox">
                                  <time class="sidebar__article-data" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                                      <?php echo get_the_date('Y.m.d'); ?>
                                  </time>
                                  <h3 class="sidebar__article-text"><?php the_title(); ?></h3>
                              </div>
                          </a>
                      <?php endwhile; ?>
                  </div>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>
            </div>

            <div class="sidebar__item">
                  <div class="sidebar__title">アーカイブ</div>
                  <div class="sidebar__archive">
                    <?php
                    global $wpdb;

                    // post の年ごとに取得
                    $years = $wpdb->get_col("
                      SELECT DISTINCT YEAR(post_date)
                      FROM $wpdb->posts
                      WHERE post_status = 'publish'
                      AND post_type = 'post'
                      ORDER BY post_date DESC
                    ");

                $first = true; // 最初の年だけ開く
                foreach ($years as $year) : ?>
                  <div class="sidebar__archive-group">
                    <h3 class="sidebar__archive-calendar js-accordion-title <?php echo $first ? 'is-open' : ''; ?>">
                      <?php echo esc_html($year); ?>
                    </h3>
                    <ul class="sidebar__archive-months" <?php echo $first ? 'style="display:block;"' : ''; ?>>
                      <?php
                      // 指定年の月を取得
                      $months = $wpdb->get_col($wpdb->prepare("
                        SELECT DISTINCT MONTH(post_date)
                        FROM $wpdb->posts
                        WHERE post_status = 'publish'
                        AND post_type = 'post'
                        AND YEAR(post_date) = %d
                        ORDER BY post_date DESC
                      ", $year));

                      foreach ($months as $month) : ?>
                        <li class="sidebar__archive-month">
                          <a href="<?php echo esc_url(get_month_link($year, $month)); ?>" class="sidebar__archive-link">
                            <?php echo esc_html($month); ?>月
                          </a>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                  <?php $first = false; ?>
                <?php endforeach; ?>
              </div>
            </div>
            </div>
            </aside>