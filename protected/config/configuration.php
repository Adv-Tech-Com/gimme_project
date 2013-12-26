<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Gimme Project',
	'defaultController' => 'home',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
			'admin',
		// uncomment the following to enable the Gii tool
		
		'giiconsole'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'pr@zport2013',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
			'loginUrl'=>array('index/login'),
			// use a customized class, placed in 'components'
			'class'=>'WebUserExtended',
		),
		/* 'authManager'=>array(
            'class'=>'CDbAuthManager',
            'connectionID'=>'db',
        ), */
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				''=>'index',
				'login'		=>'index/login',
				'logout'	=> 'index/logout',
				'signup'	=> 'index/signup',
				'about'		=>'index/about',
				'faq'		=>'index/faq',
				'contact'	=>'index/contact',
				// For Displaying Static pages.
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
				
			),
			'showScriptName'=>false,
			//'urlSuffix'=>'.html',
		),
		/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		*/
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=projects',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'toor',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'index/error' action to display errors
			'errorAction'=>'index/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'solitudity3@gmail.com',
	),
);