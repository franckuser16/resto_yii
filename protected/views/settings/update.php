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
	echo CHtml::checkBox("load_ajax",false,array('id'=>'adminCheckbox'));
	echo "administration settings";
	$url=CController::createUrl('settings/adminSettings');
	Yii::app()->clientScript->registerScript("check",
           '$("#adminCheckbox").change(function(){
             if($(this).is(":checked")){
              $("#adminSettings").load("'.$url.'");
              $("#adminSettings").fadeIn();
             }else{
              $("#adminSettings").html("");
             }
             })
          ',
		  CClientScript::POS_READY);

	/*echo CHtml::Checkbox(
								'Administration settings',
								false,
								array( 	'ajax'=> array(
										//'submit'=>'settings/adminSettings', 
										//'params'=>array('adminSettingsCheckbox'=>0),
										'url'=>$this->createUrl('settings/adminSettings'), 
										'update'=>'#adminSettings',)
								)
						);
	echo CHtml::label('administration settings', 'false');
	*/

	echo $this->renderPartial('_form', array('model'=>$model, 'adminForm'=>$adminForm));

	/*echo CHtml::ajaxButton(
								'Administration settings',
								CController::createUrl('settings/adminSettings'), 
								array( 	
										//'submit'=>'settings/adminSettings', 
										//'params'=>array('adminSettingsCheckbox'=>0),
										'update'=>'#adminSettings',
								)
						);
	 */
?>
