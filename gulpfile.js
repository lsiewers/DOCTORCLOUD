const gulp = require('gulp');
const sass = require('gulp-sass');
const minifyCss = require('gulp-minify-css')
const concat = require('gulp-concat')
const rename = require('gulp-rename')

gulp.task('styles', function() {
    gulp.src('./assets/scss/**/*.scss')
        .pipe(sass.sync({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(minifyCss())
        .pipe(concat('style.css'))
        .pipe(rename({
            basename: 'style',
            extname: '.min.css'
        }))
        .pipe(gulp.dest('./'));
});

//Watch task
gulp.task('default',function() {
    gulp.watch('assets/scss/**/*.scss',['styles']);
});