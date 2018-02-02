const gulp = require('gulp'),
    uglify = require('gulp-uglify'),
    sass = require('gulp-sass'),
    browserSync = require('browser-sync').create(),
    shell = require('gulp-shell');


// Compress JavaScript
gulp.task('uglify', function() {
    gulp.src('src/js/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('dist/js'));
});

// Minify CSS
gulp.task('minify', function() {
    gulp.src('src/sass/main.scss')
        .pipe(sass({
            outputStyle: 'compressed'
        })).on('error', sass.logError)
        .pipe(gulp.dest('dist/css'))
        .pipe(browserSync.stream());
});

gulp.task('sass-watch', ['minify'], browserSync.reload());

gulp.task('watch', function() {
    browserSync.init({
        proxy: "senalbape.indie",
        injectChanges: true,
    });
    gulp.watch('*.php').on('change', browserSync.reload);
    gulp.watch('src/js/*.js', ['uglify']);
    gulp.watch('src/sass/*.scss', ['sass-watch']);
});

gulp.task('default', ['uglify', 'minify', 'watch']);