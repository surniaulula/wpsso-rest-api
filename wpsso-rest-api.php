<?php
/**
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
 * Description: Enhances the WordPress REST API post, term and user queries with an array of social meta tags, SEO HTML tags and Schema JSON-LD markup.
 * Requires PHP: 5.6
 * Requires At Least: 4.7
 * Tested Up To: 5.5.1
 * Version: 2.7.1
 * 
 * Version Numbering: {major}.{minor}.{bugfix}[-{stage}.{level}]
 *
 *      {major}         Major structural code changes / re-writes or incompatible API changes.
 *      {minor}         New functionality was added or improved in a backwards-compatible manner.
 *      {bugfix}        Backwards-compatible bug fixes or small improvements.
 *      {stage}.{level} Pre-production release: dev < a (alpha) < b (beta) < rc (release candidate).
 * 
 * Copyright 2016-2020 Jean-Sebastien Morisset (https://wpsso.com/)
 */

if ( ! defined( 'ABSPATH' ) ) {

	die( 'These aren\'t the droids you\'re looking for.' );
}

if ( ! class_exists( 'WpssoAddOn' ) ) {

	require_once dirname( __FILE__ ) . '/lib/abstracts/add-on.php';	// WpssoAddOn class.
}

if ( ! class_exists( 'WpssoRest' ) ) {

	class WpssoRest extends WpssoAddOn {

		public $filters;	// WpssoRestFilters class.

		protected $p;

		private static $instance = null;

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

		public function init_objects( $is_admin ) {

			$this->p =& Wpsso::get_instance();

			if ( $this->p->debug->enabled ) {

				$this->p->debug->mark();
			}

			if ( $this->get_missing_requirements() ) {	// Returns false or an array of missing requirements.

				return;	// Stop here.
			}

			$this->filters = new WpssoRestFilters( $this->p );
		}
	}

	WpssoRest::get_instance();
}
