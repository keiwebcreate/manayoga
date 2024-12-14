<?php get_header(); ?>
<?php get_template_part('template-parts/breadcrumb'); ?>

<div class="l-inner p-single-interview">
    <div class="p-single-interview__fv">
        <div class="thumbnail">
            <?php  the_post_thumbnail(); ?>
        </div>
        <div class="head">
            <?php  the_field('single-head') ?>
        </div>
        <div class="name">
            <?php  the_field('name'); ?>
        </div>
    </div>

    <div class="p-single-interview__content">
        <?php  the_content(); ?>

        <div class="p-single-interview__pagination">
            <?php
            // 前の投稿へのリンク
            $prev_post = get_previous_post();
            if ($prev_post): ?>
                <a href="<?php echo get_permalink($prev_post->ID); ?>" class="prev-post">
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12" fill="none">
                        <path d="M6.5 11L1.5 6.41667L6.5 1" stroke="#332C2F" stroke-width="1.5"/>
                    </svg>
                    Prev
                </a>
            <?php endif; ?>

            <!-- 投稿一覧へのリンク -->
            <a href="<?php echo home_url('/interview'); ?>" class="all-posts">
                一覧へ戻る
            </a>

            <?php
            // 次の投稿へのリンク
            $next_post = get_next_post();
            if ($next_post): ?>
                <a href="<?php echo get_permalink($next_post->ID); ?>" class="next-post">
                    Next
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12" fill="none">
                        <path d="M1.5 1L6.5 5.58333L1.5 11" stroke="#332C2F" stroke-width="1.5"/>
                    </svg>
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>