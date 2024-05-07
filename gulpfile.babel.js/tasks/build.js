/*
 * @title Build
 * @description A task to compile production code.
 */

// Dependencies
import { series, parallel } from 'gulp';

// Tasks
import { clean } from './clean';
import { styles } from './styles';
import { scripts } from './scripts';
import { templates } from './templates';
import { php } from './php';
import { assets } from './assets';

export const build = series(
  clean,
  parallel(styles, scripts, templates, php, assets) //php
);
