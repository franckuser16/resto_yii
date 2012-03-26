<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'settings-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nom application'); ?>
		<?php echo $form->textField($model,'name',array('value'=>$model->name, 'size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nom application'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->textField($model,'components[db][password]',array('value'=>$model->components['db']['password'], 'size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adminEmail'); ?>
		<?php echo $form->textField($model,'params[adminEmail]',array('value'=>$model->params['adminEmail'], 'size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'adminEmail'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
