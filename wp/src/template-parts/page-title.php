<div class="c-page-title">
    <div class="c-page-title__wrap">
        <h2 class="title-en">
            <?php
            if (is_404()) {
                echo esc_html('404 Page');
            } elseif( is_post_type_archive( 'faq' ) ) {
                echo esc_html('FAQ');
            } elseif ( is_archive()) {
                echo esc_html('BLOG');
            } else {
                the_title();
            }
            ?>
        </h2>
        <?php if (!is_404()): ?>
            <p class="title-ja">
                <?php
                // 固定ページや投稿の抜粋を表示
                if (has_excerpt()) {
                    echo get_the_excerpt();
                } elseif( is_post_type_archive( 'faq' ) ) {
                    echo esc_html('よくある質問');
                } elseif ( is_archive()) {
                    echo esc_html('ブログ');
                }
                ?>
            </p>
        <?php endif; ?>
    </div>
</div>
