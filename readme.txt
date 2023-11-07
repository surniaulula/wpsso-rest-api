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
Requires Plugins: wpsso
Requires PHP: 7.2.34
Requires At Least: 5.5
Tested Up To: 6.4.0
Stable Tag: 2.11.1

Extends the WordPress REST API post, term, and user query results with an array of meta tags and Schema JSON-LD markup.

== Description ==

<!-- about -->

**Extends the WordPress REST API post, term, and user query results:**

* The `html` array includes HTML formatted meta tags and Schema JSON-LD (aka LD+JSON) scripts, as they appear in the webpage head section.
* The `json` array provides Schema JSON-LD (aka LD+JSON) scripts in their decoded format.
* The `parts` array offers meta tag attributes (aka "the parts") as arrays, making it easier to find and use specific meta tag values.

There is no add-on settings page for this plugin - simply install and activate the plugin.

<!-- /about -->

<h3>WPSSO Core Required</h3>

WPSSO REST API (WPSSO REST) is an add-on for the [WPSSO Core plugin](https://wordpress.org/plugins/wpsso/), which provides complete structured data for WordPress to present your content at its best on social sites and in search results – no matter how URLs are shared, reshared, messaged, posted, embedded, or crawled.

== Installation ==

<h3 class="top">Install and Uninstall</h3>

* [Install the WPSSO REST API add-on](https://wpsso.com/docs/plugins/wpsso-rest-api/installation/install-the-plugin/).
* [Uninstall the WPSSO REST API add-on](https://wpsso.com/docs/plugins/wpsso-rest-api/installation/uninstall-the-plugin/).

== Frequently Asked Questions ==

== Screenshots ==

== Changelog ==

<h3 class="top">Version Numbering</h3>

Version components: `{major}.{minor}.{bugfix}[-{stage}.{level}]`

* {major} = Major structural code changes and/or incompatible API changes (ie. breaking changes).
* {minor} = New functionality was added or improved in a backwards-compatible manner.
* {bugfix} = Backwards-compatible bug fixes or small improvements.
* {stage}.{level} = Pre-production release: dev < a (alpha) < b (beta) < rc (release candidate).

<h3>Standard Edition Repositories</h3>

* [GitHub](https://surniaulula.github.io/wpsso-rest-api/)
* [WordPress.org](https://plugins.trac.wordpress.org/browser/wpsso-rest-api/)

<h3>Development Version Updates</h3>

<p><strong>WPSSO Core Premium edition customers have access to development, alpha, beta, and release candidate version updates:</strong></p>

<p>Under the SSO &gt; Update Manager settings page, select the "Development and Up" (for example) version filter for the WPSSO Core plugin and/or its add-ons. When new development versions are available, they will automatically appear under your WordPress Dashboard &gt; Updates page. You can reselect the "Stable / Production" version filter at any time to reinstall the latest stable version.</p>

<p><strong>WPSSO Core Standard edition users (ie. the plugin hosted on WordPress.org) have access to <a href="https://wordpress.org/plugins/wpsso-rest-api/advanced/">the latest development version under the Advanced Options section</a>.</strong></p>

<h3>Changelog / Release Notes</h3>

**Version 3.0.0-b.3 (2021/11/07)**

* **New Features**
	* None.
* **Improvements**
	* None.
* **Bugfixes**
	* None.
* **Developer Notes**
	* Refactored the settings page and metabox load process for WPSSO Core v17.0.0.
* **Requires At Least**
	* PHP v7.2.34.
	* WordPress v5.5.
	* WPSSO Core v17.0.0-b.3.

**Version 2.11.1 (2023/01/26)**

* **New Features**
	* None.
* **Improvements**
	* Updated the minimum WordPress version from v5.2 to v5.5.
* **Bugfixes**
	* None.
* **Developer Notes**
	* Updated the `WpssoAbstractAddOn` library class.
* **Requires At Least**
	* PHP v7.2.34.
	* WordPress v5.5.
	* WPSSO Core v14.7.0.

== Upgrade Notice ==

= 3.0.0-b.3 =

(2021/11/07) Refactored the settings page and metabox load process for WPSSO Core v17.0.0.

= 2.11.1 =

(2023/01/26) Updated the minimum WordPress version from v5.2 to v5.5.

