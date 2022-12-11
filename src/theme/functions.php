<?php
/****************************************************************
 * DO NOT DELETE
 ****************************************************************/
if ( get_stylesheet_directory() == get_template_directory() ) {
	define('ALETHEME_PATH', get_template_directory() . '/aletheme');
	define('ALETHEME_URL', esc_url(get_template_directory_uri()) . '/aletheme');
}  else {
    define('ALETHEME_PATH', get_theme_root() . '/fwc/aletheme');
    define('ALETHEME_URL', get_theme_root_uri() . '/fwc/aletheme');
}

require_once ALETHEME_PATH . '/constants.php';



/****************************************************************
 * Parent theme functions should not be edited.
 * 
 * If you want to add custom functions you should use child theme.
 ****************************************************************/