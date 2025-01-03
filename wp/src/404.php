<?php get_header(); ?>


<!-- l-main -->
<main class="l-main">
  <?php get_template_part('template-parts/page-title'); ?>
  <?php get_template_part('template-parts/breadcrumb'); ?>
  <div class="l-404">
    <div class="p-404">
      <div class="p-404__inner">
        <div class="p-404__content">
          <h3 class="p-404__lead">ページが見つかりません。</h3>
          <p class="p-404__text">ご指定のページにアクセスできませんでした。<br>アドレスが変更されているか、ページが削除されている可能性があります。<br>お手数ですがトップページから再度アクセスして下さい。</p>
          <div class="p-404__button">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="p-404__button-link"><svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.96967 5.46967C0.676777 5.76256 0.676777 6.23744 0.96967 6.53033L5.74264 11.3033C6.03553 11.5962 6.51041 11.5962 6.8033 11.3033C7.09619 11.0104 7.09619 10.5355 6.8033 10.2426L2.56066 6L6.8033 1.75736C7.09619 1.46447 7.09619 0.989593 6.8033 0.696699C6.51041 0.403806 6.03553 0.403806 5.74264 0.696699L0.96967 5.46967ZM1.5 6.75H17.5V5.25H1.5V6.75Z" fill="#753B8A" />
              </svg>
              <span>TOPへ戻る<span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<!-- /l-main -->

<?php get_footer(); ?>