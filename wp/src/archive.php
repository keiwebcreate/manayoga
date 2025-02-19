<?php get_header(); ?>
<?php get_template_part('template-parts/page-title'); ?>
<?php get_template_part('template-parts/breadcrumb'); ?>
<!-- l-main -->
    <main class="l-main">
      <!-- l-blog -->
      <section class="l-blog">
        <div class="p-blog">
          <div class="p-blog__inner">
            <div class="p-blog__content">
              <!-- p-blog__list -->
              <ul class="p-blog__list">
                <?php if ( have_posts() ) : ?>
                  <?php while ( have_posts() ) : ?>
                    <?php the_post(); ?>

                <li class="p-blog__item">
                  <a href="<?php the_permalink(); ?>" class="p-blog__link">
                    <article class="p-blog__card p-blog-card">
                      <div class="p-blog-card__thumbnail">
                        <img src="./assets/img/blog/blog-photo-01.webp" alt="ブログのサムネイル" width="760" height="400">
                      </div>
                      <time datetime="2023-03-01" class="p-blog-card__date">2023.03.01</time>
                      <h3 class="p-blog-card__title">好きなことを仕事にする楽しさと成長の秘訣</h3>
                      <ul class="p-blog-card__tag-list">
                        <li class="p-blog-card__tag-item">#やりがい</li>
                        <li class="p-blog-card__tag-item">#キャリア</li>
                        <li class="p-blog-card__tag-item">#ストーリー</li>
                        <li class="p-blog-card__tag-item">#キャリア</li>
                      </ul>
                    </article>
                  </a>
                </li>
                <li class="p-blog__item">
                  <a href="#" class="p-blog__link">
                    <article class="p-blog__card p-blog-card">
                      <div class="p-blog-card__thumbnail">
                        <img src="./assets/img/blog/blog-photo-02.webp" alt="ブログのサムネイル" width="760" height="400">
                      </div>
                      <time datetime="2023-03-01" class="p-blog-card__date">2023.03.01</time>
                      <h3 class="p-blog-card__title">好きなことを仕事にする楽しさと成長の秘訣</h3>
                      <ul class="p-blog-card__tag-list">
                        <li class="p-blog-card__tag-item">#やりがい</li>
                        <li class="p-blog-card__tag-item">#キャリア</li>
                        <li class="p-blog-card__tag-item">#ストーリー</li>
                        <li class="p-blog-card__tag-item">#キャリア</li>
                      </ul>
                    </article>
                  </a>
                </li>
                <li class="p-blog__item">
                  <a href="#" class="p-blog__link">
                    <article class="p-blog__card p-blog-card">
                      <div class="p-blog-card__thumbnail">
                        <img src="./assets/img/blog/blog-photo-03.webp" alt="ブログのサムネイル" width="760" height="400">
                      </div>
                      <time datetime="2023-03-01" class="p-blog-card__date">2023.03.01</time>
                      <h3 class="p-blog-card__title">親子でヨガのススメ。</h3>
                      <ul class="p-blog-card__tag-list">
                       <li class="p-blog-card__tag-item">#やりがい</li>
                        <li class="p-blog-card__tag-item">#キャリア</li>
                        <li class="p-blog-card__tag-item">#ストーリー</li>
                        <li class="p-blog-card__tag-item">#キャリア</li>
                      </ul>
                    </article>
                  </a>
                </li>
                <li class="p-blog__item">
                  <a href="#" class="p-blog__link">
                    <article class="p-blog__card p-blog-card">
                      <div class="p-blog-card__thumbnail">
                        <img src="./assets/img/blog/blog-photo-04.webp" alt="ブログのサムネイル" width="760" height="400">
                      </div>
                      <time datetime="2023-03-01" class="p-blog-card__date">2023.03.01</time>
                      <h3 class="p-blog-card__title">好きなことを仕事にする楽しさと成長の秘訣</h3>
                      <ul class="p-blog-card__tag-list">
                        <li class="p-blog-card__tag-item">#やりがい</li>
                        <li class="p-blog-card__tag-item">#キャリア</li>
                        <li class="p-blog-card__tag-item">#ストーリー</li>
                        <li class="p-blog-card__tag-item">#キャリア</li>
                      </ul>
                    </article>
                  </a>
                </li>
                <li class="p-blog__item">
                  <a href="#" class="p-blog__link">
                    <article class="p-blog__card p-blog-card">
                      <div class="p-blog-card__thumbnail">
                        <img src="./assets/img/blog/blog-photo-05.webp" alt="ブログのサムネイル" width="760" height="400">
                      </div>
                      <time datetime="2023-03-01" class="p-blog-card__date">2023.03.01</time>
                      <h3 class="p-blog-card__title">好きなことを仕事にする楽しさと成長の秘訣</h3>
                      <ul class="p-blog-card__tag-list">
                        <li class="p-blog-card__tag-item">#やりがい</li>
                        <li class="p-blog-card__tag-item">#キャリア</li>
                        <li class="p-blog-card__tag-item">#ストーリー</li>
                        <li class="p-blog-card__tag-item">#キャリア</li>
                      </ul>
                    </article>
                  </a>
                </li>
                <?php endwhile; ?>
                <?php endif; ?>
              </ul>
              <!-- /p-blog__list -->
              <div class="c-pagination">

              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /l-blog -->
    </main>
    <!-- /l-main -->

<?php get_footer(); ?>