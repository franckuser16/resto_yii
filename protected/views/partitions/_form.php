<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'partitions-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'P_name'); ?>
		<?php echo $form->textField($model,'P_name',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'P_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'P_description'); ?>
		<?php echo $form->textField($model,'P_description',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'P_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'P_id_image'); ?>
		<?php echo $form->textField($model,'P_id_image'); ?>
		<?php echo $form->error($model,'P_id_image'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->