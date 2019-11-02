<?php
/**
 * License: GPLv3
 * License URI: https://www.gnu.org/licenses/gpl.txt
 * Copyright 2016-2019 Jean-Sebastien Morisset (https://wpsso.com/)
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( 'These aren\'t the droids you\'re looking for...' );
}

if ( ! class_exists( 'WpssoRestConfig' ) ) {

	class WpssoRestConfig {

		public static $cf = array(
			'plugin' => array(
				'wpssorest' => array(			// Plugin acronym.
					'version'     => '2.0.3',	// Plugin version.
					'opt_version' => '1',		// Increment when changing default option values.
					'short'       => 'WPSSO REST',	// Short plugin name.
					'name'        => 'WPSSO REST API',
					'desc'        => 'Enhances the WordPress REST API post, term, and user queries with an array of Social and Search Engine Optimization meta tags and Schema markup.',
					'slug'        => 'wpsso-rest-api',
					'base'        => 'wpsso-rest-api/wpsso-rest-api.php',
					'update_auth' => '',
					'text_domain' => 'wpsso-rest-api',
					'domain_path' => '/languages',
					'req'         => array(
						'short'       => 'WPSSO Core',
						'name'        => 'WPSSO Core',
						'min_version' => '6.11.0',
					),
					'assets' => array(
						'icons' => array(
							'low'  => 'images/icon-128x128.png',
							'high' => 'images/icon-256x256.png',
						),
					),
					'lib' => array(
						'pro' => array(
						),
						'std' => array(
						),
					),
				),
			),
		);

		public static function get_version( $add_slug = false ) {

			$info =& self::$cf[ 'plugin' ][ 'wpssorest' ];

			return $add_slug ? $info[ 'slug' ] . '-' . $info[ 'version' ] : $info[ 'version' ];
		}

		public static function set_constants( $plugin_filepath ) { 

			if ( defined( 'WPSSOREST_VERSION' ) ) {	// Define constants only once.
				return;
			}

			$info =& self::$cf[ 'plugin' ][ 'wpssorest' ];

			/**
			 * Define fixed constants.
			 */
			define( 'WPSSOREST_FILEPATH', $plugin_filepath );						
			define( 'WPSSOREST_PLUGINBASE', $info[ 'base' ] );	// Example: wpsso-rest-api/wpsso-rest-api.php.
			define( 'WPSSOREST_PLUGINDIR', trailingslashit( realpath( dirname( $plugin_filepath ) ) ) );
			define( 'WPSSOREST_PLUGINSLUG', $info[ 'slug' ] );	// Example: wpsso-rest-api.
			define( 'WPSSOREST_URLPATH', trailingslashit( plugins_url( '', $plugin_filepath ) ) );
			define( 'WPSSOREST_VERSION', $info[ 'version' ] );						
		}

		public static function require_libs( $plugin_filepath ) {

			require_once WPSSOREST_PLUGINDIR . 'lib/register.php';
			require_once WPSSOREST_PLUGINDIR . 'lib/filters.php';

			add_filter( 'wpssorest_load_lib', array( 'WpssoRestConfig', 'load_lib' ), 10, 3 );
		}

		public static function load_lib( $ret = false, $filespec = '', $classname = '' ) {

			if ( false === $ret && ! empty( $filespec ) ) {

				$filepath = WPSSOREST_PLUGINDIR . 'lib/' . $filespec . '.php';

				if ( file_exists( $filepath ) ) {

					require_once $filepath;

					if ( empty( $classname ) ) {
						return SucomUtil::sanitize_classname( 'wpssorest' . $filespec, $allow_underscore = false );
					} else {
						return $classname;
					}
				}
			}

			return $ret;
		}
	}
}
