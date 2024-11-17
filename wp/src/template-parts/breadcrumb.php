    <!-- プラグイン(関数)が存在しない場合スキップする -->
    <?php if(function_exists('bcn_display') ): ?>
    <div class="c-breadcrumb">
        <?php bcn_display(); ?>
    </div>
    <?php endif; ?>