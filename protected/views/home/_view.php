<?php
/* @var $this ProjectController */
/* @var $data Project */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->project_id), array('view', 'id'=>$data->project_id)); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('project_name')); ?>:</b>
	<?php echo CHtml::encode($data->project_name); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('project_desc')); ?>:</b>
	<?php echo CHtml::encode($data->project_desc); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('company_id')); ?>:</b>
	<?php echo CHtml::encode($data->company_id); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('createdate')); ?>:</b>
	<?php echo CHtml::encode($data->createdate); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('startdate')); ?>:</b>
	<?php echo CHtml::encode($data->startdate); ?>
	<br />

	 

	<b><?php echo CHtml::encode($data->getAttributeLabel('duedate')); ?>:</b>
	<?php echo CHtml::encode($data->duedate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('priority_id')); ?>:</b>
	<?php echo CHtml::encode($data->priority_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('db_date')); ?>:</b>
	
	        <b><?php echo CHtml::encode($data->getAttributeLabel('duedate'));
	        ?>:</b> <?php echo CHtml::encode($data->duedate); ?> <br /> <b><?php
	        echo CHtml::encode($data->getAttributeLabel('priority_id')); ?>:</b>
	        <?php echo CHtml::encode($data->priority_id); ?> <br /> <b><?php
	        echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	        <?php echo CHtml::encode($data->active); ?> <br /> <b><?php echo
	        CHtml::encode($data->getAttributeLabel('db_date')); ?>:</b> <?php
	        echo CHtml::encode($data->db_date); ?> <br />
	      




</div>