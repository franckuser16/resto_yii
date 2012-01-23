<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('D_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->D_id), array('view', 'id'=>$data->D_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('D_name')); ?>:</b>
	<?php echo CHtml::encode($data->D_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('D_host_admin')); ?>:</b>
	<?php echo CHtml::encode($data->D_host_admin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('D_domain_admin')); ?>:</b>
	<?php echo CHtml::encode($data->D_domain_admin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('D_domain_password')); ?>:</b>
	<?php echo CHtml::encode($data->D_domain_password); ?>
	<br />


</div>