<?php
/****************************************************************
 * System Functions
 ****************************************************************/


/**
 * Load Theme Variable Data
 * @param string $var
 * @return string 
 */
function ale_theme_data_variable($var) {
	if (!is_file(STYLESHEETPATH . '/style.css')) {
		return '';
	}

	$theme_data = wp_get_theme();
	return $theme_data->{$var};
}

/****************************************************************
 * Define Constants
 ****************************************************************/
define('ALETHEME_THEME_VERSION', ale_theme_data_variable('Version'));
define('ALETHEME_SHORTNAME', 'AleKids');
define("ALETHEME_THEME_OPTIONS_NAME", "alekids");
define("ALETHEME_THEME_URL", esc_url(get_template_directory_uri()));
define("ALETHEME_DEMOS_HOST", "http://alethemes.com/");


/****************************************************************
 * Find The Configuration File
 ****************************************************************/
require_once ALETHEME_PATH . '/config.php';

/****************************************************************
 * Options Framework Set Up
 ****************************************************************/
require_once ALETHEME_PATH . '/options/options.php';
require_once ALETHEME_PATH . '/options/admin/options-framework.php';
require_once (ALETHEME_PATH. '/functions/general.php');


/****************************************************************
 * Require Needed Files & Libraries
 ****************************************************************/

require_once (ALETHEME_PATH. '/etc/admin.php');
require_once (ALETHEME_PATH. '/etc/front.php');
require_once (ALETHEME_PATH. '/etc/system.php');
require_once (ALETHEME_PATH. '/etc/menu.php');

require_once (ALETHEME_PATH. '/functions/images_media.php');
require_once (ALETHEME_PATH. '/functions/class-tgm-plugin-activation.php');

if (!isset( $content_width)) {
	$content_width = 1000; // default content width
}

load_theme_textdomain( 'alekids', get_template_directory() . '/lang' );
$locale = get_locale();
$locale_file = get_template_directory() . "/lang/$locale.php";
if ( is_readable($locale_file) )
    require_once($locale_file);