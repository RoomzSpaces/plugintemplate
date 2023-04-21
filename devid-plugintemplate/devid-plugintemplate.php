<?php
#	pluginname = devid-plugintemplate
#	title = Roomz Template
#	description = Sample Template for creating a Roomz 3D Plugin
#	author = Roomz IT
# 	version = 1.0.0

/* change the information above for your plugin */
/* then search and replace the following with your DEVID and PLUGIN Name: */
/* 		DEVID_PLUGINTEMPLATE */
/*		devidplugintemplate */
/*		devid-plugintemplate */

/*3D Plugin Template
The 3D Plugin Template is the base code structure for creating and developing Custom 3D Plugins to be used with Roomz.
Getting Started on your 3D Plugin:
You will need a DevID (Developer ID).This is the prefix to your plugin name.Example: WTW-Paintball (WTW is the DevID.)
Search and Replace the Following with your Dev ID and Plugin Name (Keep the same format Capital letters and _ or – as shown):
·	DEVID_PLUGINTEMPLATE
·	devidplugintemplate
·	devid-plugintemplate
Write your code, here are some key functional areas:
PHP Hooks – Write your JavaScript script pages and functions and use the PHP Hooks to activate them within key Roomz core functions.PHP Hooks are functions used in the /functions/class_plugin.php file to enable and tie in your Plugin JavaScript functions to specific places in the Roomz core JavaScript.
 
For example,
Roomz has an OnClick event used for capturing the mouse click or touch screen interaction.
The PHP Hook allows you to add your JavaScript OnClick event to this existing function.
·	Connect PHP Files – used to pull JSON data from the database on your server or provide another server with structure data.
·	Handlers PHP Files – used to connect to your database (select, insert, update, or delete data) during 3D browsing.
·	Functions PHP Files – used commonly with Handlers to complete the Database tasks.
·	Menus PHP Files – add your items to the main or Admin (Editor) Menu.
*/

global $wtwplugins;

if (!defined('wtw_serverinstanceid')) exit; // Exit if accessed directly

if (!defined('DEVID_PLUGINTEMPLATE_FILE')) {
	define('DEVID_PLUGINTEMPLATE_FILE', __FILE__ );
}

if (!class_exists('devidplugintemplate')) {
	require_once($wtwplugins->contentpath."/plugins/devid-plugintemplate/functions/class_plugin.php");
}
?>
