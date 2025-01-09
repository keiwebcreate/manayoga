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
            <!-- 前の投稿へのリンク -->
            <div class="prev-post">
                <?php previous_post_link('%link', '<span>Prev</span>', true); ?>
            </div>

            <!-- 投稿一覧へのリンク -->
            <a href="<?php echo home_url('/interview'); ?>" class="all-posts">
                一覧へ戻る
            </a>

            <!-- 次の投稿へのリンク -->
            <div class="next-post">
                <?php next_post_link('%link', '<span>Next</span>', true); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>