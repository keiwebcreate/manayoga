<?php get_header(); ?>

<?php get_template_part('template-parts/page-title'); ?>
<?php get_template_part('template-parts/breadcrumb'); ?>

<div class="p-recruitment">
    <div class="p-recruitment__fv">
        <?php  the_post_thumbnail() ?>
        <p>
            私たちと一緒に、<br>
            心と体の健康づくりを<br>
            応援する仲間になりませんか？
        </p>
    </div>

    <div class="l-inner">
    <?php
        $fields = get_fields(); // すべてのカスタムフィールドを取得

        if ($fields) {
            $is_first = true; // 最初のループかどうかのフラグ
            $loop_started = false; // テーブルラッパーの開始タグが出力されたかを記録

            foreach ($fields as $key => $value) {
                $label = acf_get_field($key)['label'] ?? $key; // フィールドラベルを取得

                if ($is_first) {
                    // 最初のフィールド用ラッパーを追加
                    echo '<div class="p-recruitment__person">';
                    echo '<p class="head">' . esc_html($label) . '</p>';
                    echo '<p class="text">' . $value . '</p>';
                    echo '</div>';
                    $is_first = false; // フラグを切り替え
                } else {
                    // 他のフィールドを別のラッパーにまとめて追加
                    if ($is_first === false && $loop_started !== true) {
                        // テーブルラッパーの開始タグを1回だけ出力
                        echo '<div class="p-recruitment__table">';
                        echo '<table>';
                        $loop_started = true;
                    }
                    echo '<tr>';
                    echo '<th>' . esc_html($label) . '</th>';
                    echo '<td>' . $value . '</td>';
                    echo '</tr>';
                }
            }

            // p-recruitment__table の終了タグを出力
            if (isset($loop_started) && $loop_started === true) {
                echo '</table>';
                echo '</div>';
            }
        }
    ?>
    </div>
</div>

<?php get_footer(); ?>