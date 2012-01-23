<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'images-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'I_name'); ?>
		<?php echo $form->textField($model,'I_name',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'I_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'I_disk_name'); ?>
		<?php echo $form->textField($model,'I_disk_name',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'I_disk_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'I_description'); ?>
		<?php echo $form->textField($model,'I_description',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'I_description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->