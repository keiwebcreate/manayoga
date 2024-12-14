<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- favicon -->
  <link rel="icon" href="">
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Noto+Sans+JP:wght@100..900&family=Oooh+Baby&family=Sawarabi+Gothic&display=swap" rel="stylesheet">
  <!-- functions.php呼び出し -->
  <?php wp_head(); ?>
  
</head>
<body>
  <header class="l-header">
    <div class="l-header__inner">
      <h1 class="l-header__logo">
        <a href="<?php  echo esc_url(home_url()); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.svg" alt="マナヨガリクルート">
        </a>
      </h1>

      <button class="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>
      
      <nav class="l-header__nav">
        <a class="l-header__nav-cta" href="">
          2026’募集要項
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="12" viewBox="0 0 18 12" fill="none">
              <path d="M1 5.25C0.585786 5.25 0.25 5.58579 0.25 6C0.25 6.41421 0.585786 6.75 1 6.75V5.25ZM17.5303 6.53033C17.8232 6.23744 17.8232 5.76256 17.5303 5.46967L12.7574 0.696699C12.4645 0.403806 11.9896 0.403806 11.6967 0.696699C11.4038 0.989592 11.4038 1.46447 11.6967 1.75736L15.9393 6L11.6967 10.2426C11.4038 10.5355 11.4038 11.0104 11.6967 11.3033C11.9896 11.5962 12.4645 11.5962 12.7574 11.3033L17.5303 6.53033ZM1 6.75H17V5.25H1V6.75Z" fill="#F5F5F5"/>
            </svg>
          </span>
        </a>
        <ul class="l-header__nav-items">
          <li class="l-header__nav-item">
            <a href="">
              マナヨガについて
            </a>
            <a href="" class="sub-link">
              - 代表メッセージ
            </a>
          </li>
          <li class="l-header__nav-item">
            <a href="">
              先輩インタビュー
            </a>
          </li>
          <li class="l-header__nav-item">
            <a href="">
              働く環境
            </a>
          </li>
          <li class="l-header__nav-item">
            <a href="">
              ブログ
            </a>
          </li>
          <li class="l-header__nav-item">
            <a href="">
              よくある質問
            </a>
          </li>
        </ul>
        <a class="l-header__nav-logo" href="<?php  echo esc_url(home_url()); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.svg" alt="マナヨガリクルート">
        </a>
      </nav>

      <a class="l-header__cta">
        2026’募集要項
        <span>
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="12" viewBox="0 0 18 12" fill="none">
            <path d="M1 5.25C0.585786 5.25 0.25 5.58579 0.25 6C0.25 6.41421 0.585786 6.75 1 6.75V5.25ZM17.5303 6.53033C17.8232 6.23744 17.8232 5.76256 17.5303 5.46967L12.7574 0.696699C12.4645 0.403806 11.9896 0.403806 11.6967 0.696699C11.4038 0.989592 11.4038 1.46447 11.6967 1.75736L15.9393 6L11.6967 10.2426C11.4038 10.5355 11.4038 11.0104 11.6967 11.3033C11.9896 11.5962 12.4645 11.5962 12.7574 11.3033L17.5303 6.53033ZM1 6.75H17V5.25H1V6.75Z" fill="#F5F5F5"/>
          </svg>
        </span>
      </a>
    </div>
  </header>