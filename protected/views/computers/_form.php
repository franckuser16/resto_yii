<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'computers-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'C_name'); ?>
		<?php echo $form->textField($model,'C_name',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'C_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'C_mac_addr'); ?>
		<?php echo $form->textField($model,'C_mac_addr',array('size'=>17,'maxlength'=>17)); ?>
		<?php echo $form->error($model,'C_mac_addr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'C_room'); ?>
		<?php echo $form->textField($model,'C_room',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'C_room'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->