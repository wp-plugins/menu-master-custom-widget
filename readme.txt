=== Menu Master Custom Widget ===
Contributors: wpcolor
Donate link: http://1customize.com/
Tags: Menu, widget, widgets, Sidebar, menus, layout, custom, front page, customize, page, site, images, image, admin, theme, background, CSS, jquery, javascript, link, links, posts, plugin
Requires at least: 3.3.1
Tested up to: 3.4.1
Stable tag: 2.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A highly customizable sidebar menu with jquery effects

== Description ==

This WordPress plugin add a sidebar menu widget with jquery effects. An easy menu layout editor helps to create a
menu in admin. Note that in case you want to add subitems then you need to add them as html in a popup.

Features:

* Highly Customizable
* Use pages as menu item
* Create up to 4 menus
* Use Images or text or both as menu items
* Put text beside image or over it or as a pop up 
* Change menu font size, colors, menu image size etc
* Easy visual Menu Layout editor
* Jquery Effects
* CSS style
* Optional Grid style layout

Effects:

* Image changes to another image when hover over with mouse
* Image changes to another image automatically
* Image fades when hover
* Background color effect
* Put text in popup
* Put text over image


See Live Example Page

http://1customize.com/menu-sidebar-master-sidebar-widget/

Menu Setup

1. Install the plugin
2. For each menu item a page need to be created. Click "Add new page" and upload a image or 2 images for image swap effects.
3. Add title for the page which will be the menu item title
4. In "custom fields", in the "name" field write "link1" (for widget 1) and then under "value" add a URL with the 
format http://.. alternatively add 0 (zero) for no link at all or 1 to link to the page you just created. When you have added this field and published the page the menu will now recognize this page as a menu item and be visible in the Menu Widget 1 section. For widget 2 use "link2" and for widget 3 use "link3" etc.
5. publish the page. You have now added a menu item. Repeat step 2-4 for each menu item.
6. Under "Menu Widget 1" in plugin admin you can set a variety of options such as image width, where to display text 
and effects.
7. Add the sidebar menu widget 1 to your preferred sidebar

Tips

* To add html content such as sublinks you need to add an extra custom field in the page edit mode with the name "text" 
and then in the value field any html you wish to use. Note that sublinks are ordinary anhor links.
* Set the order the item will be displayed under "order"in the page edit mode, a higher number means lower down. 
* You might want to upload pictures that is of the same width as your sidebar to avoid compressing effects
* Set the width under image options to match the sidebar width of your theme in case you want the image to cover the 
full width of your sidebar.
* You can optionally set the width of the admin menu example under main options, this should be similar to your sidebar width


== Installation ==

1. Download the plugin
2. With your FTP program, upload the Plugin folder to the wp-content/plugins folder.
3. Activate the plugin

More detailed information here: http://codex.wordpress.org/Managing_Plugins

Read here for set up

http://wordpress.org/extend/plugins/menu-master-custom-widget

== Frequently Asked Questions ==

= CSS Styling =

To be able to change title size, edit background colors and other graphics in CSS, you need to add a CSS file 

IMPORTANT - To protect your CSS file from being overwritten you need to put it in a safe directory outside the plugin 

directory. Change the CSS file URL in the main option page to point to your CSS file. 

Steps:

1. take a copy of the style.css in the plugins directory
2. put the copy in a safe directory outside the plugin. Example the root or the themes folder
3. Change the CSS file URL in the main option page to point to your CSS file.

Note: adding a CSS file will not disable the CSS file in the plugin, both will be used.


= Main options page =

CSS file URL - you only need to fill this in if you want to use your own CSS file, see CSS section for more info

Layout example width - Let you specify the width of the example under each layout in the admin section. You can if you 
want set it to similar to your theme width.

Allow duplicate - wont repeat the same post more than one time if you are specifying it here.

= Images =

You can only use pictures uploaded trough wordpress. The plugin uses the image sizes set under settings->media. You can 

set the width and height of the image in the layout settings, this will just up scale or down scale the image without 

actually changing the original image size. 
 
= Theme Compability =

The plugin has been tested with a number of themes but there might be some themes that will need some CSS tweaking to 
work properly.

= links =

http://1customize.com

== Screenshots ==

1. Menu layout editor
2. Main options
3. Color Options
4. Menu Widget

== Changelog ==

= 2.1 =
* new release.


== Upgrade Notice ==

= 2.1 =
* new release.