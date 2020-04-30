=== REST API | WPSSO Add-on ===
Plugin Name: WPSSO REST API
Plugin Slug: wpsso-rest-api
Text Domain: wpsso-rest-api
Domain Path: /languages
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl.txt
Assets URI: https://surniaulula.github.io/wpsso-rest-api/assets/
Tags: rest, api, rest api, meta tags, schema, markup
Contributors: jsmoriss
Requires PHP: 5.6
Requires At Least: 4.7
Tested Up To: 5.4.1
Stable Tag: 2.2.0

Enhances the WordPress REST API Post, Term and User Queries with an Array of Social Meta Tags, SEO HTML Tags and Schema JSON-LD Markup.

== Description ==

<p style="margin:0;"><img class="readme-icon" src="https://surniaulula.github.io/wpsso-rest-api/assets/icon-256x256.png"></p>

Enhances the WordPress REST API post, term, and user query results with an array of social and SEO meta tags, and Schema JSON-LD markup.

Includes a new `head` element in the WordPress REST API query result to provide an `html`, `json`, and `parts` array.

* The `html` array includes the HTML formatted meta tags and Schema JSON-LD (aka LD+JSON) scripts, as they appear in the webpage head section.

* The `json` array provides Schema JSON-LD (aka LD+JSON) scripts in their decoded format.

* The `parts` array offers HTML meta tag attributes (aka "the parts") as arrays, making it easier to find / use specific meta tag values.

There is no add-on settings page for this plugin &mdash; simply *install* and *activate* the plugin.

<h3>WPSSO Core Plugin Required</h3>

WPSSO REST API (aka WPSSO REST) is an add-on for the [WPSSO Core plugin](https://wordpress.org/plugins/wpsso/).

The [WPSSO Schema JSON-LD Markup add-on](https://wordpress.org/plugins/wpsso-schema-json-ld/) is recommended to get the most complete meta tags and Schema JSON-LD markup for post, term, and user queries.

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

<h3>Standard Version Repositories</h3>

* [GitHub](https://surniaulula.github.io/wpsso-rest-api/)
* [WordPress.org](https://plugins.trac.wordpress.org/browser/wpsso-rest-api/)

<h3>Changelog / Release Notes</h3>

**Version 2.2.0 (2020/04/06)**

* **New Features**
	* None.
* **Improvements**
	* None.
* **Bugfixes**
	* None.
* **Developer Notes**
	* Refactored WPSSO Core active and minimum version dependency checks.
* **Requires At Least**
	* PHP v5.6.
	* WordPress v4.7.
	* WPSSO Core v7.0.1.

**Version 2.1.0 (2020/03/27)**

* **New Features**
	* None.
* **Improvements**
	* Minor update for French translation strings.
* **Bugfixes**
	* None.
* **Developer Notes**
	* None.
* **Requires At Least**
	* PHP v5.6.
	* WordPress v4.7.
	* WPSSO Core v6.27.1.

== Upgrade Notice ==

= 2.2.0 =

(2020/04/06) Refactored WPSSO Core active and minimum version dependency checks.

= 2.1.0 =

(2020/03/27) Minor update for French translation strings.

