<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'C_id'); ?>
		<?php echo $form->textField($model,'C_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'C_name'); ?>
		<?php echo $form->textField($model,'C_name',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'C_mac_addr'); ?>
		<?php echo $form->textField($model,'C_mac_addr',array('size'=>17,'maxlength'=>17)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'C_room'); ?>
		<?php echo $form->textField($model,'C_room',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->