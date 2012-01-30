<?php

return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		'components'=>array(
			'fixture'=>array(
				'class'=>'system.test.CDbFixtureManager',
			),
			//uncomment the following to provide test database connection
			//drbl_test clone de drbl avec des données
			'db'=>array(
				'connectionString'=>'mysql:host=localhost;dbname=drbl_test',
			),
		),
	)
);
