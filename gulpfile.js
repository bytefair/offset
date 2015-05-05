'use strict'

const gulp = require('gulp')
    , sass = require('gulp-sass')
    , sourcemaps = require('gulp-sourcemaps')

gulp.task('sass', function() {
  gulp.src('./sass/*.scss')
      .pipe(sourcemaps.init())
      .pipe(sass())
      .pipe(sourcemaps.write('./'))
      .pipe(gulp.dest('./css'))
})
