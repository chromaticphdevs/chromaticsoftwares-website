<?php

    #################################################
	##             THIRD-PARTY APPS                ##
    #################################################

    const MAILER_AUTH = [
        'username' => 'info@chromaticsoftwares.com',
        'password' => '111111',
        'host'     => 'chromaticsoftwares.com',
        'name'     => 'chromaticsoftwares',
        'port'     => '587',
        'replyTo'  => 'info@chromaticsoftwares.com',
        'replyToName' => 'Chromatic'
    ];

    const ITEXMO = [
        'key' => 'ST-BG_MA379326_7PHQ5',
        'pwd' => 'gr5]zgml5e'
    ];

    #################################################
	##             EXTENDED APPS                   ##
	#################################################
	const APP_EXTENSIONS = [
		'cxbook' => [
			'base_controller' => 'Accounts',
			'base_method'     => 'index'
		]
    ];

    define('APP_EXTENSIONS_PATH' , APPROOT.DS.'softwares');

	#################################################
	##             SYSTEM CONFIG                ##
    #################################################


    define('GLOBALS' , APPROOT.DS.'classes/globals');

    define('SITE_NAME' , 'Chromatic Softwares');

    define('KEY_WORDS' , 'Software,Business, Software-Solutions , Real-Estate , MLM ,
    Micro Lending, System , Application , Web Development , Mobile Development , Software Development');


    define('DESCRIPTION' , 'Chromatic-softwares Empowering Business');

    define('AUTHOR' , SITE_NAME);
?>
