/*
 * @title php
 * @description A task to compile php
 */

// Dependencies
import { src, dest } from 'gulp';
import plumber from 'gulp-plumber';
import errorHandler from '../util/errorHandler.js';

// Config
import { paths } from '../config';

// Tâche pour copier des fichiers PHP
export function php() {
  return src(paths.php.src)
    .pipe(plumber({ errorHandler }))
    .pipe(dest(paths.php.dest));
}
