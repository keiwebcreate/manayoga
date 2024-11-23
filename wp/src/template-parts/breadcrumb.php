    <!-- プラグイン(関数)が存在しない場合スキップする -->
    <?php if(function_exists('bcn_display') ): ?>
        <?php  
        if(is_single()) {
            echo '<div class="c-breadcrumb margin">';
            bcn_display();
            echo '</div>';
        } else {
            echo '<div class="c-breadcrumb">';
            bcn_display();
            echo '</div>';
        }
        ?>
    <?php endif; ?>