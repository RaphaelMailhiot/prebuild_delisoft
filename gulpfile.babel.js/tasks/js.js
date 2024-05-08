/*
 * @title Js
 * @description A task to concatenate and compress js files via webpack.
 */

// Dependencies
import { src, dest, series } from 'gulp';
import gulpWebpack from 'webpack-stream';
import plumber from 'gulp-plumber';
import errorHandler from '../util/errorHandler.js';

// Config
import { paths } from '../config';

// Task
export function js() {
  return src(paths.js.src)
    .pipe(plumber({ errorHandler }))
    //.pipe(gulpWebpack(require('../webpack.config.js')))
    .pipe(dest(paths.js.dest));
}
