=== JSON REST API Force SSL ===
Contributors:      fjarrett
Tags:              api, json, REST, rest-api, ssl, https, security
Requires at least: 3.9
Tested up to:      4.2
Stable tag:        trunk
License:           GPLv2 or later
License URI:       http://www.gnu.org/licenses/gpl-2.0.html

Force WP JSON REST API endpoints to always be served over HTTPS.

== Description ==

**Did you find this plugin helpful? Please consider [leaving a 5-star review](https://wordpress.org/support/view/plugin-reviews/json-rest-api-force-ssl).**

**Note: This plugin requires the [JSON REST API (WP API)](https://wordpress.org/plugins/json-rest-api/) plugin.**

For site owners who want the WP API served over SSL always and forever.

All HTTP requests to the JSON REST API will be 301 redirected to their HTTPS equivalent.

If for some reason you don't want to use a plugin to do this, you can also just add this hook to your theme: https://gist.github.com/fjarrett/8cd04bd33e49bbd6e3b7

**Development of this plugin is done [on GitHub](https://github.com/fjarrett/json-rest-api-force-ssl). Pull requests welcome. Please see [issues reported](https://github.com/fjarrett/json-rest-api-force-ssl/issues) there before going to the plugin forum.**

== Changelog ==

= 0.1.1 - December 30, 2014 =

* Ensure safe local redirects by using wp_safe_redirect() instead of wp_redirect()

Props [johnjamesjacoby](https://profiles.wordpress.org/johnjamesjacoby/)

= 0.1.0 - December 30, 2014 =

* Initial release

Props [fjarrett](https://profiles.wordpress.org/fjarrett/)
