const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer').default;
const cleanCSS = require('gulp-clean-css');

function styles() {
    return gulp.src('./assets/scss/app.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({ cascade: false }))
        .pipe(cleanCSS())
        .pipe(gulp.dest('./assets/css/'));
}

function watch() {
    gulp.watch('./assets/scss/**/*.scss', styles);
}

exports.styles = styles;
exports.watch = watch;
exports.default = watch;