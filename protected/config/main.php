<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return CMap::mergeArray(
	array(
		'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
		'name'=>'RestoYii',
		// preloading 'log' component
		'preload'=>array('log'),

		// autoloading model and component classes
		'import'=>array(
				'application.models.*',
				'application.components.*',
		),

		'modules'=>array(
				'gii'=>array(
						'class'=>'system.gii.GiiModule',
						'password'=>'tpinfo',
						// If removed, Gii defaults to localhost only. Edit carefully to taste.
						'ipFilters'=>array('127.0.0.1','::1','192.168.49.232','192.168.49.51'),
				),
		),

		// application components
		'components'=>array(
				'user'=>array(
						// enable cookie-based authentication
						'allowAutoLogin'=>true,
				),
				'urlManager'=>array(
						'urlFormat'=>'path',
						'rules'=>array(
								'<controller:\w+>/<id:\d+>'=>'<controller>/view',
								'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
								'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
						),
				),
				'db'=>array(
						'connectionString' => 'mysql:host=localhost;dbname=drbl',
						'emulatePrepare' => 'true',
						'username' => 'root',
						'password' => 'tpinfo',
						'charset' => 'utf8',
				),
				'errorHandler'=>array(
						// use 'site/error' action to display errors
						'errorAction'=>'site/error',
				),
				'log'=>array(
						'class'=>'CLogRouter',
						'routes'=>array(
								array(
										'class'=>'CFileLogRoute',
										'levels'=>'error, warning',
								),
								array(
										'class'=>'CDbLogRoute',
										'categories'=>'usage.*',
										'connectionID'=>'db',
										'levels'=> CLogger::LEVEL_INFO,
										'filter' => array(
												'class' => 'CLogFilter',
												//'prefixSession' => true,
												'prefixUser' => true,
												'logUser' => false,
												'logVars' => array(),
										),
								),
								array(
										'class'=>'CWebLogRoute',
										'showInFireBug'=>'true',
								),
								array(
										'class'=>'CFileLogRoute',
										'logFile'=>'usage.log',
										'categories'=>'usage.*',
										'levels'=> CLogger::LEVEL_INFO,
										'filter' => array(
												'class' => 'CLogFilter',
												//'prefixSession' => true,
												'prefixUser' => true,
												'logUser' => true,
												'logVars' => array('_SERVER'),
										),

								),
						),
				),

				// application-level parameters that can be accessed
				// using Yii::app()->params['paramName']
				'params'=>array(
						//application name
						'name'=>'RestoYii',
						// this is used in contact page
						'adminEmail'=>'franckuser16@gmail.com',
						'LDAP'=> array(
								//alternative 192.168.49.2
								'host'=>'192.168.49.3',
								//ldaps port:686
								'port'=>'389',
								'domain'=>'ens-sfa.univ-poitiers.fr',
						),
				),
		),
	),
	require(dirname(__FILE__).'/settings.php')
);
