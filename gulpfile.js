const gulp = require('gulp');
const bSrc = require('browser-sync').create();
const bSpecRunner = require('browser-sync').create();
/*
const sass = require('gulp-sass');
const autoprefixer('gulp-autoprefixer');
*/

gulp.task('default', /*['sass:watch'],*/ () => {// if using sass, uncomment on this line
	// Reloads browser
	gulp.watch("src/*.html").on('change', bSrc.reload);
	gulp.watch("src/js/*.js").on('change', bSrc.reload);
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

/*
If creates `dist` directory, for production:
*/
//Copies all files from the `src` directory, as well as the README.md file, to a `dist` folder
//gulp.task('dist', function() {
//	gulp.src(['./src/**/*','./*.md'])
//		.pipe(gulp.dest('./dist'));
//});

/*
If use sass:
*/
//gulp.task('sass', function () {
//	return gulp.src('./sass/**/*.scss')
//		.pipe(sass.sync().on('error', sass.logError))
//		.pipe(autoprefixer({
//			browsers: ['last 2 versions']
//		}))
//		.pipe(gulp.dest('./css'));
//});
//
//gulp.task('sass:watch', function () {
//	gulp.watch('./sass/**/*.scss', ['sass']);
//});