const gulp = require("gulp");
const del = require("del");

//scss
const sass = require("gulp-dart-sass"); //DartSassを使用
const plumber = require("gulp-plumber"); // エラーが発生しても強制終了させない
const notify = require("gulp-notify"); // エラー発生時のアラート出力
const browserSync = require("browser-sync").create(); //ブラウザリロード
const autoprefixer = require("gulp-autoprefixer"); //ベンダープレフィックス自動付与
const postcss = require("gulp-postcss"); //css-mqpackerを使用
const mqpacker = require("css-mqpacker"); //メディアクエリをまとめる
const bulkSass = require("gulp-sass-glob-use-forward");

// 画像圧縮
const change = require("gulp-changed");
const imageMin = require("gulp-imagemin");
const mozJpeg = require("imagemin-mozjpeg");
const pngQuant = require("imagemin-pngquant");

// webp変換
const webp = require("gulp-webp"); //gulp-webpでwebp変換

// 入出力するフォルダを指定
const srcBase = "./src";
const distBase = "./dist";

const srcPath = {
  scss: srcBase + "/scss/**/*.scss",
  img: srcBase + "/img/**/*.{png,jpg,jpeg,svg,gif,ico,mp4,webp}",
  js: srcBase + "/js/*.js",
  php: srcBase + "/**/*.php",
  html: srcBase + "/**/*.html",
  css: srcBase + "/style.css",
};

const distPath = {
  scss: distBase + "/assets/css/",
  img: distBase + "/assets/img/",
  js: distBase + "/assets/js/",
  php: distBase + "/",
  html: distBase + "/",
  css: distBase + "/",
};

/**
 * clean
 */
const clean = () => {
  return del([distBase + "/**"], { force: true });
};

//ベンダープレフィックスを付与する条件
const TARGET_BROWSERS = [
  "last 2 versions", //各ブラウザの2世代前までのバージョンを担保
  "ie >= 11", //IE11を担保
];

/**
 * sass
 *
 */
const cssSass = (done) => {
  gulp
    .src(srcPath.scss, { sourcemaps: true })
    .pipe(
      //エラーが出ても処理を止めない
      plumber({
        errorHandler: notify.onError("Error:<%= error.message %>"),
      })
    )
    .pipe(bulkSass())
    .pipe(
      sass({
        outputStyle: "expanded",
      })
    ) //指定できるキー expanded compressed
    .pipe(autoprefixer(TARGET_BROWSERS))
    .pipe(postcss([mqpacker()])) // メディアクエリをまとめる
    .pipe(
      gulp.dest(distPath.scss, {
        sourcemaps: "./",
      })
    ) //コンパイル先
    .pipe(browserSync.stream()) // ファイルの変更を反映させる
    .pipe(
      notify({
        message: "Sassをコンパイルしました！",
        onLast: true,
      })
    );
  done();
};

/**
 * js
 */
const js = (done) => {
  gulp.src(srcPath.js).pipe(gulp.dest(distPath.js));
  done();
};

/**
 * image
 */
const image = (done) => {
  gulp
    .src(srcPath.img)
    .pipe(change(distPath.img))
    .pipe(
      imageMin([
        pngQuant({
          quality: [0.75, 0.8],
          speed: 1,
        }),
        mozJpeg({
          quality: 80,
        }),
        imageMin.svgo(),
        imageMin.optipng(),
        imageMin.gifsicle({ optimizationLevel: 3 }),
      ])
    )
    .pipe(webp())
    .pipe(gulp.dest(distPath.img));
  done();
};

/**
 * php
 */
const php = (done) => {
  gulp.src(srcPath.php).pipe(gulp.dest(distPath.php));
  done();
};

/**
 * html
 */
const html = (done) => {
  gulp.src(srcPath.html).pipe(gulp.dest(distPath.html));
  done();
};

/**
 * css
 */
const css = (done) => {
  gulp.src(srcPath.css).pipe(gulp.dest(distPath.css));
  done();
};

/**
 * リロード
 */
const browserSyncReload = (done) => {
  browserSync.reload();
  done();
};

function browserInit() {
  browserSync.init({
    proxy: "http://manayoga.local/",
  });
}

/**
 *
 * ファイル監視 ファイルの変更を検知したら、browserSyncReloadでreloadメソッドを呼び出す
 * series 順番に実行
 * watch('監視するファイル',処理)
 */
const watchFiles = () => {
  gulp.watch(srcPath.php, gulp.series(php, browserSyncReload));
  gulp.watch(srcPath.scss, gulp.series(cssSass));
  gulp.watch(srcPath.js, gulp.series(js, browserSyncReload));
  gulp.watch(srcPath.img, gulp.series(image, browserSyncReload));
  gulp.watch(srcPath.html, gulp.series(html, browserSyncReload));
  gulp.watch(srcPath.css, gulp.series(css, browserSyncReload));
};

/**
 * seriesは「順番」に実行
 * parallelは並列で実行
 *
 * 一度cleanでdistフォルダ内を削除し、最新のものをdistする
 */
exports.default = gulp.series(
  clean,
  gulp.parallel(php, cssSass, js, image, html, css),
  gulp.parallel(watchFiles, browserInit)
);
