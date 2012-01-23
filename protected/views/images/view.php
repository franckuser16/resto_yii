<?php
$this->breadcrumbs=array(
	'Images'=>array('index'),
	$model->I_id,
);

$this->menu=array(
	array('label'=>'List Images', 'url'=>array('index')),
	array('label'=>'Create Images', 'url'=>array('create')),
	array('label'=>'Update Images', 'url'=>array('update', 'id'=>$model->I_id)),
	array('label'=>'Delete Images', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->I_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Images', 'url'=>array('admin')),
);
?>

<h1>View Images #<?php echo $model->I_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'I_id',
		'I_name',
		'I_disk_name',
		'I_description',
	),
)); ?>
