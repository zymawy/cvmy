<?php

	// Error Reporting

	ini_set('display_errors', 'On');
	error_reporting(E_ALL);


	// Routes

	$tpl 	= 'includes/templates/'; // Template Directory
	$lang 	= 'includes/languages/'; // Language Directory
	$func	= 'includes/functions/'; // Functions Directory
	$css 	= 'layout/css/'; // Css Directory
	$js 	= 'layout/js/'; // Js Directory
	$img 	= 'layout/images/'; // Js Directory

	# Include Important Files 

    if (isset($arabic)) {
        include $lang . 'arabic.php';
    } else {
        include $lang . 'english.php';
    }