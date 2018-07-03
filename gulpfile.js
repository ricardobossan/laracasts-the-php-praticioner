const gulp = require('gulp');
const bSrc = require('browser-sync').create();
const bSpecRunner = require('browser-sync').create();
/*
const sass = require('gulp-sass');
const autoprefixer('gulp-autoprefixer');
*/

gulp.task('default', () => {
	// Reloads browser
	gulp.watch("src/*.html").on('change', bSrc.reload);
	gulp.watch("src/js/*.js").on('change', bSrc.reload);
	gulp.watch('spec/spec.js').on('change', bSrc.reload);
	gulp.watch("*.html").on('change', bSpecRunner.reload);
	gulp.watch("js/*.js").on('change', bSpecRunner.reload);
	gulp.watch('spec/spec.js').on('change', bSpecRunner.reload);

	// Servers
	bSrc.init({
		server: "./",
		port: 3000,
		index: "index.html",
		ui: false

	});
	bSpecRunner.init({
		server: "./",
		port: 8080,
		index: "spec/SpecRunner.html",
		ui: false
	});
});
// If use sass
//gulp.task('sass', function () {
//	return gulp.src('./sass/**/*.scss')
//		.pipe(sass.sync().on('error', sass.logError))
//		.pipe(gulp.dest('./css'));
//});
//
//gulp.task('sass:watch', function () {
//	gulp.watch('./sass/**/*.scss', ['sass']);
//});