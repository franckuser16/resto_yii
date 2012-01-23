<?php
$this->breadcrumbs=array(
	'Computers'=>array('index'),
	$model->C_id=>array('view','id'=>$model->C_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Computers', 'url'=>array('index')),
	array('label'=>'Create Computers', 'url'=>array('create')),
	array('label'=>'View Computers', 'url'=>array('view', 'id'=>$model->C_id)),
	array('label'=>'Manage Computers', 'url'=>array('admin')),
);
?>

<h1>Update Computers <?php echo $model->C_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>