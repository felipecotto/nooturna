//add more here if you want to include more libraries
var gulp         = require('gulp'),
    uglify       = require('gulp-uglify'),
    sass         = require('gulp-sass'),
    plumber      = require('gulp-plumber'),
    livereload   = require('gulp-livereload'),
    concat       = require('gulp-concat'),
    rename       = require("gulp-rename"),
    imagemin     = require('gulp-imagemin'),
    postcss      = require('gulp-postcss'),
    flexbugs     = require('postcss-flexbugs-fixes'),
    autoprefixer = require('autoprefixer');

/* 
*  SCRIPTS TASK
*  Minify, Concat 
*/

/*----------  Libraries JS  ----------*/
gulp.task('libraries', function() {
    gulp.src('template/js/libraries/**/**/*.js')
    .pipe(plumber())
    .pipe(uglify())
    .pipe(concat('libraries.min.js'))
    .pipe(gulp.dest('dist/js'))
    .pipe(livereload());
});

/*----------  Sripts JS ----------*/
gulp.task('scripts', function() {
    gulp.src('template/js/scripts/**/**/*.js')
    .pipe(plumber())
    .pipe(uglify())
    .pipe(concat('scripts.min.js'))
    .pipe(gulp.dest('dist/js'))
    .pipe(livereload());
});

// STYLES TASK
// Minify CSS, Compile SASS
gulp.task('styles-min', function() {
    gulp.src('template/scss/*.scss')
    .pipe(plumber())
    .pipe(sass({
        outputStyle: 'compressed'
    }).on('error', sass.logError))
    .pipe(rename({ suffix: '.min' }))
    .pipe(postcss([
        require('autoprefixer')({
            browsers: 'last 2 version'
        }),
        require('postcss-flexbugs-fixes')
    ]))
    .pipe(gulp.dest('dist/css'))
    .pipe(livereload());
});

gulp.task('styles', function() {
    gulp.src('template/scss/*.scss')
    .pipe(plumber())
    .pipe(sass({
        outputStyle: 'expanded'
    }).on('error', sass.logError))
    .pipe(postcss([
        require('autoprefixer')({
            browsers: 'last 2 version'
        }),
        require('postcss-flexbugs-fixes')
    ]))
    .pipe(gulp.dest('dist/css'))
    .pipe(livereload());
});

/*----------  Image optimizer ----------*/
gulp.task('images', () =>
    gulp.src('dist/images/**/*')
    .pipe(imagemin())
    .pipe(gulp.dest('dist/images/compressed'))
    .pipe(livereload())
);

// Watch Task
gulp.task('Watch Styles', function(){

    var server = livereload();
    livereload.listen();
    
    gulp.watch('template/scss/**/**/*.scss', ['styles-min']);
    gulp.watch('template/scss/**/**/*.scss', ['styles']);
});

// Watch Task
gulp.task('Watch Scripts', function(){

    var server = livereload();
    livereload.listen();

    gulp.watch('template/js/scripts/**/*.js', ['scripts']);
    gulp.watch('template/js/libraries/**/*.js', ['libraries']);
});

// Watch Task
gulp.task('Watch Images', function(){

    var server = livereload();
    livereload.listen();
    gulp.watch('template/images/**/**/*', ['images']);
});


// DEFAULT TASK
gulp.task('default', [
    'Watch Styles', 
    'Watch Scripts', 
    'Watch Images', 
]);