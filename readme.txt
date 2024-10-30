=== Plugin Name ===
Contributors: pixelpillow
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=9RUSUPJVVFWWG&lc=NL&item_name=Pixelpillow&item_number=Custom%20Content%20Types%20WordPress%20Plugin&currency_code=EUR&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted
Tags: linkedin, badge
Requires at least: 3.0
Tested up to: 3.6
Stable tag: 1.0
License: GPL2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add Linkedin badges to your website through a very simple shortcode.

== Description ==

Add Linkedin badges to your website through a very simple shortcode. This plugin uses the default Linkedin embed script to integrate the very recognisable blue badgedes. For more information about the script check out: https://developer.linkedin.com/member-profile-plugin.

== Installation ==

1. Upload the 'linkedin-badge-by-pixelpillow' directory to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress

The simplest way to integrate a Linkedin badge on your site is to copy the shortcode with only the 'url' parameter. Like this:

**[linkedinbadge id="http://www.linkedin.com/in/milanvanbruggen"]**

Or you can use the following parameters to customise your badge:

**id**: The public profile URL of the profile you want to show. The profile URL can be obtained from the users profile on http://linkedin.com and looks like this http://www.linkedin.com/in/milanvanbruggen.
**format**: How to show the widget: inline, click, or hover. Defaults to inline.
**related**: Whether to show the footer that contains related information. Defaults to false.
**text**: If hover or click is chose as the format, this will provide text after the LinkedIn icon. The text will also be presented as a link.
**width**: Width in pixels for the inline format only. Minimum value is 300 with smaller values being converted to 300. Default is 364 pixels.

== Screenshots ==

1. Shortcode preview