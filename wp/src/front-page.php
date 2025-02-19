<?php get_header(); ?>

<div class="intro-overlay">
  <p>
    あなたの<span>好き</span>が<br>
    未来につながる
  </p>
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-img-fv.webp" alt="">
</div>

<div class="p-top__fv">
  <div class="p-top-fv__wrap">
    <div class="p-top-fv__message">
      <p>
        あなたの<span>好き</span>が<br>
        未来につながる
      </p>
      <p>
        <span>私が私らしく</span>働ける場所
      </p>
    </div>
    <div class="p-top-fv__image">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-img-fv.webp" alt="">
    </div>
  </div>
  <div class="p-top-fv__scroll u-hidden-pc">
    <p>
      SCROLL
      <svg xmlns="http://www.w3.org/2000/svg" width="7" height="31" viewBox="0 0 7 31" fill="none">
        <path d="M1 23.1017L6 29L6 7.15256e-07" stroke="#332C2F"/>
      </svg>
    </p>
  </div>
  <div class="p-top-fv__text">
    <p>
      ヨガが好きな気持ちを、もっと大きなものに変えてみませんか？<br>
      あなたの『好き』を大切にしながら、日々成長し、誰かの人生をより良い方向へ導く未来を一緒に描いていきましょう。
    </p>
  </div>
</div>

