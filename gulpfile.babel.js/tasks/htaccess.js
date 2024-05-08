/*
 * @title htaccess
 */

// Dependencies
import { src, dest } from 'gulp';
import plumber from 'gulp-plumber';
import errorHandler from '../util/errorHandler.js';

// Config
import { paths } from '../config';

// Task
export function htaccess() {
  return src(paths.htaccess.src)
    .pipe(plumber({ errorHandler }))
    .pipe(dest(paths.htaccess.dest));
}
