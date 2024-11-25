<?php get_header(); ?>

<?php get_template_part('template-parts/page-title'); ?>
<?php get_template_part('template-parts/breadcrumb'); ?>

<div class="l-inner p-archive-interview">
    <div class="p-archive-interview__wrap">
    <?php
        // カスタム投稿タイプ "interview" の取得
        $args = array(
            'post_type' => 'interview', // カスタム投稿タイプのスラッグ
            'order' => 'ASC',
            'posts_per_page' => 4,
        );

        $query = new WP_Query($args);

        if ($query->have_posts()): ?>
            <?php while ($query->have_posts()): $query->the_post(); ?>
                <div class="interview-post">
                    <div class="interview-post__img">
                        <?php  the_post_thumbnail(); ?>
                    </div>
                    <div class="interview-post__detail">
                        <div class="job">
                            <?php  the_field('job'); ?>
                        </div>
                        <div class="name">
                            <?php  the_title(); ?>
                        </div>
                    </div>
                    <a href="<?php  the_permalink(); ?>" class="interview-post__hover" >
                        <div class="detail">
                            <?php  the_field('detail'); ?>
                        </div>
                        <div class="message">
                            <?php  the_field('head'); ?>
                        </div>
                        <div class="read">
                            記事をよむ<br>
                            <svg xmlns="http://www.w3.org/2000/svg" width="136" height="8" viewBox="0 0 136 8" fill="none">
                                <path d="M126.947 0.999995L134 7L-5.24521e-06 7.00001" stroke="#332C2F"/>
                            </svg>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>投稿がありません。</p>
        <?php endif;

        // クエリのリセット
        wp_reset_postdata();
        ?>
    </div>
</div>


<?php get_footer(); ?>