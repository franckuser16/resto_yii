<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'settings-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<h2>DRBL/Clonezilla</h2>

	<h3>Save</h3>

	<div class="row">
		<?php echo $form->labelEx($model,'partition(s) to save (full disc if empty)'); ?>
		<?php echo $form->textField($model,'params[drbl][save][partition]',array('value'=>$model->params['drbl']['save']['partition'], 'size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'partition(s) to save'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image name'); ?>
		<?php echo $form->textField($model,'params[drbl][save][imageName]',array('value'=>$model->params['drbl']['save']['imageName'], 'size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'imageName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'auto detect image'); ?>
		<?php echo $form->checkBox($model,'params[drbl][save][detect]',array('value'=>$model->params['drbl']['save']['detect'], 'size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'detect'); ?>
	</div>

	<h3>Restore</h3>

	<div class="row">
		<?php echo $form->labelEx($model,'image name'); ?>
		<?php echo $form->dropDownList($model,'params[drbl][restore][imageName]',array('value'=>$model->params['drbl']['restore']['imageName'], 'size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'imageName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'partition(s) to restore (full disc if empty)'); ?>
		<?php echo $form->textField($model,'params[drbl][restore][partition]',array('value'=>$model->params['drbl']['restore']['partition'], 'size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'partition(s) to save'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'wake up before restoration'); ?>
		<?php echo $form->checkBox($model,'params[drbl][restore][wakeUpBefore]',array('value'=>$model->params['drbl']['restore']['wakeUpBefore'], 'size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'wakeUpBefore'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'after restoration'); ?>
		<?php echo $form->dropDownList($model,'params[drbl][restore][afterRestore]',array('value'=>$model->params['drbl']['restore']['afterRestore'], 'size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'afterRestore'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'limit bandwidth (no limit if empty)'); ?>
		<?php echo $form->textField($model,'params[drbl][restore][limitBandwitdh]',array('value'=>$model->params['drbl']['restore']['limitBandwidth'], 'size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'limit bandwidth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'start even if not ready'); ?>
		<?php echo $form->checkBox($model,'params[drbl][restore][startNotReady]',array('value'=>$model->params['drbl']['restore']['startNotReady'], 'size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'start even if not ready'); ?>
	</div>

	<h2>Log</h2>

	<div class="row">
		<?php echo $form->labelEx($model,'start even if not ready'); ?>
		<?php echo $form->checkBox($model,'params[drbl][restore][startNotReady]',array('value'=>$model->params['drbl']['restore']['startNotReady'], 'size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'start even if not ready'); ?>
	</div>

	<h2>DB</h2>

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
		<?php echo $form->textField($model,'components[db][password]',array('value'=>$model->components['db']['password'], 'size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<h2>LDAP</h2>

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

	<h2>Administration</h2>

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

	<div class="row buttons">
		<?php echo CHtml::submitButton('Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
