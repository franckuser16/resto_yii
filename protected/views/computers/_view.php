<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('C_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->C_id), array('view', 'id'=>$data->C_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('C_name')); ?>:</b>
	<?php echo CHtml::encode($data->C_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('C_mac_addr')); ?>:</b>
	<?php echo CHtml::encode($data->C_mac_addr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('C_room')); ?>:</b>
	<?php echo CHtml::encode($data->C_room); ?>
	<br />


</div>