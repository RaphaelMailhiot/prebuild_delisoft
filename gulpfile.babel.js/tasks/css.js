/*
 * @title Css
 * @description A task to compile CSS.
 */

// Dependencies
import { dest, src } from "gulp";
import { paths } from "../config";
import plumber from "gulp-plumber";
import errorHandler from "../util/errorHandler";

const gulp = require('gulp');
const cleanCSS = require('gulp-clean-css');

export function css() {
  return src(paths.css.src)
    .pipe(plumber({ errorHandler }))
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(dest(paths.css.dest));
}
