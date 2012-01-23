<?php
$this->breadcrumbs=array(
	'Computers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Computers', 'url'=>array('index')),
	array('label'=>'Manage Computers', 'url'=>array('admin')),
);
?>

<h1>Create Computers</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>