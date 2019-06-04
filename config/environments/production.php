<?php

use Roots\WPConfig\Config;

Config::define( 'SPINUPWP_CACHE_PATH', '/cache/eginfusions.com' );
Config::define( 'WP_CACHE_KEY_SALT', 'eginfusions.com' );
Config::define( 'WP_REDIS_SELECTIVE_FLUSH', true );
if ( env( 'WP_ROCKET_KEY' ) ) {
    define( 'WP_ROCKET_KEY', env( 'WP_ROCKET_KEY' ) );
}
// Your email, the one you used for the purchase.
if ( env( 'WP_ROCKET_EMAIL' ) ) {
    define( 'WP_ROCKET_EMAIL', env( 'WP_ROCKET_EMAIL' ) );
}
