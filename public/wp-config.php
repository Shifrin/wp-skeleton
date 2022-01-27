<?php

/**
 * Load the autoloader first.
 */
require_once dirname(__DIR__) . '/vendor/autoload.php';
/**
 * Load the WordPress config file.
 */
require_once dirname(__DIR__) . '/config/config.php';

// registering a custom theme directory
register_theme_directory(APP_DIR['webroot'] . '/themes');
