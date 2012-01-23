<?php
$this->breadcrumbs=array(
	'Computers'=>array('index'),
	$model->C_id,
);

$this->menu=array(
	array('label'=>'List Computers', 'url'=>array('index')),
	array('label'=>'Create Computers', 'url'=>array('create')),
	array('label'=>'Update Computers', 'url'=>array('update', 'id'=>$model->C_id)),
	array('label'=>'Delete Computers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->C_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Computers', 'url'=>array('admin')),
);
?>

<h1>View Computers #<?php echo $model->C_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'C_id',
		'C_name',
		'C_mac_addr',
		'C_room',
	),
)); ?>
