<?php
$this->breadcrumbs=array(
	'Actions'=>array('index'),
	'SaveRestore',
);

$this->menu=array(
	array('label'=>'Save', 'url'=>array('save')),
	array('label'=>'Restore', 'url'=>array('restore')),
	array('label'=>'Wake up', 'url'=>array('wakeup')),
	array('label'=>'Shut down', 'url'=>array('shutdown')),
	array('label'=>'Settings', 'url'=>array('settings/update')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('computers-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Save Restore</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 
//using temp var to sort the CGridView provider on C_room
$gridProvider = $model->search();
$gridProvider->sort->defaultOrder='C_room ASC';

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'computers-grid',
	'selectableRows'=>2,
	'dataProvider'=>$gridProvider,
	'filter'=>$model,
	'columns'=>array(
		'C_room',
		'C_name',
		'C_mac_addr',
	),
	//'sortableAttributes'=>array('C_room', 'C_name'),
)); ?>
