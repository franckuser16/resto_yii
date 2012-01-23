<?php
$this->breadcrumbs=array(
	'Domains'=>array('index'),
	$model->D_id,
);

$this->menu=array(
	array('label'=>'List Domain', 'url'=>array('index')),
	array('label'=>'Create Domain', 'url'=>array('create')),
	array('label'=>'Update Domain', 'url'=>array('update', 'id'=>$model->D_id)),
	array('label'=>'Delete Domain', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->D_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Domain', 'url'=>array('admin')),
);
?>

<h1>View Domain #<?php echo $model->D_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'D_id',
		'D_name',
		'D_host_admin',
		'D_domain_admin',
		'D_domain_password',
	),
)); ?>
