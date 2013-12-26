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
		<?php echo $form->label($model,'company_id'); ?>
		<?php echo $form->textField($model,'company_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cname'); ?>
		<?php echo $form->textField($model,'cname',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cemail'); ?>
		<?php echo $form->textField($model,'cemail'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cphone'); ?>
		<?php echo $form->textField($model,'cphone'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cmobile'); ?>
		<?php echo $form->textField($model,'cmobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cwebsite'); ?>
		<?php echo $form->textField($model,'cwebsite'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'caddress'); ?>
		<?php echo $form->textField($model,'caddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ccity'); ?>
		<?php echo $form->textField($model,'ccity'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'ccountry'); ?>
		<?php echo $form->textField($model,'ccountry'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'cdesc'); ?>
		<?php echo $form->textField($model,'cdesc'); ?>
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