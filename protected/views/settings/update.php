<?php
$this->breadcrumbs=array(
	'Settings',
);
$this->menu=array(
	array('label'=>'Actions', 'url'=>array('actions/index')),
);
?>

<h1>Change settings</h1>

<?php 
	echo $this->renderPartial('_form', array('model'=>$model));

	echo CHtml::ajaxButton(
								'Administration settings',
								CController::createUrl('settings/adminSettings'), 
								array( 	
										//'submit'=>'settings/adminSettings', 
										//'params'=>array('adminSettingsCheckbox'=>0),
										'update'=>'#adminSettings',
								)
						);
	//echo CHtml::label('administration settings', 'false');
?>
	<div id="adminSettings">
			<?php	$this->renderPartial('_ajaxContent', array('adminForm'=>$adminForm)); ?>
	</div>
