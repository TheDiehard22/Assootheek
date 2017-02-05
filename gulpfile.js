var gulp = require('gulp'),
    sass = require('gulp-sass'),
    cssnano = require('gulp-cssnano'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    autoprefixer = require('gulp-autoprefixer'),
    notify = require('gulp-notify');

gulp.task("default", ["compile-js", "compile-sass"], function() {

});

gulp.task("compile-sass", function() {
    gulp.src("src/scss/style.scss")
        .pipe(sass())
        .pipe(concat('style.css'))
        .pipe(autoprefixer({
          browsers: ['last 2 versions'],
          cascade: false
        }))
        .pipe(cssnano())
        .pipe(gulp.dest(""));
});

gulp.task("compile-js", function() {
    gulp.src(['bower_components/jquery/dist/jquery.js', 'bower_components/flexslider/jquery.flexslider-min.js', 'src/js/*.js'])
        .pipe(concat('min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('src/'));
    //.pipe(browsersync.stream());
});

gulp.task('watch', function() {
    gulp.watch('src/scss/**/*.scss', ['compile-sass']);
    gulp.watch('src/js/**/*.js', ['compile-js']);
});
