<?php
# $plugin['name'] = 'abc_plugin';
# $plugin['allow_html_help'] = 0;

$plugin['version'] = '0.1';
$plugin['author'] = 'Alex Shiels';
$plugin['author_uri'] = 'http://thresholdstate.com/';
$plugin['description'] = 'Short description';
$plugin['type'] = 0;

if (!defined('txpinterface'))
@include_once('zem_tpl.php');

if (0) {
?>
# --- BEGIN PLUGIN HELP ---
h1. Textile-formatted help goes here

# --- END PLUGIN HELP ---
<?php
}

# --- BEGIN PLUGIN CODE ---

// Plugin code goes here. No need to escape quotes.

# --- END PLUGIN CODE ---
?>