<?php
$this->breadcrumbs=array(
	'Settings',
);

$this->menu=array(
	array('label'=>'change settings', 'url'=>array('update')),
);
?>

<h1>Settings</h1>

<pre>
<?php
Yii::import('system.vendors.SymfonyComponents.YAML.*');
$array = sfYaml::load(/*Yii::app()->params['basePath'].*/'/home/user/Sites/resto_yii/protected/config/config.yml');
print_r($array);
?>
</pre>
