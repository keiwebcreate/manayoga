const mySwiper = new Swiper('.p-top-blog__swiper', { //名前を変える
    loop: false, //最後→最初に戻るループ再生を有効に
    speed: 1000, //表示切り替えのスピード
    effect: "slide", //切り替えのmotion (※1)
    navigation: {
        prevEl: ".swiper-button-prev", //戻るボタンのclass
        nextEl: ".swiper-button-next" //進むボタンのclass
    },
    allowTouchMove: false, // スワイプで表示の切り替えを無効に
    slidesPerView: 'auto', // 一度に表示する枚数
});

/* ===================================================
※1 effectについて
slide：左から次のスライドが流れてくる
fade：次のスライドがふわっと表示
■ fadeの場合は下記を記述
    fadeEffect: {
        crossFade: true
    },
cube：スライドが立方体になり、3D回転を繰り返す
coverflow：写真やアルバムジャケットをめくるようなアニメーション
flip：平面が回転するようなアニメーション
cards：カードを順番にみていくようなアニメーション
creative：カスタマイズしたアニメーションを使うときに使用します

=======================================================
※2 paginationのタイプ
bullet：スライド枚数と同じ数のドットが表示
fraction：分数で表示（例：1 / 3）
progressbar：スライドの進捗に応じてプログレスバーが伸びる
custom：自由にカスタマイズ

=====================================================*/