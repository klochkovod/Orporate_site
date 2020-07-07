const gulp = require('gulp');
const sass = require('gulp-sass');
const rename = require('gulp-rename');
const rigger = require('gulp-rigger');
const uglify = require('gulp-uglify-es').default;

const browserSync = require('browser-sync').create();

gulp.task('copyHTML', function() {
  return gulp.src('app/html/*.html')
    .pipe(rigger())
    .pipe(gulp.dest('public/'));
});

gulp.task('copyPHP', function() {
  return gulp.src('app/php/*.php')
    .pipe(rigger())
    .pipe(gulp.dest('public/'));
});

gulp.task('copyJS', function() {
  return gulp.src('app/js/*.js')
    .pipe(rigger())
    .pipe(uglify())
    .pipe(gulp.dest('public/js/'));
});

gulp.task('sassToCSS', function() {
  return gulp.src('app/scss/*.scss')
    .pipe(rigger())
    .pipe(sass({
      errorLogToConsole: true,
      outputStyle: 'compressed'
    }))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('public/css/'));
});

gulp.task('serve', function() {
  browserSync.init({
    server: 'public'
  });
  browserSync.watch('public/**/*.*').on('change', browserSync.reload);
});

gulp.task('watchFiles', function() {
  gulp.watch('app/scss/*.scss', gulp.series('sassToCSS'));
  gulp.watch('app/js/*.js', gulp.series('copyJS'));
  gulp.watch('app/html/*.html', gulp.series('copyHTML'));
  gulp.watch('app/php/*.php', gulp.series('copyPHP'));
});

gulp.task('default', gulp.parallel('watchFiles', 'serve'));
