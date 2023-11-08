<?php
/*
 * Plugin Name: WPSSO REST API
 * Plugin Slug: wpsso-rest-api
 * Text Domain: wpsso-rest-api
 * Domain Path: /languages
 * Plugin URI: https://wpsso.com/extend/plugins/wpsso-rest-api/
 * Assets URI: https://surniaulula.github.io/wpsso-rest-api/assets/
 * Author: JS Morisset
 * Author URI: https://wpsso.com/
 * License: GPLv3
 * License URI: https://www.gnu.org/licenses/gpl.txt
 * Description: Extends the WordPress REST API post, term, and user query results with an array of meta tags and Schema JSON-LD markup.
 * Requires Plugins: wpsso
 * Requires PHP: 7.2.34
 * Requires At Least: 5.5
 * Tested Up To: 6.4.0
 * Version: 3.0.0-rc.1
 *
 * Version Numbering: {major}.{minor}.{bugfix}[-{stage}.{level}]
 *
 *      {major}         Major structural code changes and/or incompatible API changes (ie. breaking changes).
 *      {minor}         New functionality was added or improved in a backwards-compatible manner.
 *      {bugfix}        Backwards-compatible bug fixes or small improvements.
 *      {stage}.{level} Pre-production release: dev < a (alpha) < b (beta) < rc (release candidate).
 *
 * Copyright 2018-2023 Jean-Sebastien Morisset (https://wpsso.com/)
 */

if ( ! defined( 'ABSPATH' ) ) {

	die( 'These aren\'t the droids you\'re looking for.' );
}

if ( ! class_exists( 'WpssoAbstractAddOn' ) ) {

	require_once dirname( __FILE__ ) . '/lib/abstract/add-on.php';
}

if ( ! class_exists( 'WpssoRest' ) ) {

	class WpssoRest extends WpssoAbstractAddOn {

		public $filters;	// WpssoRestFilters class object.

		protected $p;	// Wpsso class object.

		private static $instance = null;	// WpssoRest class object.

		public function __construct() {

			parent::__construct( __FILE__, __CLASS__ );
		}

		public static function &get_instance() {

			if ( null === self::$instance ) {

				self::$instance = new self;
			}

			return self::$instance;
		}

		public function init_textdomain() {

			load_plugin_textdomain( 'wpsso-rest-api', false, 'wpsso-rest-api/languages/' );
		}

		/*
		 * Called by Wpsso->set_objects which runs at init priority 10.
		 */
		public function init_objects() {

			$this->p =& Wpsso::get_instance();

			if ( $this->p->debug->enabled ) {

				$this->p->debug->mark();
			}

			if ( $this->get_missing_requirements() ) {	// Returns false or an array of missing requirements.

				return;	// Stop here.
			}

			$this->filters = new WpssoRestFilters( $this->p, $this );
		}
	}

	WpssoRest::get_instance();
}
