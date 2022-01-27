<?php
// Define directories.
define('APP_DIR', [
    'root' => dirname(__DIR__),
    'webroot' => dirname(__DIR__) . '/public',
]);

// MySQL settings
define('DB_NAME', '');
define('DB_USER', '');
define('DB_PASSWORD', '');
define('DB_HOST', '');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
// Only numbers, letters, and underscores please!
$table_prefix = 'wp_';

/**
 * Authentication unique keys and salts.
 * You can generate them here {@link https://api.wordpress.org/secret-key/1.1/salt/}.
 */
define('AUTH_KEY', '');
define('SECURE_AUTH_KEY', '');
define('LOGGED_IN_KEY', '');
define('NONCE_KEY', '');
define('AUTH_SALT', '');
define('SECURE_AUTH_SALT', '');
define('LOGGED_IN_SALT', '');
define('NONCE_SALT', '');

/**
 * Debugging settings
 * If WP_DEBUG false, WP_DEBUG_DISPLAY and WP_DEBUG_LOG won't effect
 */
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', true);
define('WP_DEBUG_LOG', APP_DIR['root'] . '/logs/wp-logs.php');

// URL settings
define('WP_HOME', '');
define('WP_SITEURL', '');

// Content directory
define('WP_CONTENT_DIR', APP_DIR['webroot'] . '/content');
define('WP_CONTENT_URL', WP_HOME . '/content');

// Plugin directory
define('WP_PLUGIN_DIR', APP_DIR['webroot'] . '/plugins');
define('WP_PLUGIN_URL', WP_HOME . '/plugins');

// Cookie settings
define('ADMIN_COOKIE_PATH', '/');
define('COOKIE_DOMAIN', '');
define('COOKIEPATH', '');
define('SITECOOKIEPATH', '');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', APP_DIR['webroot'] . '/wp');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
