=== Map pins ===

Contributors: rvwoens, remcobron
Tags: google maps,shortcode,map,maps,categories,post map,point,pin,marker,list,location,address,images,geocoder,google maps,google,opening hours,store locations,opening times,business hours,gps,gps location,WPMU, multisite 
Donate link: http://www.innovader.nl/donate
Requires at least: 3.0.5
Tested up to: 3.8
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add custom markers on an embedded Google Map. Includes full search-ability, my-location via GPS, a list of nearby locations, and business hours.

== Description ==

*Map pins makes it easy to create a map with locations of businesses, events, or venues on a map.*

= You can: =
* Insert a Google Map with custom markers anywhere on your blog using a shortcode.
* Show a scrollable list of locations next to the Google Map.
* Order the locations based on distance from visitor location (based on browser location).
* Oodles of information can be maintained per pin/location.
* Business hours are defined per location. Visitors can search for currently opened locations.
* Most options are highly customizable:
	- All options can be controlled by shortcode parameters
	- You can display only a map, display a map and list combination and even show only a list of locations (for example in your sidebar). All variants are searchable.
	- Includes country specific search options, for example zip-code optimized searching (powered by Google Maps).
	- Large number of marker-icons provided (courtesy of Maps Icons Collection project by Nicolas Mollet). You can add your own custom icons to the map as well.
	- Configurable admin environment to make location maintenance very easy.
* Automatic scaling of the map boundaries based on locations shown.
* English and Dutch translations are included.
* Translatable using .mo and .po files.
* Optimized for Wordpress Multisite

= Your visitors can: =
* Browse a Google Map with all the locations you added.
* Use an intelligent search option to find locations close to a location (search powered by Google Maps).
* Find locations based on their current location (using GPS / IP location via the browser).
* Search based on business hours of a location is opened right now or not.
* Find information about the location you added by clicking a map marker including: name, address, business hours, any text you add and a hyperlink).

= Example shortcode: =
[mappins-map width="500" height="900" searchbar="Y" list="left" showmap="show" listwidth="40%"]

= List of location attributes: =
name, address, zipcode, city, country, telephone, category, markericon, openinghours, link URL, latitude/longitude 

Licenses:
- [The plugin uses wonderful custom marker icons from the Maps Icons Collection project by Nicolas Mollet.] (http://mapicons.nicolasmollet.com/)
- Header photo by [Dave77459] (http://www.flickr.com/photos/dave77459/6335868568/) [cc license] (http://creativecommons.org/licenses/by-nc-sa/2.0/)

== Installation ==

**To install Map Pins, follow these steps:**

1.	Download and unzip the plugin
2.	Upload the entire map-pins/ directory to the /wp-content/plugins/ directory
3.	Activate the plugin through the Plugins menu in WordPress
4. Configure the Map Pins locations through the Map Pins menu (located in the left menu or in case of WPMU on network level)
5. Embed the Map Pins map on your website with the desired shortcode.

== Frequently Asked Questions ==

= Q: How many maps I can insert into a post or page? =
A: The number of map-pins objects on a page is limited to 1.

= Q: Can I upload a CSV of XLS file with locations? =

A: No. But you can use phpAdmin or another mysql tool to fill the database.

= Q: I am using WP Multisite and have one child site for each of my stores. Can I use one database defined in the network? =

A: Yes. The database is maintained on the network level.

== Screenshots ==

1. Map pins map on a page
2. Map pins search list
3. Map pins admin page

== Changelog ==

= 0.1 =
* Initial release.

== Upgrade Notice ==

= 0.1 =
* Initial release.

