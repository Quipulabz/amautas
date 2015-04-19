var gulp        = require('gulp'),
    minifyCss   = require('gulp-minify-css'),
    minifyJs    = require('gulp-minify'),
    concat      = require('gulp-concat'),
    rename      = require('gulp-rename');

gulp.task('minify-css', function(error, f, b) {
    var files = [
        'public/packages/flat-ui/bootstrap/css/bootstrap.css',
        'public/packages/flat-ui/css/flat-ui.css',
        'public/css/quipulabz.css',
    ]

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
        'public/packages/flat-ui/js/jquery-1.10.2.min.js',
        'public/packages/flat-ui/js/jquery-ui-1.10.3.custom.min.js',
        'public/packages/flat-ui/js/jquery.ui.touch-punch.min.js',
        'public/packages/flat-ui/js/bootstrap.min.js',
        'public/packages/flat-ui/js/bootstrap-select.js',
        'public/packages/flat-ui/js/bootstrap-switch.js',
        'public/packages/flat-ui/js/flatui-checkbox.js',
        'public/packages/flat-ui/js/flatui-radio.js',
        'public/packages/flat-ui/js/jquery.placeholder.js',
        'public/packages/flat-ui/js/jquery.tagsinput.js',
        'public/packages/flat-ui/js/typeahead.js',
        'public/packages/flat-ui/js/application.js'
    ]

    gulp.src(files)
        .pipe(concat('flat-ui.js'))
        .pipe(minifyJs())
        .pipe(gulp.dest('./public/js'));

});

gulp.task('default', ['minify-css', 'copy-fonts', 'copy-images', 'minify-js']);