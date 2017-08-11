
var gulp           = require('gulp'),
		gutil          = require('gulp-util' ),
		sass           = require('gulp-sass'),
		browserSync    = require('browser-sync'),
		concat         = require('gulp-concat'),
		uglify         = require('gulp-uglify'),
		cleanCSS       = require('gulp-clean-css'),
		rename         = require('gulp-rename'),
		del            = require('del'),
		imagemin       = require('gulp-imagemin'),
		cache          = require('gulp-cache'),
		autoprefixer   = require('gulp-autoprefixer'),
		bourbon        = require('node-bourbon'),
		ftp            = require('vinyl-ftp'),
		notify         = require("gulp-notify");

gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: "http://http://laravelfinal.loc/public/"
    });
});
gulp.task('watch', ['browser-sync'], function() {
	gulp.watch('app/*.html', browserSync.reload);
	gulp.watch('app/*.php', browserSync.reload);	
});
gulp.task('default', ['watch']);