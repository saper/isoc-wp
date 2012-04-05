Internet Society WordPress Theme
================================

This theme is designed to be used by Internet Society (ISOC) chapters and
other ISOC-related entities to create WordPress sites using the same general
design as the 2012 www.internetsociety.org site.

More information - and the theme files themselves - can be found at:

> <https://github.com/InternetSociety/isoc-wp/>

**IMPORTANT**: If you encounter any issues with using this theme - or have
suggestions for changes, please check the issue tracker and raise a new 
issue if necessary:

> <https://github.com/InternetSociety/isoc-wp/issues>

The issue tracker is public and *viewing* the issues is open to all. *Raising* 
an issue requires a [Github](http://www.github.com) account, but those
are available for free.

------

This Readme document covers the following:

1. Required plugins
2. Installation
3. Configuration
4. Automatic Updates
5. Using the Events Manager Plugin
6. Using a Child Theme For Customization
7. Support / Questions
8. Contributors and Contributing Changes

------

Required plugins
================

The theme requires the following plugins to be installed and activated:

* [Breadcrumbs NavXT](http://wordpress.org/extend/plugins/breadcrumb-navxt/)
* [Category Posts Widget](http://wordpress.org/extend/plugins/category-posts/)
* [Widget Logic](http://wordpress.org/extend/plugins/widget-logic/)

Additionally, if you are not already using a plugin for managing events, the
theme has been tested with this plugin:

* [Events Manager](http://wordpress.org/extend/plugins/events-manager/)

More information about using the Events Manager is provided later in this file.

------

Installation
============

The initial installation of the theme involves the following steps:

> **IMPORTANT** - The theme unzips into a directory called 'isoc-wp'. If you
already have a theme using that same directory name, bad things will happen.
The safest plan would be to remove the previous theme using that directory name.

To begin, you need to download a ZIP file for the latest version of the theme 
from this URL:

> <https://github.com/InternetSociety/isoc-wp/tags>

Next, in your WordPress admin area (or Network Admin if you are using WordPress
MultiSite) do the following:

1. Go into the "Themes" panel, choose "Add New" and then choose the 
"Upload" link.  

2. Upload the ZIP file you downloaded.

3. Activate the theme for your site.

Next you will want to go through the steps in the next section on configuration
to make any changes, update the home page slides, etc.

Configuration
=============

The next sections describe the steps to perform various configuration tasks within
this theme.

All of these steps assume you are logged into WordPress and have access to the 
administration panels of your site.

Changing the Logo
-----------------
1.	From the left-hand column, find the Appearance section and click Theme Logo
2.	Enter URL of logo, or browse to upload new image.
3.	Save Changes

NOTE: Logo should be 197px x 82px.

Adding Images To The Home Page Slideshow
----------------------------------------

1.      From the left-hand column, find the Homepage Slides section and
        click Homepage Slides or Add New
2.      Add title
3.      Enter short body content
4.      Upload a Featured Image, 976px x 338px
5.      Enter "Additional Information", Sub-title (if applicable), Read
        More Link (URL), Read More Text
6.      Save or Publish Changes

Controlling Boxes on top of Slideshow
-------------------------------------

1.      From the left-hand column, find the Appearance section and click
        Widgets
2.      Find Home Slideshow Widget Area
**      Text widget is for Social Media - Be sure to upload social icons
        into Media Library (or theme images directory), grab the URL.
        Replace img src location with correct image source URL; add link
        URL to the `<a href="">` tag.
**      Save.
3.      Find Home Slideshow Widget Area2
*       Add text (no title) with link to appropriate page or section on
        web site.
4       Find Home Slideshow Widget Area 3
*       Add text (no title) with link to appropriate page or section on
        web site.

NOTE: Only one widget can be assigned to each widget area in this section.

Adding News
-----------

1.	From the left-hand column, find the Posts section and click Edit or Add New
2.	Create or edit a post
3.	Assign it to the "News" category.
4.	Save or Publish

Adding Issues Spotlight
-----------------------

1.	From the left-hand column, find the Posts section and click Edit or Add New
2.	Create or edit a post
3.	Add an Excerpt, which is visible on the home page.
4.	Assign it to the "Resources" category.
5.	Add a Featured Image, if applicable.  Image should be sized to 128px x 80px
6.	Save or Publish

Changing Issues Spotlight Widget
--------------------------------

1.	From the left-hand column, find the Appearance section and click Widgets
2.	Find the Home Right Widget Area
3.	Change title, Category, number of posts, or sort by.
4.	Save

Adding Social Media to Right Sidebar on Internal pages
------------------------------------------------------

1.      From the left-hand column, find the Appearance section and click
        Widgets
2.      Find the Secondary Widget Area
3.      Copy information as on the home page widget for social icon, but
        do not include the `<div class="content">` at the beginning, nor
        `</div>` at the end.
4.      Save

Adding Items Right Sidebar on Internal pages
--------------------------------------------

1.	From the left-hand column, find the Appearance section and click Widgets
2.	Find the Secondary Widget Area2
3.	Drag and drop Text or other widget types.   (no title)
4.	Save.

Modify Footer Address
---------------------

1.	From the left-hand column, find the Appearance section and click Widgets
2.	Find the Footer Widget Area
3.	Edit text
4.	Save

Modifying Menus
---------------

1.      From the left-hand column, find the Appearance section and click
        Menus
2.      Select Footer Menu, Navigation or Utility Menu across the top.
3.      On the left hand column, you will see a list of pages. Select
        the page you wish to add to the menu.
4.      Drag and drop a menu to be in the correct order.
5.      Save.


------

Automatic Updates
=================

This theme is designed so that you will receive "automatic update" notifications
when a new version of the theme is uploaded.  To receive these notifications, you 
need to install the "Theme Updater" plugin from:

> <http://wordpress.org/extend/plugins/theme-updater/>

(Note that the plugin *does* work with WordPress 3.3.x.)

You simply activate the plugin and it will periodically check for updates. You
will then see on your Themes panel that an update is available. More
information about this Github-based update system can be found 
[in this blog post](http://www.disruptiveconversations.com/2012/02/how-to-auto-update-wordpress-custom-themes-using-github.html).

**IMPORTANT** - Note that with automatic updates you should not directly edit
the theme files to customize the site.  Any such direct edits will be removed
with the next automatic update.  If you wish to customize the theme beyond what
is available in the web panels, you should consider using a "child theme" as
noted later in the document.

------

Using The Events Manager
========================

If you are not already using an events management plugin, this theme has been
tested with the Events Manager plugin available here:

* [Events Manager WordPress.org page](http://wordpress.org/extend/plugins/events-manager/)

* [Events Manager main site](http://wp-events-plugin.com/)

The second link for the main site includes documentation and tutorials that 
go into the many capabilities offered by this plugin.

Within the theme, adding an event involves this process:

1.      From the left-hand column, find the Events section and click
        Edit or Add New
2.      Add Name
3.      Add Event date
4.      Add Event time
5.      Enter Location information
6.      Enter Details
7.      Upload Event image
8.      Submit Event
9.      Events will need to be approved before going live. To approve an
        event, click on Events, click on highlighted event and select
        "approve" or "disapprove".

------

Using A Child Theme For Customization
=====================================

If you want to make deeper changes to the ISOC WordPress theme than what you can
do using the widgets, menus and theme admin panels, the *safest* option is to 
create what is called a "child theme."  Essentially, this is a separate theme that
you apply to your site that references the ISOC theme and only includes whatever
files from the original theme you want to modify.

For instance, if you wanted to make further changes to the header of the site, 
you might create a child theme that included only two files:

* style.css
* header.php

All the other files and settings would be pulled from the main ISOC theme.

The beauty of this setup is that the main ISOC theme can be upgraded without 
affecting any deep customizations you have made.  This is the setup that the
[Deploy360 Programme](http://www.internetsociety.org/deploy360/) uses to have 
a separate customization layer on top of the basic ISOC theme.

More information about using child themes can be found here:

* <http://codex.wordpress.org/Child_Themes>

(**ACTION**: An example of a child theme should be provided for chapters
to be able to simply take and use.)

------

Support
=======

This WordPress theme is provided "as-is" for ISOC chapters and others to develop
WordPress sites.  While there are WordPress-savvy ISOC staff and volunteers able
to assist, please understand that this assistance is not guaranteed to always be
available.  The best way to raise issues is to use the issue tracker found at:

> <https://github.com/InternetSociety/isoc-wp/issues>

The issues will be posted publicly and can be responded to be others working
with the theme.

------

Contributors and Contributing Changes
=====================================

If you are familiar with modifying WordPress themes and want to make a direct
contribution of code changes, we certainly welcome such contributions.  You can
either:

1. [Raise an issue in the issue tracker](https://github.com/InternetSociety/isoc-wp/issues) 
   and include your code in that issue.
   
2. If you are familiar with how Github works, you can fork the repository, 
   commit your changes and issue a pull request.

To date, the following people or organizations have contributed to this theme:

* Balance Interactive
* Dan York (ISOC staff)
* Marcin Cieślak (ISOC Poland chapter)

------

Thank you for using this WordPress theme - please do offer suggestions and feedback
through the issue tracker.  Thank you.

This theme is licensed for usage under the terms of the GPL v2.0. See the file
"license.txt" for more information.

Copyright 2012 Internet Society
