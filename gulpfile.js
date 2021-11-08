var gulp =require('gulp');
var rename =require('gulp-rename');
var sass = require ('gulp-sass') (require ('sass'));
var browserSync =require('browser-sync').create();

function  css_style(done){
    gulp.src('./#src/scss/**/*.scss')
        .pipe( sass())
        .pipe(rename({suffix:'.min'}))
        .pipe( gulp.dest('./#src/css/'))
        .pipe(browserSync.stream())
    done();
}
function print(done){
    console.log("Hi!");
    done();

}

function watchSass(){
    gulp.watch("./#src/scss/**/*", css_style);
}
function watchFiles(){
    gulp.watch("./#src/scss/**/*", css_style);
    gulp.watch("./#src/**/*.html", browserReload);
    gulp.watch("./#src/**/*.php", browserReload);
    gulp.watch("./#src/**/*.js", browserReload);
}

function sync(done){
    browserSync.init({
        server:{
            baseDir:"./"
        },
        port: 8000
    });
    done();
}
function browserReload(done){
    browserSync.reload();
    done();
}

gulp.task('default',gulp.parallel(watchSass,sync));
gulp.task(sync);
//gulp.task(css_style);
