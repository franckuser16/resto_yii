<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'domain-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'D_name'); ?>
		<?php echo $form->textField($model,'D_name',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'D_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'D_host_admin'); ?>
		<?php echo $form->textField($model,'D_host_admin',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'D_host_admin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'D_domain_admin'); ?>
		<?php echo $form->textField($model,'D_domain_admin',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'D_domain_admin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'D_domain_password'); ?>
		<?php echo $form->textField($model,'D_domain_password',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'D_domain_password'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->