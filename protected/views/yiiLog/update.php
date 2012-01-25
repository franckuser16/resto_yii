<?php
$this->breadcrumbs=array(
	'Yii Logs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List YiiLog', 'url'=>array('index')),
	array('label'=>'Create YiiLog', 'url'=>array('create')),
	array('label'=>'View YiiLog', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage YiiLog', 'url'=>array('admin')),
);
?>

<h1>Update YiiLog <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>