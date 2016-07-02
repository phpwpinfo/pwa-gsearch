<?php
/*
Plugin Name: ABCD Google Custom Search
Description: Replace wordpress search with Google Custom Search (CSE)
Version: 1.2
Tested up to: WPMU 4.4.1
License: GNU General Public License 2.0 (GPL) http://www.gnu.org/licenses/gpl.html
Author: Rohan Mehta
Author URI: http://www.phpwpinfo.com
Plugin URI:
tags:Google Search, Google Custom Search, Google CSE, Wordpress Search
GitHub Plugin URI: https://github.com/phpwpinfo/pwa-gsearch
GitHub Branch: master
*/


include(plugin_dir_path( __FILE__ )."pw-google-search.php");
include(plugin_dir_path( __FILE__ )."pw-google-search-settings.php"); 
$pw_google_search=new pwGoogleSearch();
?>
