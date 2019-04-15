// Gulp.js configuration
var
  // modules
  gulp = require('gulp'),
  newer = require('gulp-newer'),
  imagemin = require('gulp-imagemin'),
  sass = require('gulp-sass'),
  postcss = require('gulp-postcss'),
  autoprefixer = require('autoprefixer'),
  cssnano = require('cssnano'),

  // development mode?
  devBuild = (process.env.NODE_ENV !== 'production'),

  // folders
  folder = {
    src: 'wp-content/themes/twentynineteen-child/src/',
    build: 'wp-content/themes/twentynineteen-child/build/'
  }
;

// image processing
gulp.task('images', function() {
  var out = folder.build + 'images/';
  return gulp.src(folder.src + 'images/**/*')
    .pipe(newer(out))
    .pipe(imagemin({ optimizationLevel: 5 }))
    .pipe(gulp.dest(out));
});

// CSS processing
gulp.task('css', function() {

  var postCssOpts = [
  autoprefixer({ browsers: ['last 2 versions', '> 2%'] }),
  //cssnano()
  ];

  //if (!devBuild) {
    //postCssOpts.push(cssnano);
  //}

  return gulp.src(folder.src + 'sass/theme.scss')
    .pipe(sass({
      outputStyle: 'nested',
      precision: 3,
      errLogToConsole: true
    }))
    .pipe(postcss(postCssOpts))
    .pipe(gulp.dest(folder.build + 'css/'));

});

gulp.task('watch', function() {
  
  gulp.watch(folder.src + 'sass/**/*', gulp.series('css'));
  
});