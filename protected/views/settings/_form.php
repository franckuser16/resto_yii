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
		<?php echo $form->checkBox($model,'params[drbl][save][detect]',array('value'=>$model->params['drbl']['save']['detect'])); ?>
		<?php echo $form->error($model,'detect'); ?>
	</div>

	<h3>Restore</h3>

	<div class="row">
		<?php echo $form->labelEx($model,'image name'); ?>
		<?php echo $form->dropDownList($model,'params[drbl][restore][image]', CHtml::listData(Images::model()->findAll(), 'I_name', 'I_name'), array('empty'=>'select image')); ?>
		<?php echo $form->error($model,'imageName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'partition(s) to restore (full disc if empty)'); ?>
		<?php echo $form->textField($model,'params[drbl][restore][partition]',array('value'=>$model->params['drbl']['restore']['partition'], 'size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'partition(s) to save'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'wake up before restoration'); ?>
		<?php echo $form->checkBox($model,'params[drbl][restore][wakeUpBefore]',array('value'=>$model->params['drbl']['restore']['wakeUpBefore'])); ?>
		<?php echo $form->error($model,'wakeUpBefore'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'after restoration'); ?>
		<?php echo $form->dropDownList($model,'params[drbl][restore][afterRestore]',array('empty'=>'select action', 'wakeUP'=>'wake up room','shutdown'=>'shutdown room')); ?>
		<?php echo $form->error($model,'afterRestore'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'limit bandwidth (no limit if empty)'); ?>
		<?php echo $form->textField($model,'params[drbl][restore][limitBandwitdh]',array('value'=>$model->params['drbl']['restore']['limitBandwidth'], 'size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'limit bandwidth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'start even if not ready'); ?>
		<?php echo $form->checkBox($model,'params[drbl][restore][startNotReady]',array('value'=>$model->params['drbl']['restore']['startNotReady'])); ?>
		<?php echo $form->error($model,'start even if not ready'); ?>
	</div>

	<div id="adminSettings">
			<?php	$this->renderPartial('_ajaxContent', array('adminForm'=>$adminForm)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Save settings'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
