<?php get_header(); ?>


<!-- l-main -->
<main class="l-main">
  <div class="l-404">
    <div class="p-404">
      <?php get_template_part('template-parts/page-title'); ?>
       <!-- p-404__breadcrumbs -->
          <div class="p-404__breadcrumbs">
            <?php if (function_exists("bcn_display")): ?>
            <?php bcn_display(); ?>
            <?php endif; ?>
          </div>
          <!-- /p-404__breadcrumbs -->
          <div class="p-404__inner">
            <div class="p-404__content">
              <h3 class="p-404__lead">ページが見つかりません。</h3>
              <p class="p-404__text">ご指定のページにアクセスできませんでした。<br>アドレスが変更されているか、ページが削除されている可能性があります。<br>お手数ですがトップページから再度アクセスして下さい。</p>
              <div class="p-404__button">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="p-404__button-link">TOPへ戻る</a>
              </div>
            </div>
          </div>
    </div>
  </div>
</main>
<!-- /l-main -->

<?php get_footer(); ?>