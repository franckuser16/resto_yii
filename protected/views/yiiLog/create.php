<?php
$this->breadcrumbs=array(
	'Yii Logs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List YiiLog', 'url'=>array('index')),
	array('label'=>'Manage YiiLog', 'url'=>array('admin')),
);
?>

<h1>Create YiiLog</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>