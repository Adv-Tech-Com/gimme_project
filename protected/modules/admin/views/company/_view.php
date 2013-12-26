<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->company_id), array('view', 'id'=>$data->company_id)); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('cname')); ?>:</b>
	<?php echo CHtml::encode($data->cname); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('cemail')); ?>:</b>
	<?php echo CHtml::encode($data->cemail); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('cphone')); ?>:</b>
	<?php echo CHtml::encode($data->cphone); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('cmobile')); ?>:</b>
	<?php echo CHtml::encode($data->cmobile); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('cwebsite')); ?>:</b>
	<?php echo CHtml::encode($data->cwebsite); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('ccity')); ?>:</b>
	<?php echo CHtml::encode($data->ccity); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('caddress')); ?>:</b>
	<?php echo CHtml::encode($data->caddress); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('ccountry')); ?>:</b>
	<?php echo CHtml::encode($data->ccountry); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('cdesc')); ?>:</b>
	<?php echo CHtml::encode($data->cdesc); ?>
	<br />

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('regdate')); ?>:</b>
	<?php echo CHtml::encode($data->regdate); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?> <br />
	       






</div>