<?php
$this->breadcrumbs=array(
	'Partitions'=>array('index'),
	$model->P_id,
);

$this->menu=array(
	array('label'=>'List Partitions', 'url'=>array('index')),
	array('label'=>'Create Partitions', 'url'=>array('create')),
	array('label'=>'Update Partitions', 'url'=>array('update', 'id'=>$model->P_id)),
	array('label'=>'Delete Partitions', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->P_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Partitions', 'url'=>array('admin')),
);
?>

<h1>View Partitions #<?php echo $model->P_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'P_id',
		'P_name',
		'P_description',
		'P_id_image',
	),
)); ?>
