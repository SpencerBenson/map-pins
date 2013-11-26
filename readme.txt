=== Map pins ===
Contributors: rvwoens, remcobron
Tags: google maps,shortcode,map,maps,categories,post map,point,pin,marker,list,location,address,images,geocoder,google maps,google,opening hours,store locations,opening times,gps,gps location 
Donate link: http://www.innovader.nl
Requires at least: 3.0.5
Tested up to: 3.7.1
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Show markers on a google map from an admin defined table, including a searchbar and my-location lookup. Show a list of nearby locations. 

== Description ==
Map Pins features:

* Insert a Mappin-map anywhere in your blog using a shortcode
* Visitors can use the map, search a location by name or use their current location
* Show a list of locations together with the map
* Order the locations based on distance from visitor location
* Lots of information maintained per location
* Opening hours per location. Visitors can search for \"now open\" locations
* Highly customizable:
	- All options controlled by shortcode parameters
	- Show map only, combined map/list and list-only
	- Country specific search options, like zip-code optimized searching
	- Large number of marker-icons provided, additional icons can be uploaded
	- Configurable admin environment to make location maintenance very easy
* automatic scaling of the map boundaries based on locations shown
* English and Dutch translations provided
* Optimized for wordpress Multisite

**Map pins** allows to insert a Google Maps in a post or in any of the WordPress templates that display multiple posts.

Example shortcode:

* [mappins-map width="500" height="900" searchbar="Y" list="left" showmap="show" listwidth="40%"]

List of location attributes:

* name, address, zipcode, city, country, telephone, category, markericon, openinghours, link URL, latitude/longitude 

Licenses: The plugin uses wonderful custom marker icons from the Maps Icons Collection project by Nicolas Mollet.

== Installation ==
**To install Map Pins, follow these steps:**

1.	Download and unzip the plugin
2.	Upload the entire map-pins/ directory to the /wp-content/plugins/ directory
3.	Activate the plugin through the Plugins menu in WordPress


== Frequently Asked Questions ==
= Q: How many maps I can insert into a post? =
A: The number of map-pins objects on a page is limited to 1

= Q: Can I upload a CSV of XLS file with locations? =

A: No. But you can use phpAdmin or another mysql tool to fill the database

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

