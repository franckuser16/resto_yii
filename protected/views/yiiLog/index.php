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

<?php 
//default sort: id
$dataProvider->sort->defaultOrder='id ASC';

$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	//sort by id, or logtime or message i.e. users (message beginning)
	'sortableAttributes'=>array('id', 'logtime', 'message'=>'Users'),
)); 
?>
