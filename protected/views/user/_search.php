<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php

$form = $this->beginWidget ( 'CActiveForm', array (
		'action' => Yii::app ()->createUrl ( $this->route ),
		'method' => 'get' 
) );
?>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'admin_id'); ?>
		<?php echo $form->textField($model,'admin_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'company_id'); ?>
		<?php echo $form->textField($model,'company_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fullname'); ?>
		<?php echo $form->textField($model,'fullname',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_id'); ?>
		<?php echo $form->textField($model,'email_id',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'userphoto'); ?>
		<?php echo $form->textField($model,'userphoto',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'regdate'); ?>
		<?php echo $form->textField($model,'regdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lastactivedate'); ?>
		<?php echo $form->textField($model,'lastactivedate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'active'); ?>
		<?php echo $form->textField($model,'active'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>
<!-- search-form -->