/*
 * @title Js
 * @description A task to concatenate and compress js files via webpack.
 */

// Dependencies
import { src, dest, series } from 'gulp';
import uglify  from 'gulp-uglify';
import plumber from 'gulp-plumber';
import errorHandler from '../util/errorHandler.js';

// Config
import { paths } from '../config';

// Task
export function jquery() {
  return src(paths.jquery.src)
    .pipe(plumber({ errorHandler }))
    .pipe(uglify())
    .pipe(dest(paths.jquery.dest));
}
