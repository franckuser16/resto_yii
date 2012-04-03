<!--<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'settings-adminForm',
	'enableAjaxValidation'=>false,
)); ?>


	<?php echo $form->errorSummary($model); ?> -->

	<h2>Administration</h2>

	<h3>Log</h3>

	<div class="row">
		<?php echo $form->labelEx($model,'start even if not ready'); ?>
		<?php echo $form->checkBox($model,'params[drbl][restore][startNotReady]',array('value'=>$model->params['drbl']['restore']['startNotReady'])); ?>
		<?php echo $form->error($model,'start even if not ready'); ?>
	</div>

	<h3>DB</h3>

	<div class="row">
		<?php echo $form->labelEx($model,'database name'); ?>
		<?php echo $form->textField($model,'components[db][connectionString]',array('value'=>$model->components['db']['connectionString'], 'size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'database name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'components[db][username]',array('value'=>$model->components['db']['username'], 'size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'components[db][password]',array('value'=>$model->components['db']['password'], 'size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<h3>LDAP</h3>

	<div class="row">
		<?php echo $form->labelEx($model,'host'); ?>
		<?php echo $form->textField($model,'params[ldap][host]',array('value'=>$model->params['ldap']['host'], 'size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'host'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'port'); ?>
		<?php echo $form->textField($model,'params[ldap][port]',array('value'=>$model->params['ldap']['port'], 'size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'port'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'domain'); ?>
		<?php echo $form->textField($model,'params[ldap][domain]',array('value'=>$model->params['ldap']['domain'], 'size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'domain'); ?>
	</div>

	<h3>Administrator</h3>

	<div class="row">
		<?php echo $form->labelEx($model,'adminLogin'); ?>
		<?php echo $form->textField($model,'params[administration][adminLogin]',array('value'=>$model->params['administration']['adminLogin'], 'size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'adminLogin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adminEmail'); ?>
		<?php echo $form->textField($model,'params[administration][adminEmail]',array('value'=>$model->params['administration']['adminEmail'], 'size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'adminEmail'); ?>
	</div>

	<!--<div class="row buttons">
		<?php echo CHtml::submitButton('Save administration settings'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>--><!-- form -->
