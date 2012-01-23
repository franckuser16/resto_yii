<?php
$this->breadcrumbs=array(
	'Images'=>array('index'),
	$model->I_id=>array('view','id'=>$model->I_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Images', 'url'=>array('index')),
	array('label'=>'Create Images', 'url'=>array('create')),
	array('label'=>'View Images', 'url'=>array('view', 'id'=>$model->I_id)),
	array('label'=>'Manage Images', 'url'=>array('admin')),
);
?>

<h1>Update Images <?php echo $model->I_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>