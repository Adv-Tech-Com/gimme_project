<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->user_id), array('view', 'id'=>$data->user_id)); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('admin_id')); ?>:</b>
	<?php echo CHtml::encode($data->admin_id); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('company_id')); ?>:</b>
	<?php echo CHtml::encode($data->company_id); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('fullname')); ?>:</b>
	<?php echo CHtml::encode($data->fullname); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('email_id')); ?>:</b>
	<?php echo CHtml::encode($data->email_id); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('userphoto')); ?>:</b>
	<?php echo CHtml::encode($data->userphoto); ?>
	<br />

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('regdate')); ?>:</b>
	<?php echo CHtml::encode($data->regdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastactivedate')); ?>:</b>
	<?php echo CHtml::encode($data->lastactivedate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	
	        <b><?php echo CHtml::encode($data->getAttributeLabel('regdate'));
	        ?>:</b> <?php echo CHtml::encode($data->regdate); ?> <br /> <b><?php
	        echo CHtml::encode($data->getAttributeLabel('lastactivedate'));
	        ?>:</b> <?php echo CHtml::encode($data->lastactivedate); ?> <br />
	        <b><?php echo CHtml::encode($data->getAttributeLabel('active'));
	        ?>:</b> <?php echo CHtml::encode($data->active); ?> <br />
	       






</div>