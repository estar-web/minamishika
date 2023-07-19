const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");
const cssSorter = require("css-declaration-sorter");
const mmq = require("gulp-merge-media-queries");

const browserSync = require("browser-sync");

const cleanCss = require("gulp-clean-css");
const uglify = require("gulp-uglify");
const rename = require("gulp-rename");

const htmlBeautify = require("gulp-html-beautify")

function test(done){
  console.log("hello gulp");
  done();
}

function compileSass(){
  return gulp.src("./src/assets/sass/**/*.scss")
  .pipe(sass())
  .pipe(postcss([autoprefixer(),cssSorter({
    order:"smacss"
  }
  ),]))
  .pipe(mmq())
  .pipe(gulp.dest("../css/"))
  .pipe(cleanCss())
  .pipe(rename({
    suffix: ".min"
  }))
  .pipe(gulp.dest("../css/"))
}

function watch(){
  gulp.watch("./src/assets/sass/**/*.scss",gulp.series(compileSass,browserReload));
  gulp.watch("./src/assets/js/**/*.js",gulp.series(compileSass,browserReload));
  gulp.watch("./src/assets/img/**/*",gulp.series(compileSass,browserReload));
  gulp.watch("../**/*.php",gulp.series(compileSass,browserReload));
}

function browserInit(done) {
  browserSync.init({
    // server: {
    //   baseDir: "./public/"
		// }
		proxy: "http://minamishika.local/"
	});
	done();
}

function browserReload(done){
  browserSync.reload();
  done();
}

function minJS(){
  return gulp.src("./src/assets/js/*.js")
  .pipe(uglify())
  .pipe(rename({
    suffix: ".min"
  }))
  .pipe(gulp.dest("../js/"))
}

function formatHTML(){
  return gulp.src("./src/**/*.html")
  .pipe(htmlBeautify({
    "indent_size": 2,
    "indent_with_tabs": true,
  }))
  .pipe(gulp.dest("./public"))
}

function copyImage(){
	return gulp.src('./src/assets/img/**/*')
	.pipe(gulp.dest("../img/"))
}

exports.test = test;
exports.compileSass = compileSass;
exports.watch = watch;
exports.browserInit = browserInit;
exports.dev = gulp.parallel(browserInit,watch);
exports.minJS = minJS;
// exports.formatHTML = formatHTML;
exports.build = gulp.parallel(minJS,compileSass,copyImage);