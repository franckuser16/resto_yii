<?php
$this->breadcrumbs=array(
	'Partitions',
);

$this->menu=array(
	array('label'=>'Create Partitions', 'url'=>array('create')),
	array('label'=>'Manage Partitions', 'url'=>array('admin')),
);
?>

<h1>Partitions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
