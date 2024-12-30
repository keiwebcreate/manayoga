<?php get_header(); ?>
<?php get_template_part('template-parts/breadcrumb'); ?>

<!-- l-main -->
<main class="l-main">
  <!-- l-single -->
  <article class="l-single">
    <div class="p-single">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : ?>
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
                  <time datetime="<?php the_time('c'); ?>" class="p-single__column-date"><?php the_time('Y.m.d'); ?></time>
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
              </div>
              <!-- /p-single__column-wrap -->
            </div>

            <div class="p-single__pagination p-single-pagination">
              <div class="p-single-pagination__prev">
                <?php previous_post_link('%link', '<span>Prev</span>', true); ?>
              </div>
              <div class="p-single-pagination__archive">
                <?php $cat_link = get_category_link(3); ?>
                <a href="<?php echo esc_url($cat_link); ?>">一覧へ戻る</a>
              </div>
              <div class="p-single-pagination__next">
                <?php next_post_link('%link', '<span>Next</span>', true); ?>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </article>
  <!-- /l-single -->

  <?php get_footer(); ?>