//375px 未満は JS で viewport を固定する
// =============================
(function () {
  // 　viewportの設定を取得
  const viewport = document.querySelector('meta[name="viewport"]');
  // ビューポートを切り替える関数を定義
  function switchViewport() {
    //   ウインドウサイズが375pxより多き場合はビューポートの値を変更する
    const value =
      window.outerWidth > 375
        ? "width=device-width,initial-scale=1"
        : "width=375";
    // 現在のビューポートの値が新しい値と異なる場合、ビューポートの値を更新
    if (viewport.getAttribute("content") !== value) {
      viewport.setAttribute("content", value);
    }
  }

  //ウィンドウのリサイズイベントにswitchViewport関数を割り当てる
  addEventListener("resize", switchViewport, false);
  // ページが読み込まれた時点でswitchViewport関数を実行
  switchViewport();
})();
