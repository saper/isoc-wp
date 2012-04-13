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

------------------------------------------------------------------------

This Readme document covers the following:

1. Required plugins
2. Installation
3. Initial Configuration
4. Configuration
5. Automatic Updates
6. Using the Events Manager Plugin
7. Using a Child Theme For Customization
8. Support / Questions
9. Contributors and Contributing Changes

------------------------------------------------------------------------

Required plugins
====================

The theme requires the following plugins to be installed and activated:

* [Breadcrumbs NavXT](http://wordpress.org/extend/plugins/breadcrumb-navxt/)
* [Category Posts Widget](http://wordpress.org/extend/plugins/category-posts/)
* [Display Widgets](http://wordpress.org/extend/plugins/display-widgets/)

Additionally, if you are not already using a plugin for managing events, the
theme has been tested with this plugin:

* [Events Manager](http://wordpress.org/extend/plugins/events-manager/)

More information about using the Events Manager is provided later in this file.

------------------------------------------------------------------------

Installation
================

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

------------------------------------------------------------------------

Initial Configuration
=========================

Before you start using the theme, you will want to perform these steps.

All of the steps assume you are logged into WordPress and have access to the 
administration panels of your site.

Set the Site Title and Tagline
------------------------------

1. Go to Settings -> General
2. Set the Site Title and Tagline
3. Save the settings.

Add Three Menus
---------------

1.  Go to Appearance -> Menus
2.  If you do not already have the following menus, you need to click the "+" 
    tab to create menus with these exact names:
   * Footer Menu
   * Navigation
   * Utility Menu

Add News and Resources Categories
---------------------------------

1. Go to Posts -> Categories
2. Add two new categories:
   * News
   * Categories
   
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

Create Necessary Widgets
------------------------

The theme uses a number of widgets.  To create these widgets, go to the *Appearance*
section and choose *Widgets*.

### Navigation "Breadcrumbs"

1. Open the *Highlighted Widget Area*
2. Drag and drop the *Breadcrumbs NavXT Widget*
3. In the widget configuration, set:
   * Output trail as "Plain"
   * Check "Link the breadcrumbs"
   * Check "Hide the trail on the front page"
4. Save the widget

### Issues Spotlight on Home Page

1.	Find the Home Right Widget Area
2   Drag and drop *Category Posts Widget*
3.	Enter:
   * "Issues Spotlight" as title
   * Category = "Resources"
   * Number of posts
   * Sort by "Date" 
   * Show Post Excerpt
   * Show post thumbnail. 
   * Thumbnail width = 128  (leave height blank)
4. Save the widget.

### "Follow Us" Social Media Icons On Home Page

1. Open the *Home Slideshow Widget Area*.
2. Drag and drop the *Text Widget*.
3. Enter "Follow Us" as the title.
4. Enter `<div class="content">` at the beginning of the text box.
5. Using HTML, enter the appropriate links and icons. An example from the
   Deploy360 site is shown below.
6. Enter `</div>` at the end of the box.
7. Save the widget.

Example of social media code:

```
<a href="http://www.facebook.com/Deploy360" target="_blank">
<img src="/wp-content/themes/isoc-wp/images/icon_facebook_lg.png" width="28" height="29" alt="facebook"></a> 
<a href="http://twitter.com/deploy360"  target="_blank">
<img src="/wp-content/themes/isoc-wp/images/icon_twitter_lg.png" width="30" height="29" alt="twitter"></a> 
<a href="http://www.youtube.com/user/Deploy360"  target="_blank">
<img src="/wp-content/themes/isoc-wp/images/icon_youtube_lg.png" width="29" height="29" alt="youtube"></a>
<a href="https://plus.google.com/b/100600212961472655878/"  target="_blank">
<img src="/wp-content/themes/isoc-wp/images/icon_googleplus.gif" width="29" height="29" alt="Google+"></a>
<a href="http://www.internetsociety.org/deploy360/feed/">
<img src="/wp-content/themes/isoc-wp/images/icon_rss_lg.png" width="28" height="28" alt="RSS icon"></a>
```

### "Follow Us" Social Media Icons On Secondary Pages

1. Open the Secondary Widget Area.
2. Drag and drop the *Text Widget*.
3. Enter "Follow Us" as the title.
4. Using HTML, enter the appropriate links and icons. See the example above for
   the appropriate HTML code.
   
   Do *not* include `<div class="content">` at the beginning or `</div>` at the end.

5. Save the widget.

### Adding Additional Widgets to the Home Page

Two additional boxes are available to display content on top of the images on the home
page.  They are widget areas:

* Home Slideshow Widget Area2
* Home Slideshow Widget Area3

You may add one widget (such as the *Text Widget*) to each of these areas to 
display additional content.

### Adding Items to Left Sidebar on Internal Pages

1. Find the Primary Widget Area.
2. Drag and drop Text or other widget types and make appropriate changes.

### Adding Items To Right Sidebar On Internal Pages

1.	Find the Secondary Widget Area2
2.	Drag and drop Text or other widget types and make appropriate changes.

### Footer Widget

1. Open the *Footer Widget Area*
2. Drag and drop the *Text Widget*
3. Enter appropriate text (copyright, email link, address, etc.). HTML is allowed.
4. Save the widget.

------------------------------------------------------------------------

Configuration
=============

This section includes changes that you may want to make on an ongoing basis during
the regular usage of your theme.

All of these steps assume you are logged into WordPress and have access to the 
administration panels of your site.

Changing the Logo
-----------------
1.	From the left-hand column, find the Appearance section and click Theme Logo
2.	Enter URL of logo, or browse to upload new image.
3.	Save Changes

NOTE: Logo should be 197px x 82px.

Modifying Menus
---------------

1.      From the left-hand column, find the Appearance section and click
        Menus
2.      Select the appropriate menu tab to edit the menu.
3.      On the left hand column, you will see a list of pages. Select
        the page you wish to add to the menu.
4.      Drag and drop a menu to be in the correct order.
5.      Save.


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

------------------------------------------------------------------------

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

------------------------------------------------------------------------

Using The Events Manager
========================

If you are not already using an events management plugin, this theme has been
tested with the Events Manager plugin available here:

* [Events Manager WordPress.org page](http://wordpress.org/extend/plugins/events-manager/)

* [Events Manager main site](http://wp-events-plugin.com/)

The second link for the main site includes documentation and tutorials that 
go into the many capabilities offered by this plugin.

Adding Events
-------------

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
        
Adding an Event Widget To Sidebar
---------------------------------

1. Find the Appearance section and click Widgets.
2. Open the *Home Left Widget Area*
3. Drag and Drop the *Events Widget*
4. Set the title, number of events to show, order, etc.
5. Save the widget.

------------------------------------------------------------------------

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

------------------------------------------------------------------------

Support
=======

This WordPress theme is provided "as-is" for ISOC chapters and others to develop
WordPress sites.  While there are WordPress-savvy ISOC staff and volunteers able
to assist, please understand that this assistance is not guaranteed to always be
available.  The best way to raise issues is to use the issue tracker found at:

> <https://github.com/InternetSociety/isoc-wp/issues>

The issues will be posted publicly and can be responded to be others working
with the theme.

------------------------------------------------------------------------

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

------------------------------------------------------------------------

Thank you for using this WordPress theme - please do offer suggestions and feedback
through the issue tracker.  Thank you.

This theme is licensed for usage under the terms of the GPL v2.0. See the file
"license.txt" for more information.

Copyright 2012 Internet Society
