<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php

$form = $this->beginWidget ( 'CActiveForm', array (
		'id' => 'user-form',
		// Please note: When you enable ajax validation, make sure the
		// corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated
		// controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation' => false 
) );
?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'admin_id'); ?>
		<?php echo $form->textField($model,'admin_id'); ?>
		<?php echo $form->error($model,'admin_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company_id'); ?>
		<?php echo $form->textField($model,'company_id'); ?>
		<?php echo $form->error($model,'company_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fullname'); ?>
		<?php echo $form->textField($model,'fullname',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'fullname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_id'); ?>
		<?php echo $form->textField($model,'email_id',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'email_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'userphoto'); ?>
		<?php echo $form->textField($model,'userphoto',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'userphoto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'regdate'); ?>
		<?php echo $form->textField($model,'regdate'); ?>
		<?php echo $form->error($model,'regdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastactivedate'); ?>
		<?php echo $form->textField($model,'lastactivedate'); ?>
		<?php echo $form->error($model,'lastactivedate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'active'); ?>
		<?php echo $form->textField($model,'active'); ?>
		<?php echo $form->error($model,'active'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>
<!-- form -->