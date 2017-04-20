=== Plugin Name ===
Contributors: pforret
Donate link: http://blog.forret.com
Tags: random, number, shortcode, rand
Requires at least: 3.0.1
Tested up to: 3.4
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

provides the [randnum] shortcode to add random numbers in text/URLs.

== Description ==

* the number [randnum] is random
* Random year is [randnum min=2001 max=2017]
* the link '/test/?num=[randnum]' will never be cached

Default min = 0
Default max = 100000

== Installation ==

1. Upload folder `wp_randnum` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `[randnum]` in your templates

== Frequently Asked Questions ==

= How does this work  =

This is just a simple wrapper around the php `rand` function. That's where the magic happens. 
[http://php.net/manual/en/function.rand.php](http://php.net/manual/en/function.rand.php)

= But why would I need that? =

I created because I needed an easy way to generate random URL params (to avoid caching).


== Changelog ==

= 1.0 =
* First version

