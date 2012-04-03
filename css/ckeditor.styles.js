/*
$Id: ckeditor.styles.js,v 1.1.2.2 2009/12/16 11:32:04 wwalc Exp $
Copyright (c) 2003-2009, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

/*
 * This file is used/requested by the 'Styles' button.
 * 'Styles' button is not enabled by default in DrupalFull and DrupalFiltered toolbars.
 */

CKEDITOR.addStylesSet( 'drupal',
[
	/* Block Styles */

	// These styles are already available in the "Format" combo, so they are
	// not needed here by default. You may enable them to avoid placing the
	// "Format" combo in the toolbar, maintaining the same features.
    { name : 'Subtitle'    , element : 'h2', attributes : { 'class' : 'subtitle' } },
	{ name : 'White Box'		, element : 'p', attributes : { 'class' : 'white-block' } },
	{ name : 'Align Image to Left'		, element : 'img', attributes : { 'class' : 'floatleft' } },
	{ name : 'Align Image to Right'		, element : 'img', attributes : { 'class' : 'floatright' } },
	{ name : 'Table'		, element : 'table', attributes : { 'class' : 'data' } },
	{ name : 'Shaded Row'		, element : 'tr', attributes : { 'class' : 'shaded' } },
	{ name : 'Clear Float'		, element : 'p', attributes : { 'class' : 'clear' } },
	{ name : 'Smaller Text'		, element : 'p', attributes : { 'class' : 'smalltext' } },
	{ name : 'Link to PDF'		, element : 'a', attributes : { 'class' : 'linktopdf' } },
	{ name : 'Blue Button'		, element : 'a', attributes : { 'class' : 'blue-btn' } },
	{ name : 'Green Button'		, element : 'a', attributes : { 'class' : 'green-btn' } },
]);
