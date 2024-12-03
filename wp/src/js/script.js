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
  
jQuery(document).ready(function($) {

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

	
});


// FAQアコーディオン
if (jQuery("div").hasClass("p-faq")) {
  jQuery(".js-accordion").on("click", function (e) {
    e.preventDefault();

    if (jQuery(this).hasClass("is-open")) {
      jQuery(this).removeClass("is-open");
      jQuery(this).next().slideUp();
    } else {
      jQuery(this).addClass("is-open");
      jQuery(this).next().slideDown();
    }
  });

}