=== WP REST API Force SSL ===
Contributors:      fjarrett
Tags:              api, rest, json, rest-api, wp-api, ssl, https, security
Requires at least: 4.4
Tested up to:      4.5
Stable tag:        0.2.0
License:           GPLv2 or later
License URI:       http://www.gnu.org/licenses/gpl-2.0.html

Force WP REST API endpoints to only be served over HTTPS.

== Description ==

**Did you find this plugin helpful? Please consider [leaving a 5-star review](https://wordpress.org/support/view/plugin-reviews/json-rest-api-force-ssl).**

**Note: This plugin requires the [WP REST API (WP API)](https://wordpress.org/plugins/json-rest-api/) plugin.**

For site owners who want the WP REST API served over SSL always and forever.

All HTTP requests to the WP REST API will be 301 redirected to their HTTPS equivalent.

Also, don't use this plugin unless you have an SSL certificate as your endpoints will break! :-)

**Development of this plugin is done [on GitHub](https://github.com/fjarrett/json-rest-api-force-ssl). Pull requests welcome. Please see [issues reported](https://github.com/fjarrett/json-rest-api-force-ssl/issues) there before going to the plugin forum.**

== Changelog ==

= 0.2.0 - April 20, 2016 =

* WP REST API v2 compatibility.
* Indicate support for WordPress 4.5.

Props [fjarrett](https://github.com/fjarrett)

= 0.1.1 - December 30, 2014 =

* Harden security by using `wp_safe_redirect()`.

Props [fjarrett](https://github.com/fjarrett), [johnjamesjacoby](https://github.com/johnjamesjacoby)

= 0.1.0 - December 30, 2014 =

* Initial release.

Props [fjarrett](https://github.com/fjarrett)
