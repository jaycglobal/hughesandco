var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
var rename = require('gulp-rename');
var concatCss = require('gulp-concat-css');



gulp.task('default', function(){
    init_browserSync();

    // Watch scss files
    gulp.watch("assets/styles/*.scss", gulp.series('sass'))
    //gulp.watch("assets/styles/*.min.css").on('change', bs_reload);
    
});

gulp.task('sass', function(done) {
    return gulp.src("assets/styles/main.scss")
        .pipe(sass())                                       // Decompile SASS to CSS
        .pipe(autoprefixer({                                // Auto-prefix CSS
			cascade: false,
		}))
        .pipe(gulp.dest("assets/styles"))                      // Save CSS 
        .pipe(cleanCSS({compatibility: 'ie8'}))             // Minify CSS
        .pipe(rename({ suffix: '.min' }))                   // Rename CSS file
        .pipe(gulp.dest("assets/styles"))                      // Save CSS
        .pipe(browserSync.stream());
        
})

gulp.task('bs-reload', function(){
    // Reload page
    browserSync.reload();

})


// Initialise browserSync
function init_browserSync() {
    browserSync.init({
        proxy: "http://localhost:8666/hughesco/", // The localhost URL + Port
        rewriteRules: [
            {
                match: /localhost:80/g,
                fn: function (req, res, match) {
                    return 'localhost:8666';
                }
            }
        ]
    });
}