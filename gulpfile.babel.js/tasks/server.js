/*
 * @title Server
 * @description A task to initialise a local server.
 */

const os = require('os');

// Dependencies
import browserSync from 'browser-sync';

// Config
import { paths, browsers } from '../config';

export function serve(cb) {
  browserSync.init({
    proxy: paths.dev,
    ghostMode: false,
    notify: false,
    browser: browsers,
    host: "10.10.50.214",
  });
  cb();
}

export function reload(cb) {
  browserSync.reload();
  cb();
}
