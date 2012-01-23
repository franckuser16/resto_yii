<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'I_id'); ?>
		<?php echo $form->textField($model,'I_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'I_name'); ?>
		<?php echo $form->textField($model,'I_name',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'I_disk_name'); ?>
		<?php echo $form->textField($model,'I_disk_name',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'I_description'); ?>
		<?php echo $form->textField($model,'I_description',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->