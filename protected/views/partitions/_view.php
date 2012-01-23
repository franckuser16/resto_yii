<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('P_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->P_id), array('view', 'id'=>$data->P_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('P_name')); ?>:</b>
	<?php echo CHtml::encode($data->P_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('P_description')); ?>:</b>
	<?php echo CHtml::encode($data->P_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('P_id_image')); ?>:</b>
	<?php echo CHtml::encode($data->P_id_image); ?>
	<br />


</div>