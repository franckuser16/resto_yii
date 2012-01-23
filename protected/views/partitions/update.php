<?php
$this->breadcrumbs=array(
	'Partitions'=>array('index'),
	$model->P_id=>array('view','id'=>$model->P_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Partitions', 'url'=>array('index')),
	array('label'=>'Create Partitions', 'url'=>array('create')),
	array('label'=>'View Partitions', 'url'=>array('view', 'id'=>$model->P_id)),
	array('label'=>'Manage Partitions', 'url'=>array('admin')),
);
?>

<h1>Update Partitions <?php echo $model->P_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>