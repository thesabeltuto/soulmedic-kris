<?php
// Global define variables
define('THEME_FILE', __FILE__ );
define('THEME_DIR', get_template_directory().'-kris');
define('THEME_URL', get_template_directory_uri().'-kris');

// Global variables
$THEME_VERSION = '1.0.8';
$THEME_CSS_VERSION = '1.0.8';

require_once(THEME_DIR.'/framework/admin.php');
require_once(THEME_DIR.'/framework/integrations.php');
require_once(THEME_DIR.'/framework/shortcodes.php');
require_once(THEME_DIR.'/framework/sidebars.php');

//error_reporting(E_ALL); ini_set('display_errors', 1);
?>