<?php
define('WPML_ST_FOLDER', basename(WPML_ST_PATH));

define('WPML_ST_URL', plugins_url('', dirname(__FILE__)));

// Old ST status constants, kept for backward compatibility with plugins that use them, like WCML
define( 'ICL_STRING_TRANSLATION_PARTIAL', 2 );
define( 'ICL_STRING_TRANSLATION_COMPLETE', 10 );
define( 'ICL_STRING_TRANSLATION_NEEDS_UPDATE', 3 );
define( 'ICL_STRING_TRANSLATION_NOT_TRANSLATED', 0 );
define( 'ICL_STRING_TRANSLATION_WAITING_FOR_TRANSLATOR', 1 );

define('ICL_STRING_TRANSLATION_TEMPLATE_DIRECTORY', get_template_directory());
define('ICL_STRING_TRANSLATION_STYLESHEET_DIRECTORY', get_stylesheet_directory());

define('ICL_STRING_TRANSLATION_STRING_TRACKING_TYPE_SOURCE', 0);
define('ICL_STRING_TRANSLATION_STRING_TRACKING_TYPE_PAGE', 1);
define('ICL_STRING_TRANSLATION_STRING_TRACKING_THRESHOLD', 5);

define('ICL_STRING_TRANSLATION_AUTO_REGISTER_THRESHOLD', 500);

define('ICL_STRING_TRANSLATION_DYNAMIC_CONTEXT', 'wpml_string');

$icl_st_string_translation_statuses = array();
