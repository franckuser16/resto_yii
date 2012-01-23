<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'D_id'); ?>
		<?php echo $form->textField($model,'D_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'D_name'); ?>
		<?php echo $form->textField($model,'D_name',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'D_host_admin'); ?>
		<?php echo $form->textField($model,'D_host_admin',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'D_domain_admin'); ?>
		<?php echo $form->textField($model,'D_domain_admin',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->