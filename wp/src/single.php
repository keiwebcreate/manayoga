<?php get_header(); ?>

<!-- l-main -->
    <main class="l-main">
      <!-- l-single -->
      <section class="l-single">
        <div class="p-single">
          <!-- p-single__breadcrumbs -->
          <div class="p-single__breadcrumbs">
            <?php if (function_exists("bcn_display")): ?>
            <?php bcn_display(); ?>
            <?php endif; ?>
          </div>
          <!-- /p-single__breadcrumbs -->
          <?php if (have_posts()) : ?> <!--記事があれば表示する-->
          <?php while (have_posts()) : ?> <!--記事数文ループする-->
          <?php the_post(); ?>
          <div class="p-single__inner">
            <div class="p-single__content">
              <!-- p-single__index-wrap -->
              <div class="p-single__index-wrap p-single__index-wrap--pc">
                <?php echo do_shortcode('[ez-toc]'); ?>
                </div>
              <!-- /p-single__index-wrap -->
              <!-- p-single__column-wrap -->
              <div class="p-single__column-wrap">
                <div class="p-single__column-head">
                  <time datetime="<?php the_time( 'c' ); ?>" class="p-single__column-date"
                    ><?php the_time( 'Y.m.d' ); ?></time
                  >
                  <h1 class="p-single__column-title">
                    <?php the_title(); ?>
                  </h1>
                  <div class="p-single__column-thumbnail">
                    <?php the_post_thumbnail(); ?>
                  </div>
                </div>
                <div class="p-single__column-body">
                  <?php the_content(); ?>
                </div>
                <div class="p-single__pagination p-single-pagination">
                    <div class="p-single-pagination__prev">
                      
                        <?php previous_post_link('%link', '<span>Prev</span>', true); ?>
                      
                    </div>
              <div class="p-single-pagination__archive">
                <a href="<?php echo esc_url(home_url('/')); ?>/blog">一覧へ戻る</a>
              </div>
              <div class="p-single-pagination__next">
               
                  <?php next_post_link('%link', '<span>Next</span>', true); ?>
                
              </div>
                </div>
              </div>
              <!-- /p-single__column-wrap -->
            </div>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </section>
      <!-- /l-single -->

<?php get_footer(); ?>