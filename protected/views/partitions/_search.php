<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'P_id'); ?>
		<?php echo $form->textField($model,'P_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'P_name'); ?>
		<?php echo $form->textField($model,'P_name',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'P_description'); ?>
		<?php echo $form->textField($model,'P_description',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'P_id_image'); ?>
		<?php echo $form->textField($model,'P_id_image'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->