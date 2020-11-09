var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function() {
  return gulp.src('src/style/main.scss')
    .pipe(sass())
    .pipe(gulp.dest('dist'))
});

gulp.task('html', function(){
  return gulp.src('src/*.html')
      .pipe(gulp.dest('dist'));
});

gulp.task('css', function(){
  return gulp.src('src/style/reset.css')
      .pipe(gulp.dest('dist'));
});

gulp.task('js', function(){
  return gulp.src('src/*.js')
      .pipe(gulp.dest('dist'));
});

gulp.task('images', function(){
  return gulp.src('src/images/**.**')
      .pipe(gulp.dest('dist/images'));
});

gulp.task('watch', function(){
  gulp.watch('src/style/*.scss', gulp.series('sass'));
  gulp.watch('src/*.html', gulp.series('html'));
  gulp.watch('src/*.js', gulp.series('js'));
});