<?php
$this->breadcrumbs=array(
	'Yii Logs',
);

$this->menu=array(
	array('label'=>'Create YiiLog', 'url'=>array('create')),
	array('label'=>'Manage YiiLog', 'url'=>array('admin')),
);
?>

<h1>Yii Logs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'sortableAttributes'=>array('id', 'logtime'),
)); ?>