<div class="l-main p-top">
  <section class="p-top__about">
    <div class="p-top-about__inner l-inner">
      <h2 class="p-top-about__title animation">
        <span class="title-en">
          About
        </span>
        <span class="title-ja">
          マナヨガについて
        </span>
      </h2>
      <div class="p-top-about__wrap animation">
        <div class="p-top-about__image">
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-img-about.webp" alt="">
        </div>
        <div class="p-top-about__text">
          <p class="head">
            <span>ヨガを通じて、</span>
            <span>より豊かな人生を。</span>
          </p>
          <p class="text">
            そんな想いを持つ仲間が集まる場所が私たちのスタジオです。<br>
            一人ひとりが大切にされ、成長できる環境を整えています。あなたの好きなことを、ここで仕事にして、日々の小さな幸せと達成感を一緒に感じていきましょう。
          </p>
          <a href="<?php echo home_url('/about'); ?>" class="button p-top__button">
            Read more
          </a>
        </div>
      </div>
    </div>

    <div class="p-top-environment__inner l-inner">
      <h2 class="p-top-environment__title animation">
        <span class="title-en">
          Environment
        </span>
        <span class="title-ja">
          働く環境
        </span>
      </h2>
      <div class="p-top-environment__wrap animation">
        <div class="p-top-environment__image">
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-img-env.webp" alt="">
        </div>
        <div class="p-top-environment__text">
          <p class="head">
            <span>自分らしく、</span>
            <span>長く働ける環境が</span>
            <span>ここにあります</span>
          </p>
          <p class="text">
            私たちのヨガスタジオは、心地よさと成長を大切にしています。ヨガへの情熱を共有する仲間と共に、リラックスできる雰囲気の中で働けるのはもちろん、自分らしく成長できるサポート体制が整っています。心と体が健やかでいられる職場で、新しい可能性を見つけませんか？
          </p>
          <a href="<?php echo home_url('/environment'); ?>" class="button p-top__button">
            Read more
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="p-top__job">
    <div class="p-top-job__inner">
      <h2 class="p-top-job__title animation">
        <span class="title-en">
          Job type
        </span>
        <span class="title-ja">
          募集職種
        </span>
      </h2>

      <div class="p-top-job__items">
        <div class="p-top-job__item animation slideright">
          <div class="job-item__detail">
            <div class="title">
              ヨガインストラクター
            </div>
            <div class="message">
              好きなヨガを仕事に。<br class="u-hidden-pc">成長し続ける環境がここに。
            </div>
            <a href="<?php echo esc_url(home_url('/recruitment')) ?>" class="entry-link">
              募集詳細はこちら
              <svg xmlns="http://www.w3.org/2000/svg" width="136" height="8" viewBox="0 0 136 8" fill="none">
                <path d="M126.947 0.999995L134 7L-5.24521e-06 7.00001" stroke="#332C2F"/>
              </svg>
            </a>
          </div>
          <div class="job-item__img">
          <?php
            // 投稿IDを指定
            $post_id = 510; // ここに対象の投稿IDを指定
            // パーマリンクを取得
            $permalink = get_permalink($post_id);
            // サムネイルURLを取得（サムネイルが設定されていない場合は空になる）
            $thumbnail_url = get_the_post_thumbnail($post_id);

            // 出力
            if ($permalink && $thumbnail_url) {
              echo '<a href="' . esc_url($permalink) . '">';
              echo $thumbnail_url;
              echo '<span class="interview-link">インタビューはこちら';
              echo '<svg xmlns="http://www.w3.org/2000/svg" width="163" height="8" viewBox="0 0 163 8" fill="none">';
              echo '<path d="M151.579 0.999993L160 7L0 7.00001" stroke="#F5F5F5" stroke-width="1.3"/>';
              echo '</svg></span>';
              echo '</a>';
            } else {
                echo '<p>投稿のパーマリンクまたはサムネイルが見つかりません。</p>';
            }
          ?>
          </div>
        </div>
        <div class="p-top-job__item animation slideright">
          <div class="job-item__detail">
            <div class="title">
              企画・営業
            </div>
            <div class="message">
              あなたの想い・アイディアをマナヨガで形に<span class="u-hide--inline">しませんか？</span><span class="u-show--inline">。</span>
            </div>
            <a href="<?php echo esc_url(home_url('/recruitment')) ?>" class="entry-link">
              募集詳細はこちら
              <svg xmlns="http://www.w3.org/2000/svg" width="136" height="8" viewBox="0 0 136 8" fill="none">
                <path d="M126.947 0.999995L134 7L-5.24521e-06 7.00001" stroke="#332C2F"/>
              </svg>
            </a>
          </div>
          <div class="job-item__img">
          <?php
            // 投稿IDを指定
            $post_id = 536; // ここに対象の投稿IDを指定
            // パーマリンクを取得
            $permalink = get_permalink($post_id);
            // サムネイルURLを取得（サムネイルが設定されていない場合は空になる）
            $thumbnail_url = get_the_post_thumbnail($post_id);

            // 出力
            if ($permalink && $thumbnail_url) {
              echo '<a href="' . esc_url($permalink) . '">';
              echo $thumbnail_url;
              echo '<span class="interview-link">インタビューはこちら';
              echo '<svg xmlns="http://www.w3.org/2000/svg" width="163" height="8" viewBox="0 0 163 8" fill="none">';
              echo '<path d="M151.579 0.999993L160 7L0 7.00001" stroke="#F5F5F5" stroke-width="1.3"/>';
              echo '</svg></span>';
              echo '</a>';
            } else {
                echo '<p>投稿のパーマリンクまたはサムネイルが見つかりません。</p>';
            }
          ?>
          </div>
        </div>
        <div class="p-top-job__item animation slideright">
          <div class="job-item__detail">
            <div class="title">
              受付・バックオフィス
            </div>
            <div class="message">
              お客様の笑顔を支える縁の下の力持ち。<br class="u-hidden-sp">心地よい空間づくりに挑戦しませんか？
            </div>
            <a href="<?php echo esc_url(home_url('/recruitment')) ?>" class="entry-link">
              募集詳細はこちら
              <svg xmlns="http://www.w3.org/2000/svg" width="136" height="8" viewBox="0 0 136 8" fill="none">
                <path d="M126.947 0.999995L134 7L-5.24521e-06 7.00001" stroke="#332C2F"/>
              </svg>
            </a>
          </div>
          <div class="job-item__img">
          <?php
            // 投稿IDを指定
            $post_id = 535; // ここに対象の投稿IDを指定
            // パーマリンクを取得
            $permalink = get_permalink($post_id);
            // サムネイルURLを取得（サムネイルが設定されていない場合は空になる）
            $thumbnail_url = get_the_post_thumbnail($post_id);

            // 出力
            if ($permalink && $thumbnail_url) {
              echo '<a href="' . esc_url($permalink) . '">';
              echo $thumbnail_url;
              echo '<span class="interview-link">インタビューはこちら';
              echo '<svg xmlns="http://www.w3.org/2000/svg" width="163" height="8" viewBox="0 0 163 8" fill="none">';
              echo '<path d="M151.579 0.999993L160 7L0 7.00001" stroke="#F5F5F5" stroke-width="1.3"/>';
              echo '</svg></span>';
              echo '</a>';
            } else {
                echo '<p>投稿のパーマリンクまたはサムネイルが見つかりません。</p>';
            }
          ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="p-top__faq">
    <div class="p-top-faq__inner l-inner">
      <h2 class="p-top-faq__title animation fade">
        <span class="title-en">
          FAQ
        </span>
        <span class="title-ja">
          よくある質問
        </span>
      </h2>
      <div class="p-top-faq__items animation fade">
        <?php   
          // カスタム投稿タイプ "faq" の取得
          $args = array(
            'post_type' => 'faq', // カスタム投稿タイプのスラッグ
            'posts_per_page' => 3,
          );

          $query = new WP_Query($args);

          if ($query->have_posts()):
            while ($query->have_posts()): $query->the_post(); ?>
            <div class="p-top-faq__item">
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
            </div>
            <?php  
            endwhile;
          endif;

          // クエリのリセット
          wp_reset_postdata();
        ?>
      </div>
      <div class="p-top-faq__button  animation fade">
        <a href="<?php echo get_post_type_archive_link('faq'); ?>" class="button p-top__button">
          Read more
        </a>
      </div>
    </div>
  </section>

  <section class="p-top__blog">
    <div class="p-top-blog__inner">
      <h2 class="p-top-blog__title animation">
        <span class="title-en">
          Blog
        </span>
        <span class="title-ja">
          ブログ
        </span>
      </h2>

      <div class="p-top-blog__card-wrap">
        <div class="p-top-blog__swiper swiper animation slideleft">
          <div class="swiper-wrapper">
            <?php   
              // スマホかどうかをチェック（サーバー側で判定する例）
              if( wp_is_mobile() && !is_tablet() ){
                $num = 3;
              } else {
                $num = 6;
              }
              // カテゴリーで取得
              $args = array(
                'post_type'      => 'post',          // 投稿タイプ
                'category_name'  => 'blog',         // カテゴリスラッグ
                'posts_per_page' => $num,
              );
              $query = new WP_Query($args);

              if ($query->have_posts()):
                while ($query->have_posts()): $query->the_post();
                ?>
                <div class="swiper-slide p-top-blog__slide">
                  <!-- スライドの中身 -->
                   <a href="<?php the_permalink(); ?>">
                    <div class="article-img">
                      <?php  the_post_thumbnail(); ?>
                    </div>
                    <div class="article-date">
                      <?php the_time('Y.n.j'); ?>
                    </div>
                    <div class="article-head">
                      <?php  the_title(); ?>
                    </div>
                   </a>
                </div>
                <?php  
                endwhile;
              endif;

              // クエリのリセット
              wp_reset_postdata();
            ?>
          </div>
        </div>

        <div class="swiper-button-prev animation">
          <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
            <circle cx="27.5" cy="27.5" r="26.8106" stroke="#332C2F" stroke-width="1.37885"/>
            <path d="M30.335 34.4707L23.8927 28.571C23.6512 28.3498 23.6545 27.968 23.8999 27.751L30.335 22.0611" stroke="#332C2F" stroke-width="1.37885" stroke-linecap="round"/>
          </svg>
        </div>
        <div class="swiper-button-next animation">
          <svg xmlns="http://www.w3.org/2000/svg" width="56" height="55" viewBox="0 0 56 55" fill="none">
            <circle cx="27.5" cy="27.5" r="26.8106" transform="matrix(-1 0 0 1 55.6436 0)" stroke="#332C2F" stroke-width="1.37885"/>
            <path d="M25.0605 20.6826L31.5028 26.5823C31.7443 26.8036 31.741 27.1853 31.4956 27.4023L25.0605 33.0922" stroke="#332C2F" stroke-width="1.37885" stroke-linecap="round"/>
          </svg>
        </div>
      </div>

      <div class="p-top-blog__button animation">
        <a href="<?php echo get_category_link(get_cat_ID('blog')) ?>" class="button p-top__button">
          Read more
        </a>
      </div>
      
    </div>
  </section>
</div>

<?php get_footer(); ?>