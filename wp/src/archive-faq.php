<?php get_header(); ?>

<!-- l-main -->
<?php get_template_part('template-parts/page-title'); ?>
<?php get_template_part('template-parts/breadcrumb'); ?>
<main class="l-main">
  <!-- l-faq -->
  <section class="l-faq">
    <div class="p-faq">
      <div class="p-faq__inner">
        <div class="p-faq__bg">
          <picture class="p-faq__bg-picture">
            <source media="(min-width: 768px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/faq/faq-bg-PC4.webp">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/faq/faq-bg-SP.webp" alt="" decoding="async">
          </picture>
        </div>
        <div class="p-faq__content">
          <ul class="p-faq__list">
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : ?>
                <?php the_post(); ?>
                <li class="p-faq__item">
                  <div class="p-faq__box p-faq-box">
                    <div type="button" class="p-faq-box__head">
                      <span class="p-faq-box__head-icon">Q.</span>
                      <span class="p-faq-box__head-text"><?php the_field('q') ?></span>
                    </div>
                    <div class="p-faq-box__body">
                      <div class="p-faq-box__a">
                        <span class="p-faq-box__a-icon">A.</span>
                        <span class="p-faq-box__a-text"><?php the_field('a') ?></span>
                      </div>
                    </div>
                  </div>
                </li>
              <?php endwhile; ?>
            <?php endif; ?>
          </ul>
          <!-- /p-faq__list -->
          <div class="p-faq__pagination c-pagination">
            <?php get_template_part("template-parts/pagination"); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /l-faq -->
</main>
<!-- /l-main -->

<?php get_footer(); ?>