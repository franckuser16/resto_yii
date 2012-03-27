<?php

return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		'components'=>array(
			'fixture'=>array(
				'class'=>'system.test.CDbFixtureManager',
			),
			//drbl_test drbl clone filled with data
			'db'=>array(
				'connectionString'=>'mysql:host=localhost;dbname=drbl_test',
			),
		),
	)
);
