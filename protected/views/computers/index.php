<?php
$this->breadcrumbs=array(
	'Computers',
);

$this->menu=array(
	array('label'=>'Create Computers', 'url'=>array('create')),
	array('label'=>'Manage Computers', 'url'=>array('admin')),
);
?>

<h1>Computers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
