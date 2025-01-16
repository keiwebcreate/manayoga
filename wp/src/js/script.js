// ビューポートの固定（375px以下は375pxの見た目を維持）
!(function () {
    const viewport = document.querySelector('meta[name="viewport"]');
    function switchViewport() {
      const value =
        window.outerWidth > 375
          ? "width=device-width,initial-scale=1"
          : "width=375";
      if (viewport.getAttribute("content") !== value) {
        viewport.setAttribute("content", value);
      }
    }
    addEventListener("resize", switchViewport, false);
    switchViewport();
})();

// jQuery(function ($) {
//   // ウィンドウの高さを取得し、ローディング画面を表示
//   var h = $(window).height();
//   $('.intro-overlay').height(h).show();
//   var hasWaitedThreeSeconds = false; // 3秒経過フラグ

//   // 全ての読み込みが完了したらローディング画面を非表示
//   $(window).on('load', function () {
//     checkAndHideLoadingScreen();
//   });

//   // サイト読み込み開始から3秒後にフラグを設定
//   setTimeout(function () {
//     hasWaitedThreeSeconds = true;
//     checkAndHideLoadingScreen();
//   }, 3000);

//   // ローディング画面を非表示にする関数
//   function checkAndHideLoadingScreen() {
//     if (hasWaitedThreeSeconds && document.readyState === "complete") {
//       $('.intro-overlay').delay(300).fadeOut(500);
//     }
//   }
// });

  
jQuery(document).ready(function($) {
  // 下層タイトル表示アニメーション付与
  if ($(".c-page-title").length) {
    $(".c-page-title").addClass("js-load");
  }


  // トップセクション出現アニメーション付与
  function checkAnimation() {
    $('.animation').each(function () {
      const elementTop = $(this).offset().top;
      const scrollTop = $(window).scrollTop();
      const windowHeight = $(window).height();

      // 要素が画面内に入ったらアニメーションを発動
      if (scrollTop + windowHeight > elementTop + 100) {
        $(this).addClass('animated');
      }
    });
  }
  // 初回チェック
  checkAnimation();
  // スクロールイベントで再チェック
  $(window).on('scroll', function () {
    checkAnimation();
  });


  // スムーススクロール
  $('a[href^="#"]').on("click", function (e) {
    const id = $(this).attr("href");
    const target = $("#" == id ? "html" : id);
    const position = $(target).offset().top;
    // 秒数を指定
    const speed = 300;
  
    $("html, body").animate(
      {
        scrollTop: position,
      },
      speed,
      "swing"
    );
	});


	// ハンバーガー制御
  $('.hamburger').on("click", function() {
    const isOpen = $("html, body, .hamburger").toggleClass('js-open').hasClass('js-open');
    $(this).attr("aria-expanded", isOpen);
    $(".l-header__nav").slideToggle(300);
  });
});