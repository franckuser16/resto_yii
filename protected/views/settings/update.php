<?php
$this->breadcrumbs=array(
	'settings'=>array('index'),
	'Update',
);
$this->menu=array(
	array('label'=>'List settings', 'url'=>array('index')),
);
?>

<h1>Change settings</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

