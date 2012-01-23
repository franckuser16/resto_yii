<?php
$this->breadcrumbs=array(
	'Partitions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Partitions', 'url'=>array('index')),
	array('label'=>'Manage Partitions', 'url'=>array('admin')),
);
?>

<h1>Create Partitions</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>