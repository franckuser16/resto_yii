<?php
$this->breadcrumbs=array(
	'Settings',
);
$this->menu=array(
	array('label'=>'Actions', 'url'=>array('actions/index')),
);
?>

<h1>Change settings</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

