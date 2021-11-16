=== WPSSO REST API ===
Plugin Name: WPSSO REST API
Plugin Slug: wpsso-rest-api
Text Domain: wpsso-rest-api
Domain Path: /languages
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl.txt
Assets URI: https://surniaulula.github.io/wpsso-rest-api/assets/
Tags: rest, api, rest api, meta tags, schema, markup
Contributors: jsmoriss
Requires PHP: 7.2
Requires At Least: 5.2
Tested Up To: 5.8.2
Stable Tag: 2.9.0

Extends the WordPress REST API post, term, and user query results with an array of meta tags and Schema JSON-LD markup.

== Description ==

<!-- about -->

**The WPSSO REST API add-on extends the WordPress REST API post, term, and user query results.**

Includes a `head` element in the WordPress REST API results to provide `html`, `json`, and `parts` arrays:

* The `html` array includes HTML formatted meta tags and Schema JSON-LD (aka LD+JSON) scripts, as they appear in the webpage head section.
* The `json` array provides Schema JSON-LD (aka LD+JSON) scripts in their decoded format.
* The `parts` array offers meta tag attributes (aka "the parts") as arrays, making it easier to find and use specific meta tag values.

There is no add-on settings page for this plugin - simply *install* and *activate* the plugin.

<!-- /about -->

<h3>WPSSO Core Required</h3>

WPSSO REST API (WPSSO REST) is an add-on for the [WPSSO Core plugin](https://wordpress.org/plugins/wpsso/).

== Installation ==

<h3 class="top">Install and Uninstall</h3>

* [Install the WPSSO REST API add-on](https://wpsso.com/docs/plugins/wpsso-rest-api/installation/install-the-plugin/).
* [Uninstall the WPSSO REST API add-on](https://wpsso.com/docs/plugins/wpsso-rest-api/installation/uninstall-the-plugin/).

== Frequently Asked Questions ==

== Screenshots ==

== Changelog ==

<h3 class="top">Version Numbering</h3>

Version components: `{major}.{minor}.{bugfix}[-{stage}.{level}]`

* {major} = Major structural code changes / re-writes or incompatible API changes.
* {minor} = New functionality was added or improved in a backwards-compatible manner.
* {bugfix} = Backwards-compatible bug fixes or small improvements.
* {stage}.{level} = Pre-production release: dev < a (alpha) < b (beta) < rc (release candidate).

<h3>Standard Edition Repositories</h3>

* [GitHub](https://surniaulula.github.io/wpsso-rest-api/)
* [WordPress.org](https://plugins.trac.wordpress.org/browser/wpsso-rest-api/)

<h3>Development Version Updates</h3>

<p><strong>WPSSO Core Premium customers have access to development, alpha, beta, and release candidate version updates:</strong></p>

<p>Under the SSO &gt; Update Manager settings page, select the "Development and Up" (for example) version filter for the WPSSO Core plugin and/or its add-ons. Save the plugin settings and click the "Check for Plugin Updates" button to fetch the latest version information. When new development versions are available, they will automatically appear under your WordPress Dashboard &gt; Updates page. You can always reselect the "Stable / Production" version filter at any time to reinstall the latest stable version.</p>

<h3>Changelog / Release Notes</h3>

**Version 2.9.1 (2021/11/16)**

* **New Features**
	* None.
* **Improvements**
	* None.
* **Bugfixes**
	* None.
* **Developer Notes**
	* Refactored the `SucomAddOn->get_missing_requirements()` method.
* **Requires At Least**
	* PHP v7.2.
	* WordPress v5.2.
	* WPSSO Core v9.8.0.

**Version 2.9.0 (2021/09/24)**

Maintenance release for WPSSO Core v9.0.0.

* **New Features**
	* None.
* **Improvements**
	* None.
* **Bugfixes**
	* None.
* **Developer Notes**
	* None.
* **Requires At Least**
	* PHP v7.0.
	* WordPress v5.0.
	* WPSSO Core v9.0.0.

**Version 2.8.1 (2021/02/25)**

* **New Features**
	* None.
* **Improvements**
	* Updated the banners and icons of WPSSO Core and its add-ons.
* **Bugfixes**
	* None.
* **Developer Notes**
	* None.
* **Requires At Least**
	* PHP v7.0.
	* WordPress v4.7.
	* WPSSO Core v8.34.0.

**Version 2.8.0 (2020/12/04)**

* **New Features**
	* None.
* **Improvements**
	* None.
* **Bugfixes**
	* None.
* **Developer Notes**
	* Included the `$addon` argument for library class constructors.
* **Requires At Least**
	* PHP v7.0.
	* WordPress v4.7.
	* WPSSO Core v8.16.0.

**Version 2.7.1 (2020/10/17)**

* **New Features**
	* None.
* **Improvements**
	* Refactored the add-on class to extend a new WpssoAddOn abstract class.
* **Bugfixes**
	* Fixed backwards compatibility with older 'init_objects' and 'init_plugin' action arguments.
* **Developer Notes**
	* Added a new WpssoAddOn class in lib/abstracts/add-on.php.
	* Added a new SucomAddOn class in lib/abstracts/com/add-on.php.
* **Requires At Least**
	* PHP v5.6.
	* WordPress v4.7.
	* WPSSO Core v8.13.0.

== Upgrade Notice ==

= 2.9.1 =

(2021/11/16) Refactored the `SucomAddOn->get_missing_requirements()` method.

= 2.9.0 =

(2021/09/24) Maintenance release for WPSSO Core v9.0.0.

= 2.8.1 =

(2021/02/25) Updated the banners and icons of WPSSO Core and its add-ons.

= 2.8.0 =

(2020/12/04) Included the `$addon` argument for library class constructors.

= 2.7.1 =

(2020/10/17) Refactored the add-on class to extend a new WpssoAddOn abstract class.

