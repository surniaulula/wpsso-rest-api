<?php
/**
 * License: GPLv3
 * License URI: https://www.gnu.org/licenses/gpl.txt
 * Copyright 2016-2018 Jean-Sebastien Morisset (https://wpsso.com/)
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( 'These aren\'t the droids you\'re looking for...' );
}

if ( ! class_exists( 'WpssoRestConfig' ) ) {

	class WpssoRestConfig {

		public static $cf = array(
			'plugin' => array(
				'wpssorest' => array(			// Plugin acronym.
					'version'     => '1.2.0',	// Plugin version.
					'opt_version' => '1',		// Increment when changing default option values.
					'short'       => 'WPSSO REST',	// Short plugin name.
					'name'        => 'WPSSO REST API',
					'desc'        => 'WPSSO Core add-on offers an array of meta tags and Schema markup in the WordPress REST API post, term, and user queries.',
					'slug'        => 'wpsso-rest-api',
					'base'        => 'wpsso-rest-api/wpsso-rest-api.php',
					'update_auth' => '',
					'text_domain' => 'wpsso-rest-api',
					'domain_path' => '/languages',
					'req' => array(
						'short'       => 'WPSSO Core',
						'name'        => 'WPSSO Core',
						'min_version' => '4.18.4',
					),
					'img' => array(
						'icons' => array(
							'low'  => 'images/icon-128x128.png',
							'high' => 'images/icon-256x256.png',
						),
					),
					'lib' => array(
						'gpl' => array(
						),
						'pro' => array(
						),
					),
				),
			),
		);

		public static function get_version( $add_slug = false ) {

			$ext  = 'wpssorest';
			$info =& self::$cf[ 'plugin' ][$ext];

			return $add_slug ? $info[ 'slug' ] . '-' . $info[ 'version' ] : $info[ 'version' ];
		}

		public static function set_constants( $plugin_filepath ) { 

			if ( defined( 'WPSSOREST_VERSION' ) ) {	// Define constants only once.
				return;
			}

			define( 'WPSSOREST_FILEPATH', $plugin_filepath );						
			define( 'WPSSOREST_PLUGINBASE', self::$cf[ 'plugin' ][ 'wpssorest' ][ 'base' ] );		// wpsso-rest-api/wpsso-rest-api.php
			define( 'WPSSOREST_PLUGINDIR', trailingslashit( realpath( dirname( $plugin_filepath ) ) ) );
			define( 'WPSSOREST_PLUGINSLUG', self::$cf[ 'plugin' ][ 'wpssorest' ][ 'slug' ] );		// wpsso-rest-api
			define( 'WPSSOREST_URLPATH', trailingslashit( plugins_url( '', $plugin_filepath ) ) );
			define( 'WPSSOREST_VERSION', self::$cf[ 'plugin' ][ 'wpssorest' ][ 'version' ] );						
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
