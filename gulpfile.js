var gulp        = require('gulp'),
    minifyCss   = require('gulp-cssnano'),
    minifyJs    = require('gulp-minify'),
    concat      = require('gulp-concat'),
    livereload  = require('gulp-livereload'),
    rename      = require('gulp-rename');

gulp.task('minify-css', function(error, f, b) {
    var files = [
        'public/packages/flat-ui/dist/css/vendor/bootstrap.min.css',
        'public/packages/flat-ui/dist/css/flat-ui.min.css',
        'public/css/quipulabz.css',
    ];

    gulp.src(files)
        .pipe(concat('flat-ui.min.css'))
        .pipe(minifyCss())
        .pipe(gulp.dest('./public/css'));
});

gulp.task('copy-fonts', function(error, f, b) {

    gulp.src('public/packages/flat-ui/fonts/**/*')
        .pipe(gulp.dest('./public/fonts'));
});

gulp.task('copy-images', function(error, f, b) {

    gulp.src('public/packages/flat-ui/images/**/*')
        .pipe(gulp.dest('./public/images'));

});

gulp.task('minify-js', function(error, f, b) {
    var files = [
        'public/packages/flat-ui/dist/js/vendor/jquery.min.js',
        'public/packages/flat-ui/dist/js/vendor/video.js',
        'public/packages/flat-ui/dist/js/flat-ui.min.js',
        'public/packages/flat-ui/js/radiocheck.js',
        'public/packages/typed.js/dist/js/typed.min.js',
        'public/packages/vue/dist/vue.min.js',
    ];

    gulp.src(files)
        .pipe(concat('flat-ui.min.js'))
        .pipe(minifyJs())
        .pipe(gulp.dest('./public/js'));
});

gulp.task('php', function(){
   gulp.src('app/**/*.php')
       .pipe(livereload());
});

gulp.task('livereload', function(error,f,b){
    gulp.watch('app/**/*.php', ['php']);
    livereload.listen();
});

gulp.task('default', ['minify-css', 'copy-fonts', 'copy-images', 'minify-js']);