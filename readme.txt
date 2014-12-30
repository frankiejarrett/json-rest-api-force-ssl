=== JSON REST API Force SSL ===
Contributors:      fjarrett
Tags:              api, json, REST, rest-api, ssl, https, security
Requires at least: 3.9
Tested up to:      4.1
Stable tag:        trunk
License:           GPLv2 or later
License URI:       http://www.gnu.org/licenses/gpl-2.0.html

Force WP JSON REST API endpoints to always be served over HTTPS.

== Description ==

For site owners who want the WP API served over SSL always and forever.

All HTTP requests to the JSON REST API will be 301 redirected to their HTTPS equivalent.

`http://example.com/wp-json/ --> https://example.com/wp-json/`  
`http://example.com/wp-json/posts/ --> https://example.com/wp-json/posts/`

If for some reason you don't want to use a plugin to do this, you can also just add this hook to your theme: https://gist.github.com/fjarrett/8cd04bd33e49bbd6e3b7

== Changelog ==

= 0.1.0 - December 30, 2014 =
Initial release

Props [fjarrett](https://profiles.wordpress.org/fjarrett/)
