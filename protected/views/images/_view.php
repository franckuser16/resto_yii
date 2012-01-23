<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('I_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->I_id), array('view', 'id'=>$data->I_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('I_name')); ?>:</b>
	<?php echo CHtml::encode($data->I_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('I_disk_name')); ?>:</b>
	<?php echo CHtml::encode($data->I_disk_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('I_description')); ?>:</b>
	<?php echo CHtml::encode($data->I_description); ?>
	<br />


</div>